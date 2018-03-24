<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Course;
use App\Units;
use App\User;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $courses     = Course::all();
        $units     = Units::all();
        
        return view('admin.course.create', compact('courses', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'course_name'   =>  'required',
            'faculty'       =>  'required'
        ]);

        if($request->hasFile('image')){
    		$avatar = $request->file('image');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
            $Image = Image::make($avatar)->encode('png');
            $Image ->resize(96, 96)->save( public_path('/uploads/images/product_pictures/' . $filename ) );
        }
        $userid = Auth::user()->id;
        // $currentuser = User::find($id);

        //Create New Product
        //$img = Image::make($request->input('image'));
        // now you are able to resize the instance
        //$img->resize(268, 249);

        // and insert a watermark for example
        //$img->insert('public/watermark.png');

        // finally we save the image as a new file
        //$img->save('images/bar.jpg');

        $course   =   new Course;
        $course   ->  course_name              = $request->input('course_name');
        $course   ->  course_description       = $request->input('description');
        $course   ->  faculty_offering         = $request->input('faculty');
        $course   ->  added_by                 = $userid;
        $course   ->  updated_by               = $userid;
        // $course   ->  image              = $filename;
        $course   ->  save();

        return redirect('/course/create')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
