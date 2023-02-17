<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brewery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'description', 'imagen', 'map'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
