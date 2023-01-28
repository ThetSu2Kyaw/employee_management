<?php

namespace Helpers;

class EmployeeHelper{

    public function formatCurrency(String $annual_salary): String
    {
        return "$".$annual_salary;
    }
}