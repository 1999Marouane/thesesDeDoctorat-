<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theses extends Model
{
    protected $fillable = [
        'title',
        'author',
        'abstract',
        'jury_members',
        'year_of_defense',
        'research_domain'
       
    ];
    use HasFactory;
}
