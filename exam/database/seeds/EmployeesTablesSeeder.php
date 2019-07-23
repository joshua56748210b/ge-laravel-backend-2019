<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Employee;

class EmployeesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeesData = [
          ['id'=>1,'name'=>'Patrick Duculan'],
          ['id'=>2,'name'=>'Max Burke'],
          ['id'=>3,'name'=>'Eleni Ewing'],
          ['id'=>4,'name'=>'Neelam Barker'],
          ['id'=>5,'name'=>'Rosa Roy'],
          ['id'=>6,'name'=>'Dilan Bryant'],
          ['id'=>7,'name'=>'Juno Key'],
          ['id'=>8,'name'=>'Catherine Prentice'],
          ['id'=>9,'name'=>'Hector Baker'],
          ['id'=>10,'name'=>'Ella Esquivel'],
          ['id'=>11,'name'=>'Alan Walker'],
          ['id'=>12,'name'=>'Zahra Rhodes'],
          ['id'=>13,'name'=>'Naomi King'],
          ['id'=>14,'name'=>'Jaimee Ozawa'],
          ['id'=>15,'name'=>'Jason Chen'],
          ['id'=>16,'name'=>'Alexandre Oconnell'],
          ['id'=>17,'name'=>'Katerina Wilkins'],
          ['id'=>18,'name'=>'Campbell Leal'],
          ['id'=>19,'name'=>'Peyton King'],
          ['id'=>20,'name'=>'Castro Key']
        ];

        Employee::insert($employeesData);
        //DB::table('employees')->insert($employeesData);
    }
}
