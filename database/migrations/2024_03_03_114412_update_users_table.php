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
        Schema::table('users', function (Blueprint $table) {
            //$table->string('name', 60)->change();	//Ne fonctionne pas avec ENUM
        

            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->string('login', 30)->after('id')->default('');
            $table->string('langue', 2);
            $table->enum('role', ['admin','member',])
                ->default('member');
            $table->timestamps();
            $table->unique('login', 'users_login_unique');
        });

        DB::statement('ALTER TABLE users MODIFY COLUMN firstname VARCHAR(60)');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_login_unique');

            $table->dropColumn(['role', 'langue', 'login', 'lastname']);
            $table->string('firstname', 255)->change();
            $table->renameColumn('firstname', 'name');
        });

    }
};
