<?php
include_once("authorization.php");
if(isset($_POST['a'])){
    $action = $_POST['a'];
}
else{
    $action = "";
}
switch($action)
{
    case 'auth':
        authUserFunc($_POST);
        break;
    case 'out':
        exitUser($_POST);
        break;

}
