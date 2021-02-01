<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSha1ToMd5generatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('md5generators', function (Blueprint $table) {
           $table->string('sha1hash')->after('md5hash');
           $table->string('crc32hash')->after('md5hash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('md5generators', function (Blueprint $table) {
            //
        });
    }
}
