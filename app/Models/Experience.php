<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';
    protected $primaryKey = 'experienceId';
    public $timestamps = false;
    protected $fillable = ['jobTitle', 'companyName', 'employmentType', 'startDate', 'endDate', 'description', 'link'];
}
