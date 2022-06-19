<?php
namespace App\Database\Seeds; 
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel'); 
        $model->insert([
            'username' => 'Anisa',
            'useremail' => 'anisaidrsty131@gmail.com',
            'userpassword' => password_hash('anisa123', PASSWORD_DEFAULT),
        ]);
    }
}