<?php namespace Acme\Demo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('acme_demo_tasks', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->boolean('is_complete')->defaut(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_demo_tasks');
    }
}
