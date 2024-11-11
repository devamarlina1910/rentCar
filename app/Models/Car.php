<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'license_plate',
        'description',
        'image',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Mengakses URL gambar
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}