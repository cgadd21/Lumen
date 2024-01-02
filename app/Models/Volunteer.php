<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = 'volunteer';
    protected $primaryKey = 'volunteerId';
    public $timestamps = false;
    protected $fillable = ['jobTitle', 'companyName', 'description', 'link'];
}
