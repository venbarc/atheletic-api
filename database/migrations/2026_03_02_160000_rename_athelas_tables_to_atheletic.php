<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('athelas_data_dumps') && ! Schema::hasTable('athletic_data_dumps')) {
            Schema::rename('athelas_data_dumps', 'athletic_data_dumps');
        }

        if (Schema::hasTable('athelas_appts') && ! Schema::hasTable('athletic_appts')) {
            Schema::rename('athelas_appts', 'athletic_appts');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('athletic_data_dumps') && ! Schema::hasTable('athelas_data_dumps')) {
            Schema::rename('athletic_data_dumps', 'athelas_data_dumps');
        }

        if (Schema::hasTable('athletic_appts') && ! Schema::hasTable('athelas_appts')) {
            Schema::rename('athletic_appts', 'athelas_appts');
        }
    }
};

