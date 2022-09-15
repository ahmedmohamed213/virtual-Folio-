<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'data_filter_name'];
    public static function rules()
    {
        return [
            'name' => 'required|min:3',
            'data_filter_name' => 'required'
        ];
    }
    public function portfolios()
    {
        return $this->hasMany(portfolio::class, 'portfoliio_category_id', 'id');
    }
}