<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'disasterId',
        'picture',
        'location',
        'details',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function disaster(){
        return $this->belongsTo(Disaster::class);
    }

    public function disasterReportFeedback(){
        return $this->hasOne(DisasterReportFeedback::class);
    }


}
