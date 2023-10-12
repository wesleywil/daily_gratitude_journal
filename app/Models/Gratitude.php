<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gratitude extends Model
{
    protected $table = 'journal.gratitudes';

    protected $fillable = ['message'];
}