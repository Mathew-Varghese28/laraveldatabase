<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

class studentcontroller extends Controller
{
    /**
     * Display a listing ostudent the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the studentorm studentor creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getsname=request('sname');
        $getsroll=request('sroll');
        $getscollege=request('scollege');
        $getsadm=request('sadm');

        echo $getsname;
        echo "<br>";
        echo $getsroll;
        echo "<br>";
        echo $getscollege;
        echo "<br>";
        echo $getsadm;
        echo "<br>";

        $student=new studentmodel();

        $student->sname=$getsname;
        $student->sroll=$getsroll;
        $student->scollege=$getscollege;
        $student->sadm=$getsadm;


        $student->save();
    }

    /**
     * Display the specistudentied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the studentorm studentor editing the specistudentied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specistudentied resource in storage.
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
     * Remove the specistudentied resource studentrom storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
