<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateActividads extends Migration{
	public function up(){ 
 		Schema::create('actividads', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->integer('dia');
			$table->string('horario');
			$table->integer('animal_id');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}