<?php
namespace App\Traits;
use DB;

trait TestTrait
{
    public function addNameToTestTable($dta)
    {
        if($dta){
          $strToInsert = array('user_employee_name' => $dta);
          DB::table('tests')->insert($strToInsert);
        }
    }
}
