<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('PositionID')->nullable();
            $table->string('PositionName')->nullable();
            $table->string('CanApplyOnline')->nullable();
            $table->string('CompanyID')->nullable();
            $table->string('CompanyName')->nullable();
            $table->longText('CompanyProfile')->nullable();
            $table->string('ContractType')->nullable();

            $table->string('PublishDate')->nullable();
            $table->string('RefreshDate')->nullable();
            $table->string('ExpireDate')->nullable();
            $table->string('ExpiringDuration')->nullable();
            // $table->string('FunctionalArea')->nullable();
            $table->string('Gender')->nullable();
            $table->string('IsExtensible')->nullable();
            $table->string('LocationsCountry')->nullable();
            $table->string('LocationsProvince')->nullable();
            $table->string('MinimumEducation')->nullable();
            $table->string('NumberOfVaccancies')->nullable();

            $table->string('PostingStatus')->nullable();
            $table->string('SubmissionEmails')->nullable();
            $table->longText('SubmissionGuideline')->nullable();
            $table->longText('Summary')->nullable();
            $table->string('WorkType')->nullable();
            $table->string('MinYearsOfExperience')->nullable();
            $table->string('ViewsCount')->nullable();
            $table->string('Advertiser')->nullable();
            $table->string('Status')->nullable();
            $table->integer('Created_By')->nullable();
            $table->integer('Owner')->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
