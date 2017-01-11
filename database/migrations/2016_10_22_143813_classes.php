<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Classes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('classes', function ($table) {
            $table->dropColumn('Teacher');
        });
        
        Schema::table('classes', function ($table) {
            $table->string('First');
        });
        
        Schema::table('classes', function ($table) {
            $table->string('Last');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
