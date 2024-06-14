<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';

    protected $fillable = [
        'id',
        'name',
        'status_id',
        'description'
    ];

    public function status () {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function reports() {
        return $this->hasMany(Report::class, 'device_id', 'id');
    }
}
