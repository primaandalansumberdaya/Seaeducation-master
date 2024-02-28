<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\profile\DetailUser;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailUser $detailUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailUser $detailUser)
    {
        return view('pages.profile.edit-profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailUser $detailUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailUser $detailUser)
    {
        //
    }
}
