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
        Schema::table('tbl_barangmasuk', function (Blueprint $table) {
            $table->string('bm_noref')->nullable()->after('bm_kode');
        });

        Schema::table('tbl_barangkeluar', function (Blueprint $table) {
            $table->string('bk_noref')->nullable()->after('bk_kode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_barangmasuk', function (Blueprint $table) {
            $table->dropColumn('bm_noref');
        });

        Schema::table('tbl_barangkeluar', function (Blueprint $table) {
            $table->dropColumn('bk_noref');
        });
    }
};
