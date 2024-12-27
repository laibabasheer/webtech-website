<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToServicesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('services', 'user_id')) {
            Schema::table('services', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id')->after('id')->nullable();
            });
        }
    }
    

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
