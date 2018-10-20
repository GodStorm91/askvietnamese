<?php
namespace Godstorm\Contributor\Updates;

use Railab\User\Models\User;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddDetailToContributor extends Migration
{
    public function up()
    {
        Schema::table('godstorm_contributor_contributors', function($table)
        {
            $table->string('details', 400)->nullable();
        });

    }

    public function down()
    {
        Schema::table('godstorm_contributor_contributors', function($table)
        {
            $table->dropColumn(['details']);
        });    }
}
