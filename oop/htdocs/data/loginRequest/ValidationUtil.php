<?php

class ValidationUtil
{
    static function validateNotByReflection(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
        } else if (!isset($request->password)) {
            throw new ValidationException("Password is null");
        } else if (is_null($request->username)) {
            throw new Exception("Username is Empty");
        } else if (is_null($request->password)) {
            throw new Exception("Password is Empty");
        }
    }

    static function validateByReflection($request)
    {
        // cara pak eko akses public
        $reflection = new ReflectionClass($request); // bakal mencopy semuanya yang ada di class yang di request
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC); // akan mengambil semua properties yang public
        foreach ($properties as $property) {
                if(!$property->isInitialized($request)){
                    throw new ValidationException("Property " . $property->name . " is not set");
                } else if(is_null($property->getValue($request))){
                    throw new ValidationException("Property " . $property->name . " is null");
                }
        }

        // cara github
        // $reflection = new ReflectionClass($request);
        // $properties = $reflection->getProperties();
        // foreach ($properties as $property) {
        //     $property->setAccessible(true);
        //     $value = $property->getValue($request);
        //     if (is_null($value)) {
        //         throw new ValidationException("{$property->getName()} is null");
        //     }
        // }
    }
}