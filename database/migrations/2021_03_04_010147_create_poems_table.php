<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poems', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content'); // The poem itself
            $table->text('translation'); // Translation for the poem if any
            $table->string('citation'); //Which chapter or passage poem was cited
            $table->text('comment'); // Text for longer comments on poem
            $table->text('intextref'); // Passage referencing poem in the chapters.
            $table->string('recitedby'); // Who recited the poem
            $table->string('language'); // Language poem is in
            $table->string('bgimage'); // Background image for poem
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poems');
    }
}
