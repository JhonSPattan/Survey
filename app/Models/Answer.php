<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $primaryKey = 'IdAnswer  ';
    public $timestamps = false;
    protected $table = 'answer';
    use HasFactory;
}
