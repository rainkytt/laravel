﻿@extends('layouts.navbar')

@section('content')
<div class="container">
    <a href="{{ url('/home') }}" class="btn btn-secondary">Tagasi</a>
    <div class="card">
            <div class="card-header">Statistika on keritav tööriistariba abil vasakule ja paremale</div>
            <div class="card-body">
            <table class="table table-bordered table-sm table-responsive">
            <tr>
                <th>ID</th>
                <th>1.1.</th>
                <th>1.2.</th>
                <th>1.3.</th>
                <th>1.4.</th>
                <th>1.5.</th>
                <th>1.6.</th>
                <th>1.6.1.</th>
                <th>1.6.2.</th>
                <th>1.7.</th>
                <th>2.1.</th>
                <th>2.2.</th>
                <th>2.3.</th>
                <th>2.4.</th>
                <th>2.5.</th>
                <th>2.6.</th>
                <th>2.7.</th>
                <th>2.8.</th>
                <th>2.9.</th>
                <th>3.1.1.</th>
                <th>3.1.2.</th>
                <th>3.1.3.</th>
                <th>3.1.4.</th>
                <th>3.2.1.</th>
                <th>3.2.2.</th>
                <th>3.2.3.</th>
                <th>3.3.1.</th>
                <th>3.3.2.</th>
                <th>3.4.1.</th>
                <th>3.4.2.</th>
                <th>3.4.3.</th>
                <th>3.4.4.</th>
                <th>3.5.</th>
                <th>4.1.</th>
                <th>4.2.</th>
                <th>4.3.</th>
                <th>5.1.</th>
                <th>5.2.</th>
                <th>5.3.</th>
            </tr>
            @foreach($kokku as $roww)
                <tr>
                <td>{{$roww->id}}</td>
                <td>{{$roww->yksyks}}</td>
                <td>{{$roww->ykskaks}}</td>
                <td>{{$roww->ykskolm}}</td>
                <td>{{$roww->yksneli}}</td>
                <td>{{$roww->yksviis}}</td>
                <td>{{$roww->ykskuus}}</td>
                <td>{{$roww->ykskuusyks}}</td>
                <td>{{$roww->ykskuuskaks}}</td>
                <td>{{$roww->yksseitse}}</td>
                <td>{{$roww->kaksyks}}</td>
                <td>{{$roww->kakskaks}}</td>
                <td>{{$roww->kakskolm}}</td>
                <td>{{$roww->kaksneli}}</td>
                <td>{{$roww->kaksviis}}</td>
                <td>{{$roww->kakskuus}}</td>
                <td>{{$roww->kaksseitse}}</td>
                <td>{{$roww->kakskaheksa}}</td>
                <td>{{$roww->kaksyheksa}}</td>
                <td>{{$roww->kolmyksyks}}</td>
                <td>{{$roww->kolmykskaks}}</td>
                <td>{{$roww->kolmykskolm}}</td>
                <td>{{$roww->kolmyksneli}}</td>
                <td>{{$roww->kolmkaksyks}}</td>
                <td>{{$roww->kolmkakskaks}}</td>
                <td>{{$roww->kolmkakskolm}}</td>
                <td>{{$roww->kolmkolmyks}}</td>
                <td>{{$roww->kolmkolmkaks}}</td>
                <td>{{$roww->kolmneliyks}}</td>
                <td>{{$roww->kolmnelikaks}}</td>
                <td>{{$roww->kolmnelikolm}}</td>
                <td>{{$roww->kolmnelineli}}</td>
                <td>{{$roww->kolmviis}}</td>
                <td>{{$roww->neliyks}}</td>
                <td>{{$roww->nelikaks}}</td>
                <td>{{$roww->nelikolm}}</td>
                <td>{{$roww->viisyks}}</td>
                <td>{{$roww->viiskaks}}</td>
                <td>{{$roww->viiskolm}}</td>
                </tr>
            @endforeach
            </table>

            <table class="table table-bordered table-sm table-responsive">
            <tr>
                <th>Arvutus</th>
                <th>1.1.</th>
                <th>1.2.</th>
                <th>1.3.</th>
                <th>1.4.</th>
                <th>1.5.</th>
                <th>1.6.</th>
                <th>1.6.1.</th>
                <th>1.6.2.</th>
                <th>1.7.</th>
                <th>2.1.</th>
                <th>2.2.</th>
                <th>2.3.</th>
                <th>2.4.</th>
                <th>2.5.</th>
                <th>2.6.</th>
                <th>2.7.</th>
                <th>2.8.</th>
                <th>2.9.</th>
                <th>3.1.1.</th>
                <th>3.1.2.</th>
                <th>3.1.3.</th>
                <th>3.1.4.</th>
                <th>3.2.1.</th>
                <th>3.2.2.</th>
                <th>3.2.3.</th>
                <th>3.3.1.</th>
                <th>3.3.2.</th>
                <th>3.4.1.</th>
                <th>3.4.2.</th>
                <th>3.4.3.</th>
                <th>3.4.4.</th>
                <th>3.5.</th>
                <th>4.1.</th>
                <th>4.2.</th>
                <th>4.3.</th>
                <th>5.1.</th>
                <th>5.2.</th>
                <th>5.3.</th>
            </tr>
            <tr>
                <td>summa</td>
                <td>{{$sumyksyks}}</td>
                <td>{{$sumykskaks}}</td>
                <td>{{$sumykskolm}}</td>
                <td>{{$sumyksneli}}</td>
                <td>{{$sumyksviis}}</td>
                <td>{{$sumykskuus}}</td>
                <td>{{$sumykskuusyks}}</td>
                <td>{{$sumykskuuskaks}}</td>
                <td>{{$sumyksseitse}}</td>

                <td>{{$sumkaksyks}}</td>
                <td>{{$sumkakskaks}}</td>
                <td>{{$sumkakskolm}}</td>
                <td>{{$sumkaksneli}}</td>
                <td>{{$sumkaksviis}}</td>
                <td>{{$sumkakskuus}}</td>
                <td>{{$sumkaksseitse}}</td>
                <td>{{$sumkakskaheksa}}</td>
                <td>{{$sumkaksyheksa}}</td>

                <td>{{$sumkolmyksyks}}</td>
                <td>{{$sumkolmykskaks}}</td>
                <td>{{$sumkolmykskolm}}</td>
                <td>{{$sumkolmyksneli}}</td>
                <td>{{$sumkolmkaksyks}}</td>
                <td>{{$sumkolmkakskaks}}</td>
                <td>{{$sumkolmkakskolm}}</td>
                <td>{{$sumkolmkolmyks}}</td>
                <td>{{$sumkolmkolmkaks}}</td>
                <td>{{$sumkolmneliyks}}</td>
                <td>{{$sumkolmnelikaks}}</td>
                <td>{{$sumkolmnelikolm}}</td>
                <td>{{$sumkolmnelineli}}</td>
                <td>{{$sumkolmviis}}</td>

                <td>{{$sumneliyks}}</td>
                <td>{{$sumnelikaks}}</td>
                <td>{{$sumnelikolm}}</td>
                <td>{{$sumviisyks}}</td>
                <td>{{$sumviiskaks}}</td>
                <td>{{$sumviiskolm}}</td>
            </tr>
            <tr>
                <td>keskmine</td>
                <td>{{$avgyksyks}}</td>
                <td>{{$avgykskaks}}</td>
                <td>{{$avgykskolm}}</td>
                <td>{{$avgyksneli}}</td>
                <td>{{$avgyksviis}}</td>
                <td>{{$avgykskuus}}</td>
                <td>{{$avgykskuusyks}}</td>
                <td>{{$avgykskuuskaks}}</td>
                <td>{{$avgyksseitse}}</td>

                <td>{{$avgkaksyks}}</td>
                <td>{{$avgkakskaks}}</td>
                <td>{{$avgkakskolm}}</td>
                <td>{{$avgkaksneli}}</td>
                <td>{{$avgkaksviis}}</td>
                <td>{{$avgkakskuus}}</td>
                <td>{{$avgkaksseitse}}</td>
                <td>{{$avgkakskaheksa}}</td>
                <td>{{$avgkaksyheksa}}</td>

                <td>{{$avgkolmyksyks}}</td>
                <td>{{$avgkolmykskaks}}</td>
                <td>{{$avgkolmykskolm}}</td>
                <td>{{$avgkolmyksneli}}</td>
                <td>{{$avgkolmkaksyks}}</td>
                <td>{{$avgkolmkakskaks}}</td>
                <td>{{$avgkolmkakskolm}}</td>
                <td>{{$avgkolmkolmyks}}</td>
                <td>{{$avgkolmkolmkaks}}</td>
                <td>{{$avgkolmneliyks}}</td>
                <td>{{$avgkolmnelikaks}}</td>
                <td>{{$avgkolmnelikolm}}</td>
                <td>{{$avgkolmnelineli}}</td>
                <td>{{$avgkolmviis}}</td>

                <td>{{$avgneliyks}}</td>
                <td>{{$avgnelikaks}}</td>
                <td>{{$avgnelikolm}}</td>
                <td>{{$avgviisyks}}</td>
                <td>{{$avgviiskaks}}</td>
                <td>{{$avgviiskolm}}</td>
            </tr>
            </table>
        </div>
        
    </div>
</div>
@endsection