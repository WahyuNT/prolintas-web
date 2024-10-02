<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    use HasFactory;
    protected $table = 'landing';
    protected $fillable = ['title', 'subtitle', 'description', 'image', 'icon', 'is_active', 'maps_link', 'type'];
}
