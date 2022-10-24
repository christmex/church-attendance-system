<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congregations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->foreignId('congregation_status_id')->nullable()->constrained()->nullOnDelete();
            // $table->bigInteger('parent_id')->nullable();
            // $table->bigInteger('partner_id')->nullable();
            // $table->foreignId('family_status_id')->nullable()->constrained()->nullOnDelete();
            // $table->enum('sex',['Laki-Laki','Perempuan']);
            // $table->enum('sex', ['Pria', 'Wanita']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('congregations');
    }
};
