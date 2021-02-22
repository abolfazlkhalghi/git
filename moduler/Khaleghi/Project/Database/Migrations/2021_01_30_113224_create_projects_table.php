<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');  //نام پروژه
            $table->string('slug');//نام مستعار
            $table->string('img');
            $table->text('dictionary');//توضیحات
            $table->string('capital_required');//   سرمایه لازم
            $table->string('namber');
            $table->string('amountMain'); //مبلغ اصلی پروژه
            $table->string('AstanQuds');// در صد مشارکت آستان قدس
            $table->String('position');//نهاد
            $table->String('Phase');//فاز های پروژه
            $table->String('author');//نویسنده
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
