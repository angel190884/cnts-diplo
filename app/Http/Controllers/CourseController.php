<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         * todo mostrar error de base de datos si no hay conexión
         */
        $courses = Course::orderBy('start', 'DESC')->paginate(10);
        return view('admin.listOfCourses', compact('courses'));
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
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id Course id
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id Course id
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request proveniente del formulario
     * @param int                      $id      course id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id course id
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activate(Course $course, Request $request)
    {

        $course->active_inscription = $request->activate;

        if ($course->save()){
            if ($request->activate == 0){
                info('el usario: ' . auth()->user()->id . ' desactivo inscripción al curso ' . $course->id);
            }else{
                info('el usario: ' . auth()->user()->id . ' activo la inscripción al curso ' . $course->id);
            }
        }

        return redirect()->route('courses.index')->with('success','Los cambios en el diplomado han sido guardados exitosamente!!!');
    }


}
