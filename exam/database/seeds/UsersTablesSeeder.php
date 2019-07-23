<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
          ['id'=>1,'name'=>'Patrick Duculan','email'=>'patrick_duculan@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>2,'name'=>'Max Burke','email'=>'max_burke@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>3,'name'=>'Eleni Ewing','email'=>'eleni_ewing@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>4,'name'=>'Neelam Barker','email'=>'neelam_barker@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10),],
          ['id'=>5,'name'=>'Rosa Roy','email'=>'rosa_roy@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>6,'name'=>'Dilan Bryant','email'=>'dilan_bryant@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>7,'name'=>'Juno Key','email'=>'juno_key@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>8,'name'=>'Catherine Prentice','email'=>'catherine_prentice@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>9,'name'=>'Hector Baker','email'=>'hector_baker@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>10,'name'=>'Ella Esquivel','email'=>'ella_esquivel@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>11,'name'=>'Alan Walker','email'=>'alan_walker@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>12,'name'=>'Zahra Rhodes','email'=>'zahra_rhodes@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>13,'name'=>'Naomi King','email'=>'naomi_king@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>14,'name'=>'Jaimee Ozawa','email'=>'jaimee_ozawa@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>15,'name'=>'Jason Chen','email'=>'jason_chen@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>16,'name'=>'Alexandre Oconnell','email'=>'alexandre_oconnell@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>17,'name'=>'Katerina Wilkins','email'=>'katerina_wilkins@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>18,'name'=>'Campbell Leal','email'=>'campbell_leal@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>19,'name'=>'Peyton King','email'=>'peyton_king@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)],
          ['id'=>20,'name'=>'Castro Key','email'=>'castro_key@test.com','password'=>Hash::make('user123'),'remember_token'=>str_random(10)]
        ];

        // Instead of insert. To maintain the timestamp functionalities
        foreach($usersData as $user){
          User::create($user);
        }
    }
}
