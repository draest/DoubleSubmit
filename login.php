<?php
//hardcoded username and password
$username = "admin";
$password = "password";

//if the details match, this section should execute
//a unique id is generated and set for the session
//a unique csrf token is generated based on the session id that was generated
//3 cookies are set in the browser.
if ($_POST['username'] == $username && $_POST['pass'] == $password){
    $session_id = uniqid();
    $csrf_token = uniqid() . $session_id;


    setcookie('session_id', $session_id, time() + (86400 * 30), "/");
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('csrf_token', $csrf_token, time() + (86400 * 30), "/");
    header("location:welcome.php");
}