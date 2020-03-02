<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    // create a sample controller
    public function testAction()
    {
        echo "This is a controller demo";
    }

    // test how to send param to controller
    public function testParams($param)
    {
        echo "This param is: " . $param;
    }

    // working with URL
    public function getURL(Request $request)
    {
        return $request->path(); // return name of the route
        // return $request->url(); // return the specific url
        // return $request->is('admin/*'); // return true if url contains 'admin/'
        // return $request->isMethod('post'); // return true if method is POST
    }

    // get data sent from view postForm.blade.php
    public function postForm(Request $request)
    {
        echo $request->fname;
        // other methods
        // $request->has('name') // is 'name' param exist?
        // $request->input('id') // get value from <input name='id'>
        // $request->input('products.0.name') // get value from array
        // $request->input('product.name') // get value from json as array
        // $request->all() // get all values
        // $request->only('name') // get only param 'name'
        // $request->except('name') // get all params except param 'name'
    }

    // set cookie
    public function setCookie()
    {
        $response = new Response();
        $response->withCookie(
            'name', // param name
            'QuanNV', // param value
            1 // param duration - minute
        );
        return $response;
    }

    // get cookie
    public function getCookie(Request $request)
    {
        return $request->cookie('name');
    }

    public function postFile(Request $request)
    {
        // check if file is exist
        if ($request->hasFile('filename')) {
            // save file
            $file = $request->file('filename')->move(
                'img', // directory to save file (in the public folder)
                'my file.jpg' // new name
            );
        } else {
            echo "Not upload yet";
        }
    }
}
