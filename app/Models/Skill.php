<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';
    protected $primaryKey = 'skillId';
    public $timestamps = false;
    protected $fillable = ['category', 'skillName'];
}
