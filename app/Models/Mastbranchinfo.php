<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mastbranchinfo extends Model
{
    protected $primaryKey = 'MBranchInfo_Code ';
    // public $timestamps = true;
    public $connection = 'secondary';
    public $timestamps = false;
    protected $table = 'mastbranchinfo';
    use HasFactory;
}
