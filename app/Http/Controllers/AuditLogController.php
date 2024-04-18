<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuditLogResource;
use App\Models\AuditLogModel;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AuditLogController extends Controller
{
    public function get(): ResourceCollection {
        return AuditLogResource::collection(AuditLogModel::with(['message', 'actionedBy'])->get());
    }
}
