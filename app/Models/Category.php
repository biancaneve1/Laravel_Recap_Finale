<?php

namespace App\Models;

use App\Models\Art;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function arts(){
        return $this->hasMany(Art::class);
    }
}
