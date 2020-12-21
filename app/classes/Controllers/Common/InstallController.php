<?php

namespace App\Controllers\Common;

use App\App;
use Core\FileDB;

class InstallController
{
    public function install()
    {
        App::$db = new FileDB(DB_FILE);

        App::$db->createTable('users');
        App::$db->insertRow('users', ['email' => 'test@test.lt', 'password' => 'test', 'user_name' => 'testas', 'role' => 'user']);
        App::$db->createTable('offers');
        App::$db->insertRow('offers', ['offer' => 'Privatus treneris', 'img' => '../img/trainer.jpg', 'offer_info' => 'Privatus treneris Jūsų individualiai mankštai']);
        App::$db->insertRow('offers', ['offer' => 'Sauna', 'img' => '../img/trainer.jpg', 'offer_info' => 'Sauna, atsigauti po mankštos']);
        App::$db->insertRow('offers', ['offer' => 'Masažas', 'img' => '../img/trainer.jpg', 'offer_info' => 'Masažas Jūsų pavargusiems raumenims']);


    }
}

