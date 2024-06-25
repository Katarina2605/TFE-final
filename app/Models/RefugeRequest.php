<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefugeRequest extends Model
{
    use HasFactory;

    protected $fillable = ['nom_refuge', 'adresse_refuge', 'numero_refuge', 'site_web_refuge'];
}

