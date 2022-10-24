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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->constrained('congregations')->onDelete('cascade');
            $table->foreignId('relative_id')->constrained('congregations')->onDelete('cascade');
            $table->foreignId('family_status_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('is_head_of_family')->default(false);
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
        Schema::dropIfExists('families');
    }
};
