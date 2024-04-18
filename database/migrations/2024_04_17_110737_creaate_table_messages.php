<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\MessageTypesEnum;
use App\Enums\MessageStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->enum('type', array_column(MessageTypesEnum::cases(), 'value'));
            $table->enum('status', array_column(MessageStatusEnum::cases(), 'value'))
                ->default(MessageStatusEnum::Waiting->value);
            $table->text('message')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
