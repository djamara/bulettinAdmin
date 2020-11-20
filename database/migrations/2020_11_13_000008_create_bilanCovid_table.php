<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilancovidTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'bilanCovid';

    /**
     * Run the migrations.
     * @table bilanCovid
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idbilanCovid');
            $table->date('bilanCovid_date')->nullable();
            $table->integer('bilanCovid_nbre_cas_actif')->nullable();
            $table->integer('bilanCovid_nbre_infectes')->nullable();
            $table->integer('bilanCovid_deces')->nullable();
            $table->integer('bilanCovid_gueris')->nullable();
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
