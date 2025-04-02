<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactroy;
    protected $fillable = [
        'title',
        'band',
        'labels_id_ref',

    ];
}
