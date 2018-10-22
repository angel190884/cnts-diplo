<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModuleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request proveniente del formulario
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Module $modules 
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Module $modules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Module $modules 
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $modules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request 
     * @param \App\Module              $modules 
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $modules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Module $modules 
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $modules)
    {
        //
    }
}
