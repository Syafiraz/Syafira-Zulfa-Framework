<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // ubah enum role, tambahkan 'owner'
        DB::statement("ALTER TABLE users MODIFY role ENUM('root','admin','owner','user') DEFAULT 'user'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // rollback: hapus 'owner'
        DB::statement("ALTER TABLE users MODIFY role ENUM('root','admin','user') DEFAULT 'user'");
    }
};
