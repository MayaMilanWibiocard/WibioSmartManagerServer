<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesktopSecretKeys;

class DesktopSecretKeysController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DesktopSecretKeys::where("oneShotSecretKey", $id)->orWhere("macAddress", $id)->count();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'userEmail' => 'required|max:255',
            'macAddress' => 'required|max:12',
        ]);
        $DesktopSecretKeys = DesktopSecretKeys::where("oneShotSecretKey", $id)->first();
        if ($DesktopSecretKeys)
        {
            if($DesktopSecretKeys->macAddress == null && $DesktopSecretKeys->userEmail == null)    
                $DesktopSecretKeys->update($request->all());
            else
                abort(400);
        }
        else
            abort(404);
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(404);
    }
}
