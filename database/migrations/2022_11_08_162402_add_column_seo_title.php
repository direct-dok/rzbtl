<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSeoTitle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('seo_title')->nullable(false)->after('content');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->text('seo_title')->nullable(false)->after('edit_date');
        });

        Schema::table('posts_categories', function (Blueprint $table) {
            $table->text('seo_title')->nullable(false)->after('preview');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('seo_title');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('seo_title');
        });

        Schema::table('posts_categories', function (Blueprint $table) {
            $table->dropColumn('seo_title');
        });
    }
}
