<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReffsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('gym_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('money', function (Blueprint $table) {
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });

        Schema::table('client_trainer', function (Blueprint $table) {
            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign('clients_trainer_id_foreign');
            $table->dropColumn('trainer_id');
            $table->dropForeign('clients_gym_id_foreign');
            $table->dropColumn('gym_id');
        });

        Schema::table('money', function (Blueprint $table) {
            $table->dropForeign('money_subscription_id_foreign');
            $table->dropColumn('subscription_id');
            $table->dropForeign('money_client_id_foreign');
            $table->dropColumn('client_id');
        });

        Schema::table('client_trainer', function (Blueprint $table) {
            $table->dropForeign('client_trainer_trainer_id_foreign');
            $table->dropColumn('trainer_id');
            $table->dropForeign('client_trainer_client_id_foreign');
            $table->dropColumn('client_id');
        });
    }
}
