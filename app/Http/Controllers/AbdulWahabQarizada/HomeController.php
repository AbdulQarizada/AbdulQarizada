<?php

namespace App\Http\Controllers\AbdulWahabQarizada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Location;
use App\Models\LookUp;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{



  // index
  public function Index()
  {

    return view('AbdulWahabQarizada.Index');
  }


}
