<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Autorise l'assignation massive pour les champs 'title' et 'content'
    protected $fillable = ['title', 'content'];
}

