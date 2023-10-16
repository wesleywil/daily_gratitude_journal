<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Gratitude extends Model
{
    protected $table = 'journal.gratitudes';

    protected $fillable = ['userId','message'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class, 'userId');
    }
}