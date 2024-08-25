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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('recipient_name');
            $table->text('address');
            $table->decimal('weight', 8, 2); // for the weight, with 2 decimal places
            $table->decimal('value', 10, 2); // for parcel value, with 2 decimal places
            $table->decimal('amount_paid', 10, 2); // for amount paid, with 2 decimal places
            $table->text('description')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
