<?php

require_once 'Login_Request.php';

function ValidateLoginRequest (LoginRequest $request){

    if(!isset($request->username)){
        throw new ValidationException("Username is required");
    }else if(!isset($request->password)){
        throw new ValidationException("Password is required");
    }else if(trim($request->username) == ''){
        throw new Exception("Username is Empty");
    }else if(trim($request->password) == ''){
        throw new Exception("Password is Empty");
    }


    // cara gitcopilot
    // if(empty($request->username)){
    //     throw new ValidationException("Username is required");
    // }
    // if(empty($request->password)){
    //     throw new ValidationException("Password is required");
    // }
}