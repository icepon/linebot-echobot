<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_errno) {
    error_log("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
} else {
    // set name for utf8 content
    mysqli_query($conn,"SET NAMES UTF8");
}

function getFanLocationNearby($lat,$lon){
    $sql="SELECT entity_id, field_location_lat, field_location_lng, 
                ( 3959 * acos( cos( radians(".$lat.") ) * cos( radians( field_location_lat ) ) * cos( radians( field_location_lng ) - radians(".$lon.") ) + sin( radians(".$lat.") ) * sin( radians( field_location_lat ) ) ) ) AS distance 
                FROM user__field_location 
                HAVING distance < 5 
                ORDER BY distance 
                LIMIT 0,5";
    return db_query_result($sql);
}

function db_query_result($sql){
  global $conn;
  //echo "<pre>".$sql."</pre>";
  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      // return result
      return $result;
    } else {
      // return null
      return null;
    }
  } else {
    // return null
    return null;
  }
}

?>