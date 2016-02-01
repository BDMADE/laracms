<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('pages',  function ($table){
                
                $table->integer('id')->primary();
                $table->string('title',128)->nullable();
                $table->string('route',123)->nullable();
                $table->string('breadcumbs')->nullable();
                $table->string('keywords')->nullable();
                $table->text('description')->nullable();
                $table->text('content')->nullable();
                $table->string('tags')->nullable();
                $table->integer('filter_id')->default(0);

                
                $table->integer('layout_id')->default(0);
                $table->integer('layout_name')->nullable();
                $table->integer('parent_id')->default(0);
                $table->integer('status_id')->default(0);
                $table->integer('created_by_id')->default(1);
                $table->integer('updated_by_id')->default(1);
                $table->date('valid_until')->nullable();
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
            Schema::drop('pages');
            
	}

}
