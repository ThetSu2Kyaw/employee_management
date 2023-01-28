<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'eeid';

    public $incrementing = false;

    protected function getBonusAttribute($value)
    {
        return $value."%";
    }

}
