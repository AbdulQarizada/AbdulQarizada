<?php

namespace App\Logics;

use Illuminate\Support\Facades\Http;
use App\Models\Jobs;


class Advertisers
{


  // Scrapper for Jobs.af
  public function JobsAF()
  {
    $datas = Http::get('https://www.jobs.af/api/v2.5/jobs/latest?filter={"limit":1200000,"skip":0}')->collect();
    foreach ($datas as $data)
    {
      $InsertedJobs = Jobs::where("PositionID", "=", $data['id'])->get();;
      if(!$InsertedJobs)
      {


        Jobs::create([
          "PositionID" => $data['id'] ?? null,
          "PositionName" => $data['position'] ?? null,
          "CanApplyOnline" => $data['canApplyOnline'] ?? null,
          "CompanyID" => $data['company']['id'] ?? null,
          "CompanyName" => $data['company']['name'] ?? null,
          "CompanyProfile" => $data['company']['profile'] ?? null,
          "ContractType" => $data['contractType'] ?? null,
          "ExpireDate" => $data['expireDate'] ?? null,
          "ExpiringDuration" => $data['expiringDuration'] ?? null,
          // "FunctionalArea" => $data['functionalArea'][0],
          "Gender" => $data['gender'],
          "IsExtensible" => $data['isExtensible'] ?? null,
          "LocationsCountry" => $data['locations'][0] ?? null,
          "LocationsProvince" => $data['locations'][1] ?? null,
          "MinimumEducation" => $data['minimumEducation'] ?? null,
          "NumberOfVaccancies" => $data['number'] ?? null,
          "PublishDate" => $data['publishDate'] ?? null,
          "RefreshDate" => $data['refreshDate'] ?? null,
          "PostingStatus" => $data['status'] ?? null,
          "SubmissionEmails" => $data['submissionEmails'][0] ?? null,
          "SubmissionGuideline" => $data['submissionGuideline'] ?? null,
          "Summary" => $data['summary'] ?? null,
          "WorkType" => $data['workType'] ?? null,
          "MinYearsOfExperience" => $data['yearsOfExperience']['min'] ?? null,
          "ViewsCount" => $data['viewsCount'] ?? null,
          "Advertiser" => "Jobs.af",
          "Status" => "Initial",
          "Owner" => 1,
        ]);
      }
      }

  }
}
