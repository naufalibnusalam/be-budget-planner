<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('description');
            $table->unsignedBigInteger('source_id');
            $table->date('date');
            $table->boolean('recurring');
            $table->string('recurring_type')->nullable();
            $table->decimal('amount', 15, 2);
            $table->softDeletes();
            $table->timestamps();

            //relationship user
            $table->foreign('user_id')->references('id')->on('users');

            //relationship source
            $table->foreign('source_id')->references('id')->on('sources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
