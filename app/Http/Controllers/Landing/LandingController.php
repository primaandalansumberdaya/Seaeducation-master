<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.landing.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }

    // Custom
    public function about()
    {
        return view('pages.landing.about');
    }

    public function affiliate()
    {
        return view('pages.landing.affiliate');
    }

    public function partnership()
    {
        return view('pages.landing.partnership');
    }

    public function blog()
    {
        return view('pages.landing.blog');
    }

    public function program()
    {
        return view('pages.landing.program');
    }

    public function signin()
    {
        return view('pages.auth.login');
    }
    public function signup()
    {
        return view('pages.auth.register');
    }
}
