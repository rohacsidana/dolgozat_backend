<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->date('date');
            $table->longText('location', 150);
            $table->integer('fee');
            $table->timestamps();
        });
        Event::create(['date' => '2022-11-10', 'location' => 'Veresegyház Fő út 60.', 'fee' => 5000]);
        Event::create(['date' => '2022-11-11', 'location' => 'Veresegyház Nap utca 12.', 'fee' => 1200]);
        Event::create(['date' => '2022-11-13', 'location' => 'Veresegyház Hold utca 2.', 'fee' => 1400]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
