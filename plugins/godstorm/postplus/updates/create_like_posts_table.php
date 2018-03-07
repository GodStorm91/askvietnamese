<?php 
namespace Godstorm\PostPlus\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserCollectionsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('godstorm_postplus_post_likes');
        Schema::create('godstorm_postplus_post_likes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('godstorm_postplus_post_likes');
    }
}
