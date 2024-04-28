<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing UNSIGNED BIGINT (primary key)
            $table->string('make')->default('Unknown');
            $table->string('model')->nullable(); // Nullable VARCHAR equivalent column
            $table->integer('year'); // INTEGER equivalent column
            $table->decimal('price', 8, 2); // DECIMAL equivalent column with a precision of 8 and scale of 2
            $table->text('description'); // TEXT equivalent column
            $table->boolean('is_featured')->default(false); // BOOLEAN equivalent column with a default value of false
            $table->date('manufacture_date'); // DATE equivalent column
            // $table->dateTime('created_at'); // DATETIME equivalent column
            $table->timestamps(); // Adds TIMESTAMP 'created_at' and 'updated_at' columns
            $table->softDeletes(); // Adds 'deleted_at' column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
