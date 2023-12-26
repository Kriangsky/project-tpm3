<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malls extends Model
{
    use HasFactory;

    protected $fillable = [
        'Daerah',
        'Name',
        'Email',
        'Image',
        'CategoryId'
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
