<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('layouts',function($table){
                    
                    $table->integer('id')->primary();
                    $table->string('layout_title')->nullable();
                    $table->string('author')->nullable();
                    $table->string('description')->nullable();
                    $table->text('css_src')->nullable();
                    $table->text('js_src')->nullable();
                    $table->text('navigation')->nullable();
                    $table->text('footer')->nullable();
                    $table->text('full_layout')->nullable();
                    $table->string('published_by');
                    $table->string('updated_by');             
                    $table->timestamps();
                    
                    
                    
                }
                        
                        
                        
                        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('layouts');
	}

}
