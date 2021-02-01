<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFoldersToCommentformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commentforms', function (Blueprint $table) {
            $table-> string('comment_author_ip')->after('comment')->nullable();
            $table-> integer('comment_approved')->default(0)->after('comment');
            $table->string('comment_agent')->nullable()->after('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentforms', function (Blueprint $table) {
            //
        });
    }
}
