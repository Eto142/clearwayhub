<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('ssn')->unique();
            $table->date('dob');
            $table->string('mailing_address');
            $table->string('physical_address')->nullable();
            $table->string('filing_status');
            $table->text('dependents')->nullable();
            $table->decimal('income_amount', 12, 2);
            $table->string('id_upload'); // store file path
            $table->string('purpose');
            $table->string('employment_status');
            $table->text('source_income');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
