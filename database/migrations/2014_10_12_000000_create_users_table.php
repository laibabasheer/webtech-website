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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
};




// Example migration for services table
Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->string('role')->default('user'); // Default role is 'user'
    $table->timestamps();
});

// Seeder for dummy data
\App\Models\Service::create(['name' => 'Web Development', 'description' => 'We build modern websites.']);
\App\Models\Service::create(['name' => 'App Development', 'description' => 'Custom mobile applications.']);
