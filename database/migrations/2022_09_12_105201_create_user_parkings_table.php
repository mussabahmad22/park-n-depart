<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voids
     */
    public function up()
    {
        Schema::create('user_parkings', function (Blueprint $table) {
            $table->id();
            $table->string('car_drop_date');
            $table->string('car_drop_time');
            $table->string('car_pick_date');
            $table->string('car_pick_time');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('no_plate');
            $table->string('state');
            $table->string('make_of_vehicle')->default(NULL);
            $table->string('color')->default(NULL);
            $table->string('model')->default(NULL);
            $table->string('contact')->default(NULL);
            $table->string('suv');
            $table->string('check_in');
            $table->string('bicycle_rack');
            $table->string('signature_initial')->default(NULL);
            $table->string('pic_1')->default(NULL);
            $table->string('pic_2')->default(NULL);
            $table->string('pic_3')->default(NULL);
            $table->string('pic_4')->default(NULL);
            $table->string('pic_5')->default(NULL);
            $table->string('signature_final')->default(NULL);
            $table->string('attendent')->default(NULL);
            $table->string('ticket_no')->default(NULL);
            $table->string('booking_site')->default(NULL);
            $table->string('reservation')->default(NULL);
            $table->string('due_at_lot')->default(NULL);
            $table->string('add_1')->default(NULL);
            $table->string('add_2')->default(NULL);
            $table->string('paid')->default(NULL);
            $table->string('due')->default(NULL);
            $table->longText('office_desc')->default(NULL);
            $table->string('customer_sig')->default(NULL);



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
        Schema::dropIfExists('user_parkings');
    }
}
