<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->timestamps();
        });
        DB::table('sections')->insert(
            array(
                array(
                    'section'=>'about'
                ),
                array(
                    'section' => 'services'
                ),
                array(
                    'section' => 'choose'
                ),
                array(
                    'section' => 'team'
                ),
                array(
                    'section' => 'clients'
                ),
                array(
                    'section' => 'contact'
                ),
                array(
                    'section' => 'portfolio'
                ),
                array(
                    'section' => 'testimonials'
                ),

            )
            );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
