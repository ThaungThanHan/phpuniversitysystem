<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('program_type');
            $table->string('host_country');
            $table->string('admin');
            $table->string('website');
            $table->string('eligible_country');
            $table->longtext('description',1000);
            $table->longtext('eligibilities',1000);
            $table->longtext('benefits',1000);
            $table->dateTime('deadline');
            $table->string('duration');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('program_image');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
