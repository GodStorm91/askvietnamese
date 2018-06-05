<?php
namespace Godstorm\UserCollection\Updates;

use Railab\User\Models\User;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddPostIdsToCollections extends Migration
{
    public function up()
    {
        Schema::table('godstorm_usercollection_user_collections', function($table)
        {
            $table->string('posts', 400)->nullable();
        });
        
    }

    public function down()
    {
        Schema::table('godstorm_usercollection_user_collections', function($table)
        {
            $table->dropColumn(['posts']);
        });    }
}
