<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\facultymodel;

class facultycontroller extends Controller
{
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('fname');
        $getdes=request('fdes');
        $getcollege=request('fcollege');
        $getcontact=request('fcontact');


        echo $getname;
        echo "<br>";
        echo $getdes;
        echo "<br>";
        echo $getcollege;
        echo "<br>";
        echo $getcontact;
        echo "<br>";

        $faculty=new falcultymodel();

        $faculty->fname=$getname;
        $faculty->fdesignation=$getdes;
        $factulty->fcontactno=$getcontact;
        $factulty->fcollege=$getcollege;


        $faculty->save();
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
