<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catId')->constrained('blog_category')->onDelete('CASCADE');
        
            $table->string('enTitle');
            $table->string('arTitle');
            $table->string('baTitle');
            $table->string('enSlug')->unique();
            $table->string('arSlug')->unique();
            $table->string('baSlug')->unique();
            $table->text('enInfo');
            $table->text('arInfo');
            $table->text('baInfo');
            $table->string('img');
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
        Schema::dropIfExists('blogs');
    }
}
