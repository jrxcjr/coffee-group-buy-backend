<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            Schema::table('coffees', function (Blueprint $table){
                $table->uuid('public_id');
            });

            Schema::table('group_sales', function (Blueprint $table){
                $table->uuid('public_id');
            });

            Schema::table('orders', function (Blueprint $table){
                $table->uuid('public_id');
            });

            Schema::table('roasters', function (Blueprint $table){
                $table->uuid('public_id');
            });

            Schema::table('user_profiles', function (Blueprint $table){
                $table->uuid('public_id');
            });

            Schema::table('users', function (Blueprint $table){
                $table->uuid('public_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coffees', function (Blueprint $table){
            $table->dropColumn('public_id');
        });

        Schema::table('group_sales', function (Blueprint $table){
            $table->dropColumn('public_id');
        });

        Schema::table('orders', function (Blueprint $table){
            $table->dropColumn('public_id');
        });

        Schema::table('roasters', function (Blueprint $table){
            $table->dropColumn('public_id');
        });

        Schema::table('user_profiles', function (Blueprint $table){
            $table->dropColumn('public_id');
        });

        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('public_id');
        });
    }
};
