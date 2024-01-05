<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'nama', 'keterangan'
    ];

    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}