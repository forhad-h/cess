<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name', 50);
            $table->string('customer_email', 80)->unique();
            $table->string('customer_phone', 30);
            $table->string('customer_address', 150)->nullable();
            $table->string('customer_image', 100)->nullable();
            $table->string('customer_status', 11)->default(1);
            $table->timestamps();
            $table->string('delete_hierarchy', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
