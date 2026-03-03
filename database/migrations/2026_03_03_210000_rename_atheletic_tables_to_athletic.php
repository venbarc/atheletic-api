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
        $this->renameIfNeeded('atheletic_data_dumps', 'athletic_data_dumps');
        $this->renameIfNeeded('atheletic_appts', 'athletic_appts');
        $this->renameIfNeeded('atheletic_eligibility_checks', 'athletic_eligibility_checks');
        $this->renameIfNeeded('atheletic_prior_auths', 'athletic_prior_auths');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $this->renameIfNeeded('athletic_data_dumps', 'atheletic_data_dumps');
        $this->renameIfNeeded('athletic_appts', 'atheletic_appts');
        $this->renameIfNeeded('athletic_eligibility_checks', 'atheletic_eligibility_checks');
        $this->renameIfNeeded('athletic_prior_auths', 'atheletic_prior_auths');
    }

    private function renameIfNeeded(string $from, string $to): void
    {
        if (Schema::hasTable($from) && ! Schema::hasTable($to)) {
            Schema::rename($from, $to);
        }
    }
};