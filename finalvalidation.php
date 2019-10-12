<?php

//validating the csrf cookie with the token submitted with the form.
//if cookie doesn't exist
if(!$_COOKIE['csrf_token']){
    echo "CSRF token cookie is missing. Please login again";
    return 0;
}
//if the cookie matches the token
if($_COOKIE['csrf_token'] == $_POST["csrf_token"]){
    echo "CSRF token cookie was successfully validated.\n";
    echo "".$_COOKIE['csrf_token'];

}
//if the cookie does not match the token
else{
    echo "CSRF token cookie is not valid. Please login again";
}
