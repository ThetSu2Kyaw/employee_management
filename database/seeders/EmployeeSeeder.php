<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            [
                'eeid'=> 'E02387',
                'full_name' => 'Emily Davis',
                'job_title' => 'Sr. Manager',
                'gender' => 'Female',
                'age' => 55,
                'hire_date' => '2016-08-04',
                'annual_salary' => '$141,604',
                'bonus' => '15%', 
            ],
            [
                'eeid'=> 'E04105',
                'full_name' => 'Theodore Dinh',
                'job_title' => 'Technical Architect',
                'gender' => 'Male',
                'age' => 59,
                'hire_date' => '1997-11-29',
                'annual_salary' => '$99,975',
                'bonus' => '0%', 
            ],
            [ 	
                'eeid'=> 'E02572',
                'full_name' => 'Luna Sanders',
                'job_title' => 'Director',
                'gender' => 'Female',
                'age' => 50,
                'hire_date' => '2006-10-26',
                'annual_salary' => '$163,099',
                'bonus' => '20%', 
            ],
            [ 	
                'eeid'=> 'E02832',
                'full_name' => 'Penelope Jordan',
                'job_title' => 'Computer Systems Manager',
                'gender' => 'Female',
                'age' => 26,
                'hire_date' => '2019-09-27',
                'annual_salary' => '$84,913',
                'bonus' => '7%', 
            ],
            [ 	
                'eeid'=> 'E01639',
                'full_name' => 'Austin Vo',
                'job_title' => 'Sr. Analyst',
                'gender' => 'Male',
                'age' => 55,
                'hire_date' => '1995-11-20',
                'annual_salary' => '$95,409',
                'bonus' => '0%', 
            ],
            [ 	
                'eeid'=> 'E00644',
                'full_name' => 'Joshua Gupta',
                'job_title' => 'Account Representative',
                'gender' => 'Male',
                'age' => 57,
                'hire_date' => '2017-01-24',
                'annual_salary' => '$50,994',
                'bonus' => '0%', 
            ],
            [ 		
                'eeid'=> 'E01550',
                'full_name' => 'Ruby',
                'job_title' => 'Barnes	Manager',
                'gender' => 'Female',
                'age' => 27,
                'hire_date' => '2020-01-07',
                'annual_salary' => '$119,746',
                'bonus' => '10%', 
            ],
            [ 				
                'eeid'=> 'E04332',
                'full_name' => 'Luke Martin',
                'job_title' => 'Analyst',
                'gender' => 'Male',
                'age' => 25,
                'hire_date' => '2020-05-16',
                'annual_salary' => '$41,336',
                'bonus' => '0%', 
            ],
            [ 				
                'eeid'=> 'E04533',
                'full_name' => 'Easton Bailey',
                'job_title' => 'Manager',
                'gender' => 'Male',
                'age' => 29,
                'hire_date' => '2019-01-25',
                'annual_salary' => '$113,527',
                'bonus' => '6%', 
            ],
            [ 		
                'eeid'=> 'E03838',
                'full_name' => 'Madeline Walker',
                'job_title' => 'Sr. Analyst',
                'gender' => 'Female',
                'age' => 34,
                'hire_date' => '2018-06-13',
                'annual_salary' => '$77,203',
                'bonus' => '0%', 
            ],
        ]);
    }
}
