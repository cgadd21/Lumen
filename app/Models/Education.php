<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'educationId';
    public $timestamps = false;
    protected $fillable = ['institutionName', 'degree', 'graduationYear'];
}
