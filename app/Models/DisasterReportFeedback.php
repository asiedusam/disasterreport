<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterReportFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'disasterReportId',
        'status',
        'details',
    ];
    public function disasterReport(){
        return $this->belongsTo(DisasterReport::class);
    }
}
