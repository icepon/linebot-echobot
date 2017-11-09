<?php


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case '1nb_approve':
            echo "1";
            break;
        case 'inb_approve':
            echo "2";
            break;
    }
}

function 1nb_approve() {
  echo "The insert function is called.";
    exit;
   
}
function inb_approve() {
  echo "The insert function is called.";
    exit;

}


function 1nb_reject() {
    echo "The insert function is called.";
    exit;
}
?>
