<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prefecture_id',
    ];

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}
