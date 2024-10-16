<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('playlist_name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playlists');
        Schema::table('playlists', function (Blueprint $table) {
            $table->string('image')->nullable(); // Kolom untuk gambar
            $table->string('artist_name')->nullable(); // Kolom untuk nama artist
        });
        
    }
    
}