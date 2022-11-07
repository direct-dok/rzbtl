<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDescriptionForCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts_categories', function (Blueprint $table) {
            $table->text('title')->nullable(false)->after('name');
            $table->text('preview')->nullable(false)->after('title');
            $table->text('description')->nullable(false)->after('preview');
            $table->text('keywords')->nullable(false)->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts_categories', function (Blueprint $table) {
            $table->dropColumn('preview');
            $table->dropColumn('description');
            $table->dropColumn('keywords');
            $table->dropColumn('title');
        });
    }
}
