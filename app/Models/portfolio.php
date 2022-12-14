<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'tags', 'portfolio_category_id'];

    public function category()
    {
        return $this->belongsTo(portfolioCategory::class, 'portfolio_category_id', 'id');
    }

    public static function rules()
    {
        return [
            'title' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'portfolio_category_id' => 'required|exists:portfolio_categories,id'
        ];
    }
}
