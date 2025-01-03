<?php

use App\Enums\Sequence\StatusEnum;
use App\Enums\Sequence\TypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sequences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('range_start');
            $table->integer('range_end');
            $table->integer('current_number');
            $table->enum('status', array_column(StatusEnum::cases(), 'value'));
            $table->enum('type', array_column(TypeEnum::cases(), 'value'));
            $table->string('series');
            $table->unsignedTinyInteger('length')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sequences');
    }
};
