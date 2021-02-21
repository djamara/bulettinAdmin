<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'activite';

    /**
     * Run the migrations.
     * @table activite
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idactivite')->default('0');
            $table->date('date_activite')->nullable()->default(null);
            $table->bigInteger('projet_activte')->nullable()->default(null);
            $table->string('activite_actualite')->nullable()->default(null);
            $table->bigInteger('projet_idprojets')->nullable()->default(null);
            $table->integer('impactHomme')->nullable()->default('0');
            $table->integer('impactFemme')->nullable()->default('0');
            $table->integer('impactEnfant')->nullable()->default('0');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
