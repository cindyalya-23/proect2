<?php

class Koneksi
{

    protected object $koneksi;

    public function __construct()
    {
        try {
            $this->koneksi = new PDO("mysql:host=localhost;dbname=dbakademik", "root", "");
        } catch (PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
