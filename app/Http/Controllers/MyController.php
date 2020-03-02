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

	// working with URL
	public function getURL(Request $request){
		return $request->path(); // return name of the route
		// return $request->url(); // return the specific url
		// return $request->is('admin/*'); // return true if url contains 'admin/'
		// return $request->isMethod('post'); // return true if method is POST
	}

	// get data sent from view postForm.blade.php
	public function postForm(Request $request){
		echo $request->fname;
	}
}
