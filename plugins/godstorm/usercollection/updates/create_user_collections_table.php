<?php 
namespace Godstorm\UserCollection\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUserCollectionsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('godstorm_usercollection_user_collections');
        Schema::create('godstorm_usercollection_user_collections', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('collection_name');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('godstorm_usercollection_user_collections');
    }
}
