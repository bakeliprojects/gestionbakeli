<?php

namespace App\Http\Controllers;

use App\bakeliste;
use Illuminate\Http\Request;
use View;
use App;
use PDF;
use App\cv;
class BakelisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // get all the bbakeliste
        $bakeliste = cv::all();

        // load the view and pass the contact
        return View('bakeliste.index',compact('bakeliste'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('bakeliste');
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

 public function store(Request $request){

      $bakeliste = new bakeliste([
        'image' => $request->get('image'),
        'nom' => $request->get('nom'),
        'prenom' => $request->get('prenom'),
        'disponiblite' => $request->get('disponiblite'),
         'cour' => $request->get('cour'),
          'education' => $request->get('education'),
           'technologie' => $request->get('technologie'),
           'language' => $request->get('language'),
           'motivation' => $request->get('motivation')


      ]);

      $bakeliste->save();
      return redirect('/index');
    }


//pdf
 public function downloadPDF($id){
      $bakeliste = bakeliste::find($id);

      $pdf = PDF::loadView('pdf', compact('bakeliste'));
      return $pdf->download('invoice.pdf');

    }






    /**
     * Display the specified resource.
     *
     * @param  \App\bakeliste  $bakeliste
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // get the bakeliste
          $bakeliste = cv::find($id);

        // show the view and pass the bakeliste to it
          return View::make('bakeliste.show')
          ->with('bakeliste', $bakeliste);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bakeliste  $bakeliste
     * @return \Illuminate\Http\Response
     */
    public function edit(bakeliste $bakeliste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bakeliste  $bakeliste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bakeliste $bakeliste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bakeliste  $bakeliste
     * @return \Illuminate\Http\Response
     */
    public function destroy(bakeliste $bakeliste)
    {
        //
    }
}
