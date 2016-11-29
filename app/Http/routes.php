<?php
use Illuminate\Http\Request;


function authenticate($user, $password) {
     $_user_ = USERNAME;
     $_password_ = PASSWORD;

    if (($user == $_user_)&&($password == $_password_)) { return 0; }
    else { return 1; };
}

function destroy_foo(){
        if (isset($_SERVER['PHP_AUTH_USER'])) {
            unset($_SERVER['PHP_AUTH_USER']);       
        }
        if (isset($_SERVER['PHP_AUTH_PW'])) {
            unset($_SERVER['PHP_AUTH_PW']);
        }
}

$array = array("Message" => "Authorization has been denied for this request.");

$app->get('/API/v1/','InforAccountController@WriteAccount');



?>

