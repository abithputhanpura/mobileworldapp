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
        Schema::table('solddetails', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address_detail');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solddetails', function (Blueprint $table) {
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('address_detail');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('pincode');
            $table->dropColumn('phone');
        });
    }
};
