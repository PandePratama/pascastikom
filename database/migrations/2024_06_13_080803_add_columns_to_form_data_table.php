<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFormDataTable extends Migration
{
    public function up()
    {
        Schema::table('form_data', function (Blueprint $table) {
            $table->string('name')->after('id'); // Tambahkan kolom name
            $table->string('file_path')->after('name'); // Tambahkan kolom file_path
            $table->text('text_data')->after('file_path'); // Tambahkan kolom text_data
            $table->string('url')->after('text_data'); // Tambahkan kolom url
        });
    }

    public function down()
    {
        Schema::table('form_data', function (Blueprint $table) {
            $table->dropColumn(['name', 'file_path', 'text_data', 'url']);
        });
    }
}
