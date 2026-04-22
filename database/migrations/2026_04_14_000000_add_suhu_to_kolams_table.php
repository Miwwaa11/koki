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
        Schema::table('kolams', function (Blueprint $table) {
            $table->decimal('suhu', 5, 2)->nullable()->after('ukuran')->comment('Suhu air dalam derajat Celcius');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kolams', function (Blueprint $table) {
            $table->dropColumn('suhu');
        });
    }
};
