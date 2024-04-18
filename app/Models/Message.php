<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'status',
        'message',
        'item_id',
        'player_id',
        'created_by',
    ];

    public function item(): HasOne {
        return $this->hasOne(Item::class, 'id',  'item_id');
    }

    public function player(): HasOne {
        return $this->hasOne(Player::class, 'id',  'player_id');
    }
}
