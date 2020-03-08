<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class IndexController extends AdminController
{
    //
    public function __construct()
    {
    	//dd(Auth::user());
    	parent::__construct();

    	$this->template = env('THEME').'.admin.index';
    }

    public function index()
    {

    	$this->title = 'Панель администратора';

    	return $this->renderOutput();
    }

  /*  public function index()
    {
        return view('home.index');
    }

    public function admin()
    {
        return view('admin.index');
    }
    */

}
