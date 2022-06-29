<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->nullable();
            $table->bigInteger('items_id')->unsigned();
            $table->foreign('items_id')->references('id')->on('portfolio_items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_attachments');
    }
}
