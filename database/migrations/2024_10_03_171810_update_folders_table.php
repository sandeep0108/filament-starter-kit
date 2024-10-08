<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->boolean('is_public')->default(true)->nullable();
            $table->boolean('has_user_access')->default(false)->nullable();
            $table->uuid('user_id')->nullable();
            $table->string('user_type')->nullable();
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropColumn('is_public');
            $table->dropColumn('has_user_access');
            $table->dropColumn('user_id');
            $table->dropColumn('user_type');
        });
    }
};
