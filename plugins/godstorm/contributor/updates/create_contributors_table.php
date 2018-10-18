<?php

namespace Godstorm\Contributor\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateContributorsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('godstorm_contributor_contributors');
        Schema::create('godstorm_contributor_contributors', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('profile_picture');
            $table->integer('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('godstorm_contributor_contributors');
    }
}
