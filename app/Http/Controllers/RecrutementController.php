<?php

namespace App\Http\Controllers;
use App\Mail\RecrutementFormMail;
use App\Recrutement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RecrutementController extends Controller
{

    public function recrutement(){
        $recrutements= Recrutement::all()->sortByDesc("created_at");
        return view('recrutement.recrutement',['myrecrutements'=>$recrutements]);

    }

    public function offre($slug){
        $recrutements = Recrutement::whereSlug($slug)->first();
        return view('recrutement.offre',['recrutements'=>$recrutements]);
    }

    public function store()
    {
        $data=request();
        Mail::to('zoubair.firstview@gmail.com')->bcc('wydad@firstviewagency.com')->send(new RecrutementFormMail($data));
        return redirect('recrutement');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function show(Recrutement $recrutement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function edit(Recrutement $recrutement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recrutement $recrutement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recrutement  $recrutement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recrutement $recrutement)
    {
        //
    }
}
