<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vac_email', 255);
            $table->string('vac_phone', 100);
            $table->string('vac_position', 100);
            $table->integer('vac_min_salary');
            $table->integer('vac_max_salary');
            $table->integer('vac_min_age');
            $table->integer('vac_max_age');
            $table->text('vac_requirements');
            $table->text('vac_job_description');
            $table->text('cv_skills_detail');
            $table->text('cv_personal_info');
            $table->string('vac_company_name', 255);
            $table->string('vac_contact', 255);
            $table->timestamp('cv_add_date');
            $table->timestamp('cv_expire_date');
            $table->integer('cv_experience_id');
            $table->integer('cv_education_id');
            $table->integer('cv_category_id');
            $table->integer('cv_city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacancy');
    }
}
