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
        Schema::create('tc_product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('reference', 20);
            $table->string('name');
            $table->longText('description');
            $table->tinyinteger('status_id')->default(1);
            $table->decimal('price', 15, 2)->nullable();
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc_product');
    }
};
