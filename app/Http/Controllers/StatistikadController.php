<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // kasutamaks Raw SQL Queries
class StatistikadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sumyksyks = DB::table('yrituses')->sum('yksyks');
        $sumykskaks = DB::table('yrituses')->sum('ykskaks');
        $sumykskolm = DB::table('yrituses')->sum('ykskolm');
        $sumyksneli = DB::table('yrituses')->sum('yksneli');
        $sumyksviis = DB::table('yrituses')->sum('yksviis');
        $sumykskuus = DB::table('yrituses')->sum('ykskuus');
        $sumykskuusyks = DB::table('yrituses')->sum('ykskuusyks');
        $sumykskuuskaks = DB::table('yrituses')->sum('ykskuuskaks');
        $sumyksseitse = DB::table('yrituses')->sum('yksseitse');

        $sumkaksyks = DB::table('yrituses')->sum('kaksyks');
        $sumkakskaks = DB::table('yrituses')->sum('kakskaks');
        $sumkakskolm = DB::table('yrituses')->sum('kakskolm');
        $sumkaksneli = DB::table('yrituses')->sum('kaksneli');
        $sumkaksviis = DB::table('yrituses')->sum('kaksviis');
        $sumkakskuus = DB::table('yrituses')->sum('kakskuus');
        $sumkaksseitse = DB::table('yrituses')->sum('kaksseitse');
        $sumkakskaheksa = DB::table('yrituses')->sum('kakskaheksa');
        $sumkaksyheksa = DB::table('yrituses')->sum('kaksyheksa');

        $sumkolmyksyks = DB::table('yrituses')->sum('kolmyksyks');
        $sumkolmykskaks = DB::table('yrituses')->sum('kolmykskaks');
        $sumkolmykskolm = DB::table('yrituses')->sum('kolmykskolm');
        $sumkolmyksneli = DB::table('yrituses')->sum('kolmyksneli');
        $sumkolmkaksyks = DB::table('yrituses')->sum('kolmkaksyks');
        $sumkolmkakskaks = DB::table('yrituses')->sum('kolmkakskaks');
        $sumkolmkakskolm = DB::table('yrituses')->sum('kolmkakskolm');
        $sumkolmkolmyks = DB::table('yrituses')->sum('kolmkolmyks');
        $sumkolmkolmkaks = DB::table('yrituses')->sum('kolmkolmkaks');
        $sumkolmneliyks = DB::table('yrituses')->sum('kolmneliyks');
        $sumkolmnelikaks = DB::table('yrituses')->sum('kolmnelikaks');
        $sumkolmnelikolm = DB::table('yrituses')->sum('kolmnelikolm');
        $sumkolmnelineli = DB::table('yrituses')->sum('kolmnelineli');
        $sumkolmviis = DB::table('yrituses')->sum('kolmviis');

        $sumneliyks = DB::table('yrituses')->sum('neliyks');
        $sumnelikaks = DB::table('yrituses')->sum('nelikaks');
        $sumnelikolm = DB::table('yrituses')->sum('nelikolm');

        $sumviisyks = DB::table('yrituses')->sum('viisyks');
        $sumviiskaks = DB::table('yrituses')->sum('viiskaks');
        $sumviiskolm = DB::table('yrituses')->sum('viiskolm');

        $kokku = DB::table('yrituses')->get();

        $avgyksyks = DB::table('yrituses')->avg('yksyks');
        $avgyksyks = round($avgyksyks,0);
        $avgykskaks = DB::table('yrituses')->avg('ykskaks');
        $avgykskaks = round($avgykskaks,0);
        $avgykskolm = DB::table('yrituses')->avg('ykskolm');
        $avgykskolm = round($avgykskolm,0);
        $avgyksneli = DB::table('yrituses')->avg('yksneli');
        $avgyksneli = round($avgyksneli,0);
        $avgyksviis = DB::table('yrituses')->avg('yksviis');
        $avgyksviis = round($avgyksviis,0);
        $avgykskuus = DB::table('yrituses')->avg('ykskuus');
        $avgykskuus = round($avgykskuus,0);
        $avgykskuusyks = DB::table('yrituses')->avg('ykskuusyks');
        $avgykskuusyks = round($avgykskuusyks,0);
        $avgykskuuskaks = DB::table('yrituses')->avg('ykskuuskaks');
        $avgykskuuskaks = round($avgykskuuskaks,0);
        $avgyksseitse = DB::table('yrituses')->avg('yksseitse');
        $avgyksseitse = round($avgyksseitse,0);

        $avgkaksyks = DB::table('yrituses')->avg('kaksyks');
        $avgkaksyks = round($avgkaksyks,0);
        $avgkakskaks = DB::table('yrituses')->avg('kakskaks');
        $avgkakskaks = round($avgkakskaks,0);
        $avgkakskolm = DB::table('yrituses')->avg('kakskolm');
        $avgkakskolm = round($avgkakskolm,0);
        $avgkaksneli = DB::table('yrituses')->avg('kaksneli');
        $avgkaksneli = round($avgkaksneli,0);
        $avgkaksviis = DB::table('yrituses')->avg('kaksviis');
        $avgkaksviis = round($avgkaksviis,0);
        $avgkakskuus = DB::table('yrituses')->avg('kakskuus');
        $avgkakskuus = round($avgkakskuus,0);
        $avgkaksseitse = DB::table('yrituses')->avg('kaksseitse');
        $avgkaksseitse = round($avgkaksseitse,0);
        $avgkakskaheksa = DB::table('yrituses')->avg('kakskaheksa');
        $avgkakskaheksa = round($avgkakskaheksa,0);
        $avgkaksyheksa = DB::table('yrituses')->avg('kaksyheksa');
        $avgkaksyheksa = round($avgkaksyheksa,0);

        $avgkolmyksyks = DB::table('yrituses')->avg('kolmyksyks');
        $avgkolmyksyks = round($avgkolmyksyks,0);
        $avgkolmykskaks = DB::table('yrituses')->avg('kolmykskaks');
        $avgkolmykskaks = round($avgkolmykskaks,0);
        $avgkolmykskolm = DB::table('yrituses')->avg('kolmykskolm');
        $avgkolmykskolm = round($avgkolmykskolm,0);
        $avgkolmyksneli = DB::table('yrituses')->avg('kolmyksneli');
        $avgkolmyksneli = round($avgkolmyksneli,0);
        $avgkolmkaksyks = DB::table('yrituses')->avg('kolmkaksyks');
        $avgkolmkaksyks = round($avgkolmkaksyks,0);
        $avgkolmkakskaks = DB::table('yrituses')->avg('kolmkakskaks');
        $avgkolmkakskaks = round($avgkolmkakskaks,0);
        $avgkolmkakskolm = DB::table('yrituses')->avg('kolmkakskolm');
        $avgkolmkakskolm = round($avgkolmkakskolm,0);
        $avgkolmkolmyks = DB::table('yrituses')->avg('kolmkolmyks');
        $avgkolmkolmyks = round($avgkolmkolmyks,0);
        $avgkolmkolmkaks = DB::table('yrituses')->avg('kolmkolmkaks');
        $avgkolmkolmkaks = round($avgkolmkolmkaks,0);
        $avgkolmneliyks = DB::table('yrituses')->avg('kolmneliyks');
        $avgkolmneliyks = round($avgkolmneliyks,0);
        $avgkolmnelikaks = DB::table('yrituses')->avg('kolmnelikaks');
        $avgkolmnelikaks = round($avgkolmnelikaks,0);
        $avgkolmnelikolm = DB::table('yrituses')->avg('kolmnelikolm');
        $avgkolmnelikolm = round($avgkolmnelikolm,0);
        $avgkolmnelineli = DB::table('yrituses')->avg('kolmnelineli');
        $avgkolmnelineli = round($avgkolmnelineli,0);
        $avgkolmviis = DB::table('yrituses')->avg('kolmviis');
        $avgkolmviis = round($avgkolmviis,0);

        $avgneliyks = DB::table('yrituses')->avg('neliyks');
        $avgneliyks = round($avgneliyks,0);
        $avgnelikaks = DB::table('yrituses')->avg('nelikaks');
        $avgnelikaks = round($avgnelikaks,0);
        $avgnelikolm = DB::table('yrituses')->avg('nelikolm');
        $avgnelikolm = round($avgnelikolm,0);

        $avgviisyks = DB::table('yrituses')->avg('viisyks');
        $avgviisyks = round($avgviisyks,0);
        $avgviiskaks = DB::table('yrituses')->avg('viiskaks');
        $avgviiskaks = round($avgviiskaks,0);
        $avgviiskolm = DB::table('yrituses')->avg('viiskolm');
        $avgviiskolm = round($avgviiskolm,0);

        return view('statistikad.index',['kokku' => $kokku, 'sumyksyks' => $sumyksyks, 'sumykskaks' => $sumykskaks, 'sumykskolm' => $sumykskolm, 'sumyksneli' => $sumyksneli, 'sumyksviis' => $sumyksviis, 'sumykskuus' => $sumykskuus, 'sumykskuusyks' => $sumykskuusyks, 'sumykskuuskaks' => $sumykskuuskaks, 'sumyksseitse' => $sumyksseitse, 'sumkaksyks' => $sumkaksyks, 'sumkakskaks' => $sumkakskaks, 'sumkakskolm' => $sumkakskolm, 'sumkaksneli' => $sumkaksneli, 'sumkaksviis' => $sumkaksviis, 'sumkakskuus' => $sumkakskuus, 'sumkaksseitse' => $sumkaksseitse, 'sumkakskaheksa' => $sumkakskaheksa, 'sumkaksyheksa' => $sumkaksyheksa, 'sumkolmyksyks' => $sumkolmyksyks, 'sumkolmykskaks' => $sumkolmykskaks, 'sumkolmykskolm' => $sumkolmykskolm, 'sumkolmyksneli' => $sumkolmyksneli, 'sumkolmkaksyks' => $sumkolmkaksyks, 'sumkolmkakskaks' => $sumkolmkakskaks, 'sumkolmkakskolm' => $sumkolmkakskolm, 'sumkolmkolmyks' => $sumkolmkolmyks, 'sumkolmkolmkaks' => $sumkolmkolmkaks, 'sumkolmneliyks' => $sumkolmneliyks, 'sumkolmnelikaks' => $sumkolmnelikaks, 'sumkolmnelikolm' => $sumkolmnelikolm, 'sumkolmnelineli' => $sumkolmnelineli, 'sumkolmviis' => $sumkolmviis, 'sumneliyks' => $sumneliyks, 'sumnelikaks' => $sumnelikaks, 'sumnelikolm' => $sumnelikolm, 'sumviisyks' => $sumviisyks, 'sumviiskaks' => $sumviiskaks, 'sumviiskolm' => $sumviiskolm, 'avgyksyks' => $avgyksyks, 'avgykskaks' => $avgykskaks, 'avgykskolm' => $avgykskolm, 'avgyksneli' => $avgyksneli, 'avgyksviis' => $avgyksviis, 'avgykskuus' => $avgykskuus, 'avgykskuusyks' => $avgykskuusyks, 'avgykskuuskaks' => $avgykskuuskaks, 'avgyksseitse' => $avgyksseitse, 'avgkaksyks' => $avgkaksyks, 'avgkakskaks' => $avgkakskaks, 'avgkakskolm' => $avgkakskolm, 'avgkaksneli' => $avgkaksneli, 'avgkaksviis' => $avgkaksviis, 'avgkakskuus' => $avgkakskuus, 'avgkaksseitse' => $avgkaksseitse, 'avgkakskaheksa' => $avgkakskaheksa, 'avgkaksyheksa' => $avgkaksyheksa, 'avgkolmyksyks' => $avgkolmyksyks, 'avgkolmykskaks' => $avgkolmykskaks, 'avgkolmykskolm' => $avgkolmykskolm, 'avgkolmyksneli' => $avgkolmyksneli, 'avgkolmkaksyks' => $avgkolmkaksyks, 'avgkolmkakskaks' => $avgkolmkakskaks, 'avgkolmkakskolm' => $avgkolmkakskolm, 'avgkolmkolmyks' => $avgkolmkolmyks, 'avgkolmkolmkaks' => $avgkolmkolmkaks, 'avgkolmneliyks' => $avgkolmneliyks, 'avgkolmnelikaks' => $avgkolmnelikaks, 'avgkolmnelikolm' => $avgkolmnelikolm, 'avgkolmnelineli' => $avgkolmnelineli, 'avgkolmviis' => $avgkolmviis, 'avgneliyks' => $avgneliyks, 'avgnelikaks' => $avgnelikaks, 'avgnelikolm' => $avgnelikolm, 'avgviisyks' => $avgviisyks, 'avgviiskaks' => $avgviiskaks, 'avgviiskolm' => $avgviiskolm]);
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
