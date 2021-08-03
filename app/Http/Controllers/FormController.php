<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getDataUsingMethodAsPOST(Request $request) {
        echo "POST method defined on Form";
        return $request -> post();
    }

    function getDataUsingMethodAsGET(Request $request) {
        echo "GET method defined on Form";
        return $request -> query();
    }
}
