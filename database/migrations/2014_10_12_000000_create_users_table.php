<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('role_id')->nullable();
            $table->string('sales_level_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('current_lat')->nullable(); // latitude
            $table->string('current_lgn')->nullable(); // longitudinal
            $table->string('update_location_date')->nullable(); // 
            $table->string('is_active')->nullable(); // 
            $table->string('nik')->nullable(); // 
            $table->datetime('created_at')->nullable(); // 
            $table->string('created_by')->nullable(); // 
            $table->datetime('updated_at')->nullable(); // 
            $table->string('updated_by')->nullable(); // 
            $table->datetime('last_update_password_date')->nullable(); // 
            $table->string('last_update_password_by')->nullable(); // 
            $table->string('is_privilage')->nullable(); // 
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
