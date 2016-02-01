<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SnippetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('snippets',  function ($table){
                
                $table->integer('id')->primary();
                $table->string('title',128)->nullable();
                $table->text('content')->nullable();
                $table->integer('created_by_id')->default(1);
                $table->integer('updated_by_id')->default(1);
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
		Schema::drop('snippets');
	}

}
