<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // create a sample controller
	public function testAction(){
		echo "This is a controller demo";
	}

    // test how to send param to controller
	public function testParams($param)
	{
		echo "This param is: " . $param;
	}
}
