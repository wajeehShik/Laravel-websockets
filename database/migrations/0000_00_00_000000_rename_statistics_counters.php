<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RenameStatisticsCounters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            // $table->renameColumn('peak_connection_count', 'peak_connections_count');
            DB::statement('ALTER TABLE `websockets_statistics_entries` CHANGE
             `peak_connection_count` `peak_connections_count` INT UNSIGNED');

        });
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            // $table->renameColumn('websocket_message_count', 'websocket_messages_count');

            DB::statement('ALTER TABLE `websockets_statistics_entries` CHANGE
             `websocket_message_count` `websocket_messages_count` INT UNSIGNED');
        });
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            // $table->renameColumn('api_message_count', 'api_messages_count');
            DB::statement('ALTER TABLE `websockets_statistics_entries` CHANGE
             `api_message_count` `api_messages_count` INT UNSIGNED');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            $table->renameColumn('peak_connections_count', 'peak_connection_count');
        });
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            $table->renameColumn('websocket_messages_count', 'websocket_message_count');
        });
        Schema::table('websockets_statistics_entries', function (Blueprint $table) {
            $table->renameColumn('api_messages_count', 'api_message_count');
        });
    }
}
