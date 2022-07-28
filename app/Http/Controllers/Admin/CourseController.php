<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('backend.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Category::all();
        return view('backend.course.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return dd($request); to check image has passed or not
        $course = new Course();
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->fee = $request->fee;
        $course->category_id = $request->category_id;
        $course->syllabus = $request->syllabus;

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('courseimage',$newName);
            $course->image = 'courseimage/' . $newName;
        }

        $course->save();

        $request->session()->flash('message', 'Record saved successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('backend.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        return view('backend.course.edit',compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->fee = $request->fee;
        $course->category_id = $request->category_id;
        $course->syllabus = $request->syllabus;

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('courseimage',$newName);
            $course->image = 'courseimage/' . $newName;
        }

        $course->update();

        $request->session()->flash('message', 'Record updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
