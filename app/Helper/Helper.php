<?php

namespace App\Helper;

use Str;

class Helper
{
    public static function generatePassword($length = 8)
    {
        // Definisikan karakter yang akan digunakan dalam password
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        // Gabungkan semua karakter yang dibutuhkan
        $characters = $lowercase . $uppercase . $numbers;

        // Pastikan password panjangnya sesuai dengan yang diinginkan
        $password = '';

        // Setidaknya satu karakter dari setiap tipe (huruf kecil, huruf besar, angka)
        $password .= $lowercase[random_int(0, strlen($lowercase) - 1)]; // Huruf kecil
        $password .= $uppercase[random_int(0, strlen($uppercase) - 1)]; // Huruf besar
        $password .= $numbers[random_int(0, strlen($numbers) - 1)];   // Angka

        // Untuk memenuhi panjang password yang diminta, tambahkan karakter acak
        for ($i = strlen($password); $i < $length; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }

        // Acak urutan karakter dalam password
        $password = Str::random($length);

        return $password;
    }
}
