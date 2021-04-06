<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGooglevisionFieldsToAnnouncementImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('announcement_images', function (Blueprint $table) {
            $table->text('labels')->nullable()->after('announcement_id');
            $table->string('adult')->nullable()->after('announcement_id');
            $table->string('spoof')->nullable()->after('announcement_id');
            $table->string('medical')->nullable()->after('announcement_id');
            $table->string('violence')->nullable()->after('announcement_id');
            $table->string('racy')->nullable()->after('announcement_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('announcement_images', function (Blueprint $table) {
            $table->dropColumn(['labels','adult','spoof','medical','violence','racy']);
        });
    }
}
