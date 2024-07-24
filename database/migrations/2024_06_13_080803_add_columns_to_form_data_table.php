<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFormDataTable extends Migration
{
    // database/migrations/2024_06_13_080803_add_columns_to_form_data_table.php
    public function up()
    {
        Schema::table('form_data', function (Blueprint $table) {
            if (!Schema::hasColumn('form_data', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('form_data', 'file_path')) {
                $table->string('file_path')->after('name');
            }
            if (!Schema::hasColumn('form_data', 'text_data')) {
                $table->text('text_data')->after('file_path');
            }
            if (!Schema::hasColumn('form_data', 'url')) {
                $table->string('url')->after('text_data');
            }
        });
    }

    public function down()
    {
        Schema::table('form_data', function (Blueprint $table) {
            if (Schema::hasColumn('form_data', 'name')) {
                $table->dropColumn('name');
            }
            if (Schema::hasColumn('form_data', 'file_path')) {
                $table->dropColumn('file_path');
            }
            if (Schema::hasColumn('form_data', 'text_data')) {
                $table->dropColumn('text_data');
            }
            if (Schema::hasColumn('form_data', 'url')) {
                $table->dropColumn('url');
            }
        });
    }

}
