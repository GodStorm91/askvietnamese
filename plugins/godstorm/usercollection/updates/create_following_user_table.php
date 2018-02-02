<?php 
namespace Godstorm\UserCollection\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFollowingUsersTable extends Migration
{
    public function up()
    {
        Schema::create('godstorm_usercollection_user_followings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('collection_name');
            $table->integer('following_user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('godstorm_usercollection_user_followings');
    }
}
