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
        Schema::create('jos_job_order_links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_order_statement_id')->index()->unsigned()->nullable(false);
            $table->foreign('job_order_statement_id')->references('id')->on('job_order_statements')->onDelete('cascade');

            $table->bigInteger('job_order_id')->index()->unsigned()->nullable(false);
            $table->foreign('job_order_id')->references('id')->on('job_orders')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jos_job_order_links');
    }
};
