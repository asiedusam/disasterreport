<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function disasterReport(){
        return $this->hasMany(DisasterReport::class);
    }
}
