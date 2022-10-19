<?php

namespace App\Http\Controllers\AbdulWahabQarizada\JobsManagement;

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


class AdvertisersController extends Controller
{



  public function __construct()
  {
    $this->middleware('auth');
  }




  // Scrapper for Jobs.af
  public function JobsAF()
  {


  }





}
