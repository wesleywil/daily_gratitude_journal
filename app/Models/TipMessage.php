<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TipMessage extends Model
{
    protected $table = 'journal.tip_messages';
    protected $fillable = ['message'];
}