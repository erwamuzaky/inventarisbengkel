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
    Schema::create('service', function (Blueprint $table) {
        $table->id();
        $table->string('no_service');

        $table->foreignId('pelanggan_id')
              ->constrained('pelanggan')
              ->onDelete('cascade');

        $table->text('kerusakan');
        $table->date('tanggal');

        $table->enum('status', [
            'Proses',
            'Selesai'
        ]);

        $table->timestamps();
    });
}
};
