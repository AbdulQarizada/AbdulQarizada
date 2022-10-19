<?php

namespace App\Http\Controllers\AbdulWahabQarizada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Jobs;
use Auth;

use App\Models\Location;
use App\Models\LookUp;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class JobsManagementController extends Controller
{



  public function __construct()
  {
    $this->middleware('auth');
  }



  // index
  public function Index()
  {

    return view('AbdulWahabQarizada.JobsManagement.Index');
  }


  // List
  public function All()
  {


      $jobs =   Jobs::get();
      return view('AbdulWahabQarizada.JobsManagement.All', ['jobs' => $jobs]);
  }



}
