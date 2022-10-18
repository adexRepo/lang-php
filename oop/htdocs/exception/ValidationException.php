<?php

class ValidationException extends Exception{
    public function __construct($message){
        echo $message;
    }
}