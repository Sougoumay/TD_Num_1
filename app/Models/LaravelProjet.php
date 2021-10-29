<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelProjet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['last_name','first_name','profession','PhoneNumber','email','status'];
}
