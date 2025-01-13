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
        Schema::create('dgii_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('status');
            $table->foreignIdFor(\App\Models\Cert::class)->constrained();
            $table->string('sequence_number');
            $table->string('security_code');
            $table->string('signature_date');
            $table->string('signed_xml');
            $table->string('xml_path')->nullable();
            $table->json('request')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dgii_requests');
    }
};
