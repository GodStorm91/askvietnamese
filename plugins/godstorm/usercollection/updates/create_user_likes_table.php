<?php 
namespace Godstorm\UserCollection\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserLikesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('godstorm_usercollection_user_likes');
        Schema::create('godstorm_usercollection_user_likes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('post_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('godstorm_usercollection_user_likes');
    }
}
