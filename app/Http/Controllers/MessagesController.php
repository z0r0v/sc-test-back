<?php

namespace App\Http\Controllers;

use App\Data\MessagePostData;
use App\Data\MessagePutData;
use App\Enums\MessageStatusEnum;
use App\Http\Resources\MessageResource;
use App\Models\AuditLogModel;
use App\Models\Message;
use Auth;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MessagesController extends Controller
{
    public function get(): ResourceCollection {
        $messages = Message::where('status', MessageStatusEnum::Waiting)->get();

        return MessageResource::collection($messages);
    }

    public function post(MessagePostData $data): MessageResource {
        $message = new Message([
            'type' => $data->type,
            'status' => MessageStatusEnum::Waiting,
            'message' => $data->message,
            'item_id' => $data->item_id,
            'created_by' => Auth::user()->id,
        ]);

        $message->save();

        return new MessageResource($message);
    }

    public function put(Message $message, MessagePutData $data): MessageResource {
        $message->status = $data->status;
        $message->save();

        $auditLog = new AuditLogModel([
            'message_id' => $message->id,
            'actioned_by' => Auth::user()->id,
        ]);
        $auditLog->save();

        return new MessageResource($message);
    }
}
