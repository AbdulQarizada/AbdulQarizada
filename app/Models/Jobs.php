<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'PositionID' ,
        'PositionName' ,
        'CanApplyOnline',
        'CompanyID',
        'CompanyName',
        'CompanyProfile',
        'ContractType',
        'ExpireDate',
        'ExpiringDuration',
        // 'FunctionalArea',
        'Gender',
        'IsExtensible',
        'LocationsCountry',
        'LocationsProvince',
        'MinimumEducation',
        'NumberOfVaccancies',
        'PublishDate',
        'RefreshDate',
        'PostingStatus',
        'SubmissionEmails',
        'SubmissionGuideline',
        'Summary',
        'WorkType',
        'MinYearsOfExperience',
        'ViewsCount',
        'Advertiser',
        'Status',
        'Owner'


    ];
}
