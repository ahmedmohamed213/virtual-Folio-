<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['icon', 'title', 'body'];

    // public static function rules()
    // {
    //     return [
    //         'icon' => 'required',
    //         'title' => 'required',
    //         'body' => 'required'
    //     ];
    // }
}