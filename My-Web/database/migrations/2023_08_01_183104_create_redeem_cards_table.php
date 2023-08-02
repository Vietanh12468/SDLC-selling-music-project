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
        Schema::create('redeem_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('redeem_code')->unique();
            $table->boolean('status')->default(false);
            $table->float('value');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('redeem_cards');
    }
};
