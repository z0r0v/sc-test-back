<?php

namespace App\Http\Controllers;

use App\Data\MessagePostData;
use App\Data\MessagePutData;
use App\Enums\MessageStatusEnum;
use App\Enums\MessageTypesEnum;
use App\Models\Message;
use Illuminate\Http\Request;
use Auth;

class MessagesController extends Controller
{
    public function get() {
        $messages = Message::where('status', MessageStatusEnum::Waiting)->get();

        return response()->json($messages);
    }

    public function post(MessagePostData $data) {
        $message = new Message([
            'type' => $data->type,
            'status' => MessageStatusEnum::Waiting,
            'message' => $data->message,
            'item_id' => $data->item_id,
            'created_by' => Auth::user()->id,
        ]);

        $message->save();

        return response()->json($message);
    }

    public function put(Message $message, MessagePutData $data) {
        $message->status = $data->status;
        $message->save();

        return response()->json($message);
    }
}
