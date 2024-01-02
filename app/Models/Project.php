<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'projectId';
    public $timestamps = false;
    protected $fillable = ['projectName', 'projectLink', 'projectDescription'];
}
