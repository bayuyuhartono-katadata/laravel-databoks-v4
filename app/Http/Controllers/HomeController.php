<?php

namespace App\Http\Controllers;

use App\Model\DatapublishModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['slider'] = DatapublishModel::listSlider()->get();
        $result['listterkini'] = DatapublishModel::listTerkini()->get();
        $result['listterpopuler'] = DatapublishModel::listTerpopuler()->get();
        return view('home.index', $result);
    }

    public function detail()
    {
        return view('detail.index');
    }

    public function fortyfour()
    {
        return view('fortyfour.index');
    }

    public function kanalIndustri()
    {
        return view('kanalIndustri.index');
    }

    public function argoindustri()
    {
        return view('argoindustri.index');
    }

    public function tags()
    {
        return view('tags.index');
    }

    public function search()
    {
        return view('search.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
