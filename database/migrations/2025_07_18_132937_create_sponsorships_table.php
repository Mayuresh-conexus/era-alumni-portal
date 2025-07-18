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
    public function up(): void
{
    Schema::create('sponsorships', function (Blueprint $table) {
        $table->id();
        $table->string('sponsor_name');
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('featured_image')->nullable();
        $table->string('company_name');
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
        Schema::dropIfExists('sponsorships');
    }
};
