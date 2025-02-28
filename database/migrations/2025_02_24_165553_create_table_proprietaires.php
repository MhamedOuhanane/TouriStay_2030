<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // DB::statement('CREATE TABLE proprietaires() INHERITS(users)');
        
        // DB::statement(
        //         'ALTER TABLE proprietaires ADD CONSTRAINT proprietaires_id_pkey PRIMARY KEY (id);'
        //     );

        DB::statement(
            'CREATE TABLE proprietaires(
                id BIGSERIAL PRIMARY KEY,
                CONSTRAINT proprietaires_id_unique UNIQUE (id)
            ) INHERITS(users)'
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietaires');
    }
};
