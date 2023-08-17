<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
   final public function login(string $username, string $password) {
        return true;
    }
}

// jika diset final class turunan nya tidak bisa digunakan begitu juga jika function diset final
// final class FakeFacebook extends Facebook
// {
//     // error
//     public function login(string $username, string $password) {
//         return true;
//     }
// }