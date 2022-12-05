<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class laptop extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'laptop';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merk', 'processor', 'penyimpanan', 'ram'
    ];
}
