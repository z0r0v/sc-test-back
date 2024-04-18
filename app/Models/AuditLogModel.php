<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AuditLogModel extends Model
{
    use HasFactory;

    protected $table = 'audit_log';

    protected $fillable = [
        'message_id',
        'actioned_by',
    ];

    public function message(): HasOne {
        return $this->hasOne(Message::class, 'id', 'message_id');
    }

    public function actionedBy(): HasOne {
        return $this->hasOne(User::class, 'id', 'actioned_by');
    }
}
