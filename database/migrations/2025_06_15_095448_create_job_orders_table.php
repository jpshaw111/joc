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
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->date('jos_date');

            $table->bigInteger('type_of_work_id')->index()->unsigned()->nullable(false);
            $table->foreign('type_of_work_id')->references('id')->on('type_of_works')->onDelete('cascade');
            $table->bigInteger('contractor_id')->index()->unsigned()->nullable(false);
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->bigInteger('conductor_id')->index()->unsigned()->nullable(false);
            $table->foreign('conductor_id')->references('id')->on('conductors')->onDelete('cascade');

            $table->decimal('actual_work_completed', 10, 2);
            $table->text('remarks');
            $table->string('reference_number')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};
