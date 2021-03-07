<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Khaleghi\Project\Models\Project;
class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('auther_id')->unsigned();
            $table->bigInteger('catyegory_id')->unsigned()->nullable();
            $table->bigInteger('banner_id')->unsigned()->nullable();
            $table->string('name');  //نام پروژه
            $table->string('slug');//نام مستعار
            $table->float('prioity')->nullable();//ردیف نمایش
            $table->string('price',10);//مبلغ
            $table->string('percent',5);//درصد مشارکت
            $table->enum('status',Project::$statuses);//وضعیت پروژه
            $table->string('Participant');//مشارکت کننده
            $table->longText('body')->nullable();//توضیحات
            $table->string('namber')->nullable();;
            $table->string('contribution')->nullable();; //سهم
            $table->String('Phase')->nullable();;//فاز های پروژه
            $table->string('AstanQuds'); //مشارکت آستان قدس
            $table->timestamps();
            //
            $table->foreign('catyegory_id')
            ->references('id')
            ->on('categories')
            ->onDelete('SET NULL');
            $table->foreign('auther_id')
            ->references('id')
            ->on('users')
            ->onDelete('CASCADE');
            $table->foreign('banner_id')
            ->references('id')
            ->on('media')
            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
          
        });
        Schema::dropIfExists('projects');


    }
}
