<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class PinSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $nama = $faker->name;
            $panggilan = explode(' ', $nama);
            $panggilan = reset($panggilan);

            $data = [
                'nama'          => $nama,
                'panggilan'     => $panggilan,
                'tanggalLahir'  => Time::createFromTimestamp('201423199' + $faker->unixTime($max = '1088640000')),
                'alamat'        => $faker->address,
                'created_at'    => Time::createFromTimestamp('1290063199' + $faker->unixTime($max = '311040000')),
                'updated_at'    => Time::now()
            ];
            $this->db->table('pin')->insert($data);
        }

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
    }
}
