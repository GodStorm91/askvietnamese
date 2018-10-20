<?php
namespace Godstorm\Contributor\Updates;

use Railab\User\Models\User;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddDetailsToUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('details', 600)->nullable();
        });

    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn(['details']);
        });    }
}
