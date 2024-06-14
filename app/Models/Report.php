<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'id',
        'device_id',
        'description'
    ];

    public function device () {
        return $this->belongsTo(Device::class, 'device_id');
    }
}
