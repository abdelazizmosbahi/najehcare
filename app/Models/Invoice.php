<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['appointment_id', 'amount', 'status'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}

