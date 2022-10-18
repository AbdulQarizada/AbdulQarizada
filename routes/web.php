<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\QamarCareCardController;
use App\Http\Controllers\EducationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();






Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'root'])->name('index');


//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//  Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Dashvoard
Route::get('/root', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// Get District
Route::get('/GetDistricts/{data}', [App\Http\Controllers\HomeController::class, 'GetDistricts'])->name('GetDistricts');

//create lookups
Route::post('/CreateLookups', [App\Http\Controllers\HomeController::class, 'CreateLookups'])->name('CreateLookups');


Route::get('/Projects', [App\Http\Controllers\HomeController::class, 'Projects'])->name('Projects');

Route::get('/BeneficiariesServices', [App\Http\Controllers\HomeController::class, 'BeneficiariesServices'])->name('BeneficiariesServices');

Route::get('/Reports', [App\Http\Controllers\HomeController::class, 'Reports'])->name('Reports');

Route::get('/UserManagement', [App\Http\Controllers\HomeController::class, 'UserManagement'])->name('UserManagement');


// uploads
Route::post('UserManagement/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');
Route::post('/Employees_Profile', [App\Http\Controllers\HomeController::class, 'Employees_Profile'])->name('Employees_Profile');






Route::post('/Education/Scholarship', [App\Http\Controllers\HomeController::class, 'Scholarship'])->name('Scholarship');

// Get Scholarship
Route::get('/GetScholarship/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarship'])->name('GetScholarship');

// Get Scholarship Module
Route::get('/GetScholarshipModule/{data}', [App\Http\Controllers\HomeController::class, 'GetScholarshipModule'])->name('GetScholarshipModule');

// uploads of orphans
Route::post('/OrphansRelief/Orphans_Tazkira', [App\Http\Controllers\HomeController::class, 'Orphans_Tazkira'])->name('Orphans_Tazkira');
Route::post('/OrphansRelief/Orphans_Profile', [App\Http\Controllers\HomeController::class, 'Orphans_Profile'])->name('Orphans_Profile');
Route::post('/OrphansRelief/Orphans_FamilyPic', [App\Http\Controllers\HomeController::class, 'Orphans_FamilyPic'])->name('Orphans_FamilyPic');
Route::post('/OrphansRelief/Orphans_HousePic', [App\Http\Controllers\HomeController::class, 'Orphans_HousePic'])->name('Orphans_HousePic');

// Education

Route::get('/Education', [App\Http\Controllers\EducationController::class, 'Index'])->name('IndexEducation');

Route::get('/Education/Scholarship', [App\Http\Controllers\EducationController::class, 'AllScholarship'])->name('AllScholarshipEducation');

// create scholarship
Route::get('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'CreateScholarship'])->name('CreateScholarship');
Route::post('/Education/Scholarship/Create', [App\Http\Controllers\EducationController::class, 'StoreScholarship'])->name('CreateScholarship');

// delete
Route::get('/Education/Scholarship/Delete/{data}', [App\Http\Controllers\EducationController::class, 'DeleteScholarship'])->name('DeleteScholarship');


Route::get('/Education/Scholarship/Active', [App\Http\Controllers\EducationController::class, 'ActiveScholarship'])->name('ActiveScholarship');
Route::get('/Education/Scholarship/Closed', [App\Http\Controllers\EducationController::class, 'ClosedScholarship'])->name('ClosedScholarship');



//create CreateScholarshipModule
Route::post('/Education/Scholarship/CreateScholarshipModule', [App\Http\Controllers\EducationController::class, 'CreateScholarshipModule'])->name('CreateScholarshipModule');


Route::get('/Education/Applicant', [App\Http\Controllers\EducationController::class, 'AllApplicant'])->name('AllApplicantEducation');
Route::get('/Education/Applicant/Approved', [App\Http\Controllers\EducationController::class, 'ApprovedApplicants'])->name('ApprovedApplicantsEducation');
Route::get('/Education/Applicant/Rejected', [App\Http\Controllers\EducationController::class, 'RejectedApplicants'])->name('RejectedApplicantsEducation');
Route::get('/Education/Applicant/Pending', [App\Http\Controllers\EducationController::class, 'PendingApplicants'])->name('PendingApplicantsEducation');

// status list and change status
Route::get('/Education/Applicant/Status/{data}', [App\Http\Controllers\EducationController::class, 'Status'])->name('StatusApplicantEducation');

Route::get('/Education/Applicant/Approve/{data}', [App\Http\Controllers\EducationController::class, 'Approve'])->name('ApproveApplicantEducation');

Route::get('/Education/Applicant/Reject/{data}', [App\Http\Controllers\EducationController::class, 'Reject'])->name('RejectApplicantEducation');

Route::get('/Education/Applicant/ReInitiate/{data}', [App\Http\Controllers\EducationController::class, 'ReInitiate'])->name('ReInitiateApplicantEducation');





// create Application
Route::get('/Education/Application/Create', [App\Http\Controllers\EducationController::class, 'CreateApplication'])->name('CreateApplicationEducation');
Route::post('/Education/Application/Create', [App\Http\Controllers\EducationController::class, 'StoreApplication'])->name('CreateApplicationEducation');

// success applicant
Route::get('/Education/Application/Success', [App\Http\Controllers\EducationController::class, 'SuccessApplication'])->name('SuccessApplicationEducation');





// AbdulWahabQarizada
//=======================================================================================================================================
// Index
Route::get('/AbdulWahabQarizada', [App\Http\Controllers\AbdulWahabQarizada\HomeController::class, 'Index'])->name('IndexAbdulWahabQarizada');

// Operation
// Index
Route::get('/AbdulWahabQarizada/JobsManagement', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Index'])->name('IndexJobsManagement');
// List
Route::get('/AbdulWahabQarizada/Operations/All', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'All'])->name('AllCareCard');
Route::get('/AbdulWahabQarizada/Operations/Pending', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Pending'])->name('PendingCareCard');
Route::get('/AbdulWahabQarizada/Operations/Approved', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Approved'])->name('ApprovedCareCard');
Route::get('/AbdulWahabQarizada/Operations/Printed', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Printed'])->name('PrintedCareCard');
Route::get('/AbdulWahabQarizada/Operations/Released', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Released'])->name('ReleasedCareCard');
Route::get('/AbdulWahabQarizada/Operations/Rejected', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Rejected'])->name('RejectedCareCard');
// Change Status
Route::get('/AbdulWahabQarizada/Operations/Status/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Status'])->name('StatusCareCard');
Route::get('/AbdulWahabQarizada/Operations/Approve/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Approve'])->name('ApproveCareCard');
Route::get('/AbdulWahabQarizada/Operations/Print/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Print'])->name('PrintCareCard');
Route::get('/AbdulWahabQarizada/Operations/Release/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Release'])->name('ReleaseCareCard');
Route::get('/AbdulWahabQarizada/Operations/Reject/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Reject'])->name('RejectCareCard');
Route::get('/AbdulWahabQarizada/Operations/ReInitiate/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'ReInitiate'])->name('ReInitiateCareCard');
// Create
Route::get('/AbdulWahabQarizada/Operations/Create', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Create'])->name('CreateCareCard');
Route::post('/AbdulWahabQarizada/Operations/Create', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Store'])->name('CreateCareCard');
// Update
Route::get('/AbdulWahabQarizada/Operations/Edit/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Edit'])->name('EditCareCard');
Route::put('/AbdulWahabQarizada/Operations/Edit/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Update'])->name('UpdateCareCard');
// Delete
Route::get('/AbdulWahabQarizada/Operations/Delete/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Delete'])->name('DeleteCareCard');
// Print
Route::get('/AbdulWahabQarizada/Operations/Printing/{data}', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Printing'])->name('PrintingCareCard');
// Verify Card
Route::get('/AbdulWahabQarizada/Operations/Verify', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Verify'])->name('VerifyCareCard');
Route::post('/AbdulWahabQarizada/Operations/Verify', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Search'])->name('SearchCareCard');
// FileUploads
Route::post('/AbdulWahabQarizada/Operations/Beneficiaries_Tazkira', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Beneficiaries_Tazkira'])->name('Beneficiaries_Tazkira');
Route::post('/AbdulWahabQarizada/Operations/Beneficiaries_Profile', [App\Http\Controllers\AbdulWahabQarizada\JobsManagementController::class, 'Beneficiaries_Profile'])->name('Beneficiaries_Profile');



//=======================================================================================================================================












//User Management
Route::get('/UserManagement', [App\Http\Controllers\UserManagementController::class, 'Index'])->middleware('IsSuperAdmin')->name('IndexUserManagement');

Route::get('/UserManagement/All', [App\Http\Controllers\UserManagementController::class, 'All'])->middleware('IsSuperAdmin')->name('AllUser');
// Create
Route::get('/UserManagement/Create', [App\Http\Controllers\UserManagementController::class, 'Create'])->name('CreateUser');
Route::post('/UserManagement/Create', [App\Http\Controllers\UserManagementController::class, 'Store'])->name('CreateUser');
// update
Route::get('/UserManagement/Edit/{data}', [App\Http\Controllers\UserManagementController::class, 'Edit'])->name('EditUser');
Route::put('/UserManagement/Edit/{data}', [App\Http\Controllers\UserManagementController::class, 'Update'])->name('UpdateUser');

// delete
Route::get('/UserManagement/Delete/{data}', [App\Http\Controllers\UserManagementController::class, 'Delete'])->name('DeleteUser');



Route::get('/UserManagement/Status/{data}', [App\Http\Controllers\UserManagementController::class, 'Status'])->name('StatusUser');

Route::get('/UserManagement/Activate/{data}', [App\Http\Controllers\UserManagementController::class, 'Activate'])->name('ActivateUser');

Route::get('/UserManagement/DeActivate/{data}', [App\Http\Controllers\UserManagementController::class, 'DeActivate'])->name('DeActivateUser');

Route::get('/UserManagement/Activated', [App\Http\Controllers\UserManagementController::class, 'Activated'])->name('ActivatedUser');

Route::get('/UserManagement/DeActivated', [App\Http\Controllers\UserManagementController::class, 'DeActivated'])->name('DeActivatedUser');
// role
Route::get('/UserManagement/Role/{data}', [App\Http\Controllers\UserManagementController::class, 'Role'])->name('RoleUser');
Route::put('/UserManagement/AssignRole/{data}', [App\Http\Controllers\UserManagementController::class, 'AssignRole'])->name('AssignRoleUser');

Route::put('/UserManagement/ResetPassword/{data}', [App\Http\Controllers\UserManagementController::class, 'ResetPassword'])->name('ResetPasswordUser');
