<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareVersion;

class SoftwareVersionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.apikey');
    }    

    public function checkStable(string $name, string $version)
    {
        $sv = SoftwareVersion::where("name", $name)->where("version", $version)->first();
        if ($sv->is_stable && $sv->is_public && !$sv->is_deprecated && !$sv->is_unsupported)
        {
            return response()->json([
                "status" => "success",
                "message" => "Software version is valid"
            ], 200);
        }
        else
        {
            return response()->json([
                "status" => "error",
                "message" => "Software version is invalid"
            ], 400);
        }   
    }
}
