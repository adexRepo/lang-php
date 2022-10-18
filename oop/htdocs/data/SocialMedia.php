<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia // jika ini final maka akan stop disini, Facebook tidak bisa membuat anak lagi
{

}

// class FakeFacebook extends Facebook // tidak error jika facebook atau Social media tidak final
// {

// }




 class Instagram extends SocialMedia
{
    final public function login(string $username, string $password):void
    {
        
    }
}

class FakeInstagram extends Instagram
{
//     public function login(string $username, string $password):void  // error karena function login sudah final, jadi gabisa di override
//     {
        
//     }
}