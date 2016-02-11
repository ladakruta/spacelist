<?php
chdir('..');
include_once 'include.php';

switch ($_POST['action']) {
    case 'delete':
        echo $Spaceman->delete($_POST['id']);    
        break;

    case 'add' :
        $data = array(
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'birthdate' => date('Y-m-d', strtotime($_POST['birthdate'])),
            'superskill' => $_POST['superskill'],
        );
        echo $Spaceman->insert($data); 
        break;
}
