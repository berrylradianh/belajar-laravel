<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','excerpt', 'body']; //yang boleh diisi, sisanya tidak boleh
    // protected $guarded = ['id']; //yang tidak boleh diisi, sisanya boleh
}
