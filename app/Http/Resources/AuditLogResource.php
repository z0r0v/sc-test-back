<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuditLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        self::withoutWrapping();

        return [
            'id' => $this->resource->id,
            'created_at' => $this->resource->created_at,
            'message' => [
                'id' => $this->resource->message->id,
                'type' => $this->resource->message->type,
                'status' => $this->resource->message->status,
                'message' => $this->resource->message->message,
                'item_id' => $this->resource->message->item_id,
                'player_id' => $this->resource->message->player_id,
                'created_by' => $this->resource->message->created_by,
                'created_at' => $this->resource->message->created_at,
                'item' => [
                    'id' => $this->resource->message->item_id,
                ],
                'player' => [
                    'id' => $this->resource->message->player->id,
                    'name' => $this->resource->message->player->name,
                ],
            ],
            'actioned_by' => [
                'id' => $this->resource->actionedBy->id,
                'name' => $this->resource->actionedBy->name,
                'email' => $this->resource->actionedBy->email,
                'role' => $this->resource->actionedBy->role,
            ]
        ];
    }
}
