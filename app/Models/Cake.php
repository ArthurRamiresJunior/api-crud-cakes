<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'weight', 'price', 'quantity'];

    public function interestedEmails()
    {
        return $this->hasMany(InterestedEmail::class, 'cake_id', 'id');
    }
}
