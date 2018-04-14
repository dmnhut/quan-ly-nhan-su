<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfileModel extends Model
{
    protected $table = 'student_profile';
    protected $primaryKey = 'student_id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'student_id',
        'user_name',
        'birthday',
        'gender',
        'place_birth',
        'address',
        'permanent_address',
        'home_town',
        'dad_name',
        'dad_job',
        'dad_phone',
        'mom_job',
        'mom_phone',
        'mom_name',
        'status'
    ];
    public $incrementing = false;
}
