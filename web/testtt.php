<?php


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case '1nb_approve':
            1nb_approve;
            break;
        case 'inb_approve':
            inb_approve();
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
