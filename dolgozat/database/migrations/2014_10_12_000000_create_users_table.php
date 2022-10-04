<?php

use App\Models\User;
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
            $table->integer('budget');
            $table->timestamps();
        });
        User::create(['name' => 'Ecseri Andrea', 'email' => 'ecsiandi@gmail.com','budget'=>30000]);
        User::create(['name' => 'Vágó Zoltán', 'email' => 'vzoli@gmail.com','budget'=>16000]);
        User::create(['name' => 'Kántor Daisy', 'email' => 'dkantor@gmail.com','budget'=>32000]);
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
