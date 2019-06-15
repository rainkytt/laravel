<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yritus; // loetakse sisse mudel Yritus

class YritusedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yritused = Yritus::orderBy('created_at','desc')->paginate(10); // uusim esimesena ja 10 per leht
        return view('yritused.index',['yritused'=> $yritused]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yritused.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ // valideerimaks ürituse sisestamise õigsust
        ]);

        // ürituse loomine, salvestamine DB-sse
        $yrituss = new Yritus;
        $yrituss->yksyks = $request->input('yksyks');
        $yrituss->ykskaks = $request->input('ykskaks');
        $yrituss->ykskolm = $request->input('ykskolm');
        $yrituss->yksneli = $request->input('yksneli');
        $yrituss->yksviis = $request->input('yksviis');
        $yrituss->ykskuus = $request->input('ykskuus');
        $yrituss->ykskuusyks = $request->input('ykskuusyks');
        $yrituss->ykskuuskaks = $request->input('ykskuuskaks');
        $yrituss->yksseitse = $request->input('yksseitse');
        $yrituss->kaksyks = $request->input('kaksyks');
        $yrituss->kakskaks = $request->input('kakskaks');
        $yrituss->kakskolm = $request->input('kakskolm');
        $yrituss->kaksneli = $request->input('kaksneli');
        $yrituss->kaksviis = $request->input('kaksviis');
        $yrituss->kakskuus = $request->input('kakskuus');
        $yrituss->kaksseitse = $request->input('kaksseitse');
        $yrituss->kakskaheksa = $request->input('kakskaheksa');
        $yrituss->kaksyheksa = $request->input('kaksyheksa');
        $yrituss->kolmyksyks = $request->input('kolmyksyks');
        $yrituss->kolmykskaks = $request->input('kolmykskaks');
        $yrituss->kolmykskolm = $request->input('kolmykskolm');
        $yrituss->kolmyksneli = $request->input('kolmyksneli');
        $yrituss->kolmkaksyks = $request->input('kolmkaksyks');
        $yrituss->kolmkakskaks = $request->input('kolmkakskaks');
        $yrituss->kolmkakskolm = $request->input('kolmkakskolm');
        $yrituss->kolmkolmyks = $request->input('kolmkolmyks');
        $yrituss->kolmkolmkaks = $request->input('kolmkolmkaks');
        $yrituss->kolmneliyks = $request->input('kolmneliyks');
        $yrituss->kolmnelikaks = $request->input('kolmnelikaks');
        $yrituss->kolmnelikolm = $request->input('kolmnelikolm');
        $yrituss->kolmnelineli = $request->input('kolmnelineli');
        $yrituss->kolmviis = $request->input('kolmviis');
        $yrituss->neliyks = $request->input('neliyks');
        $yrituss->nelikaks = $request->input('nelikaks');
        $yrituss->nelikolm = $request->input('nelikolm');
        $yrituss->viisyks = $request->input('viisyks');
        $yrituss->viiskaks = $request->input('viiskaks');
        $yrituss->viiskolm = $request->input('viiskolm');
        $yrituss->save();

        return redirect('/yritused')->with('success', 'Üritus loodud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yritus = Yritus::find($id); // leiab ürituse db-st id järgi
        return view('yritused.show',['yritus'=> $yritus]); // ürituse näitamise leht oh show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yrituss = Yritus::find($id);
        return view('yritused.edit')->with('yrituss', $yrituss);
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
        $this->validate($request, [ // valideerimaks ürituse sisestamise õigsust
            ]);
    
            // ürituse uuendamine, salvestamine DB-sse
            $yrituss = Yritus::find($id);
            $yrituss->yksyks = $request->input('yksyks');
            $yrituss->ykskaks = $request->input('ykskaks');
            $yrituss->ykskolm = $request->input('ykskolm');
            $yrituss->yksneli = $request->input('yksneli');
            $yrituss->yksviis = $request->input('yksviis');
            $yrituss->ykskuus = $request->input('ykskuus');
            $yrituss->ykskuusyks = $request->input('ykskuusyks');
            $yrituss->ykskuuskaks = $request->input('ykskuuskaks');
            $yrituss->yksseitse = $request->input('yksseitse');
            $yrituss->kaksyks = $request->input('kaksyks');
            $yrituss->kakskaks = $request->input('kakskaks');
            $yrituss->kakskolm = $request->input('kakskolm');
            $yrituss->kaksneli = $request->input('kaksneli');
            $yrituss->kaksviis = $request->input('kaksviis');
            $yrituss->kakskuus = $request->input('kakskuus');
            $yrituss->kaksseitse = $request->input('kaksseitse');
            $yrituss->kakskaheksa = $request->input('kakskaheksa');
            $yrituss->kaksyheksa = $request->input('kaksyheksa');
            $yrituss->kolmyksyks = $request->input('kolmyksyks');
            $yrituss->kolmykskaks = $request->input('kolmykskaks');
            $yrituss->kolmykskolm = $request->input('kolmykskolm');
            $yrituss->kolmyksneli = $request->input('kolmyksneli');
            $yrituss->kolmkaksyks = $request->input('kolmkaksyks');
            $yrituss->kolmkakskaks = $request->input('kolmkakskaks');
            $yrituss->kolmkakskolm = $request->input('kolmkakskolm');
            $yrituss->kolmkolmyks = $request->input('kolmkolmyks');
            $yrituss->kolmkolmkaks = $request->input('kolmkolmkaks');
            $yrituss->kolmneliyks = $request->input('kolmneliyks');
            $yrituss->kolmnelikaks = $request->input('kolmnelikaks');
            $yrituss->kolmnelikolm = $request->input('kolmnelikolm');
            $yrituss->kolmnelineli = $request->input('kolmnelineli');
            $yrituss->kolmviis = $request->input('kolmviis');
            $yrituss->neliyks = $request->input('neliyks');
            $yrituss->nelikaks = $request->input('nelikaks');
            $yrituss->nelikolm = $request->input('nelikolm');
            $yrituss->viisyks = $request->input('viisyks');
            $yrituss->viiskaks = $request->input('viiskaks');
            $yrituss->viiskolm = $request->input('viiskolm');
            $yrituss->save();
    
            return redirect('/yritused')->with('success', 'Üritus uuendatud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yrituss = Yritus::find($id);
        $yrituss->delete();
        return redirect('/yritused')->with('success', 'Üritus kustutatud');
    }
}
