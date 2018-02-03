<?php
namespace Godstorm\UserCollection\Updates;

use Railab\User\Models\User;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddAvatarColumnToUser extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('avatar', 200)->nullable();
        });
        
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn(['avatar']);
        });    }
}
