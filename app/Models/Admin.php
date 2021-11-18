<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Admin extends Model
{
public $table = 'admins';
public $fillable = ['name','email','message'];
}