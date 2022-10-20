<?php

namespace App\Http\Controllers\AbdulWahabQarizada\JobsManagement;

use App\Http\Controllers\Controller;
use App\Logics\Advertisers;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Jobs;
use Illuminate\Support\Facades\Http;
use Auth;

use App\Models\Location;
use App\Models\LookUp;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class OperationsController extends Controller
{



  public function __construct()
  {
    $this->middleware('auth');
  }



  // index
  public function Index()
  {

    return view('AbdulWahabQarizada.JobsManagement.Operations.Index');
  }


  // List
  public function All()
  {

      $jobs =   Jobs::get();
      return view('AbdulWahabQarizada.JobsManagement.Operations.All', ['jobs' => $jobs]);
  }

  public function Refresh()
  {

      $jobsAf =  new  Advertisers();
      $jobsAf -> JobsAF();
      return redirect()->route('AllJobs')->with('toast_success', 'Jobs Refreshed Successfully!');

  }





}
