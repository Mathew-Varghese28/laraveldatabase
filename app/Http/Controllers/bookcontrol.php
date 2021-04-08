<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;

class bookcontrol extends Controller
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
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getbtitle=request('btitle');
        $getbauthor=request('bauthor');
        $getbdescribtion=request('bdescribtion');
        $getbdistribution=request('bdistribution');
        $getbprice=request('bprice');


        echo $getbtitle;
        echo "<br>";
        echo $getbauthor;
        echo "<br>";
        echo $getbdistribution;
        echo "<br>";
        echo $getbdescribtion;
        echo "<br>";
        echo $getbprice;
        echo "<br>";

        $book=new bookmodel();

        $book->btitle=$getbtitle;
        $book->bauthor=$getbauthor;
        $book->bdescribtion=$getbdescribtion;
        $book->bdistribution=$getbdistribution;
        $book->bprize=$getbprice;

        $book->save();



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
