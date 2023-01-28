<?php

namespace App\GraphQL\Queries;

use App\Models\Employee;

class EmployeeQuery
{
    public function all()
    {
        return Employee::all();
    }

    public function find($root, array $args){
        return Employee::find($args['eeid']);
    }
}
