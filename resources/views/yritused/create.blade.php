@extends('layouts.navbar')

@section('content')
@include('layouts.messages') <!-- vea, j.t teated -->
<div class="container">
    <a href="{{ url('/home') }}" class="btn btn-secondary">Tagasi</a>
    <div class="card">
        <div class="card-header">See on ürituse sisestamise leht</div>
            <div class="card-body">
            {!! Form::open(['action' => 'YritusedController@store', 'method' => 'POST']) !!}
                <div class="form-group row">
                    {{Form::label('yksyks', '1.1. Pühapäevane või pühade jumalateenistus', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('yksyks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskaks', '1.2. Jumalateenistusest võttis osa (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('ykskaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskolm', '1.3. Armulauaga jumalateenistus', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('ykskolm',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('yksneli', '1.4. Armulauale võeti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('yksneli', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('yksviis', '1.5. Kontsert oli ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('yksviis',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskuus', '1.6. Teenistus oli ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('ykskuus',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskuusyks', '1.6.1. korraline abiline (abiõp, diakon, praktikant, jutlustaja) (mitu korda?)', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('ykskuusyks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskuuskaks', '1.6.2. keegi teine', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('ykskuuskaks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('yksseitse', '1.7. Kõigil teenistustel ja ametitalitustel osales ühtekokku (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('yksseitse', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <hr>
                <div class="form-group row">
                    {{Form::label('kaksyks', '2.1. Ristiti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskaks', '2.2. Leeritati (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskolm', '2.3. Laulatati (mitu paari?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskolm', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksneli', '2.4. Abielu registreeriti (mitmel korral?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksneli', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksviis', '2.5. Maeti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksviis', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskuus', '2.6. Kodust armulauda jagati (mitmele inimesele?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskuus', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksseitse', '2.7. Muid talitusi peeti (pühitsemised, õnnistamised, kihlused) ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('kaksseitse',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskaheksa', '2.8. Kodusid külastati ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('kakskaheksa',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksyheksa', '2.9. Palvusi vanglas, haiglas, hoolekandeasutuses, jms ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('kaksyheksa',1) !!}
                </div>
                <hr>
                <div class="form-group row">
                    {{Form::label('kolmyksyks', '3.1.1. Lastetöös osales (mitu last?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmyksyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmykskaks', '3.1.2. Lastetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmykskaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmykskolm', '3.1.3 Laste- ja pühapäevakoolitööd juhendas (mitu õpetajat?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmykskolm', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmyksneli', '3.1.4. Lastelaagri(te)s osales (laagriks loetakse vähemalt kahepäevast) (mitmu last?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmyksneli', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkaksyks', '3.2.1 Noortetöös osales (mitu noort?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkaksyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkakskaks', '3.2.2. Noortetööd juhendas (mitu juhendajat?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkakskaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkakskolm', '3.2.3. Noortetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkakskolm', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkolmyks', '3.3.1. Leeriõpetust anti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkolmyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkolmkaks', '3.3.2. Leerilaagri(te)s osales (laagriks loetakse vähemalt kahepäevast) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkolmkaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmneliyks', '3.4.1. Muusikatöös osales (koguduse koorilauljate, solistide või pillimängijatena töös osalenute arv) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmneliyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelikaks', '3.4.2. Muusikatööd juhendas (organistid, koorijuhid, organist-koorijuhid, ansamblijuhid) (mitu muusikut?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelikaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelikolm', '3.4.3. Muusikakollektiive oli (muusikakollektiivid on koorid, ansamblid ja orkestrid) (mitu kollektiivi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelikolm', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelineli', '3.4.4. Kooriharjutusi peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelineli', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmviis', '3.5. Kogudusetöös osales vabatahtlikena (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmviis', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <hr>
                <div class="form-group row">
                    {{Form::label('neliyks', '4.1. Nõukogu koosolekuid peeti ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('neliyks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('nelikaks', '4.2. Täiskogu koosolekuid nõukogu ülesannetes peeti ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('nelikaks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('nelikolm', '4.3. Juhatuse koosolekuid peeti ', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('nelikolm',1) !!}
                </div>
                <hr>
                <div class="form-group row">
                    {{Form::label('viisyks', '5.1. Liikmeid kokku (kõik kogudusse ristimise läbi vastuvõetud ning teistest EELK kogudustest üle tulnud liikmed) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('viisyks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('viiskaks', '5.2. Annetajaliikmeid oli kokku (liikmemaksu või -annetuse tasunuid) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('viiskaks', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('viiskolm', '5.3. Täiskogu liikmeid oli kokku (koguduse konfirmeeritud liikmed, kes on aruandeaastal käinud vähemalt üks kord armulaual ja tasunud liikmemaksu (-annetuse)) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('viiskolm', null, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>

                {{Form::submit('Esita', ['class' => 'btn btn-primary'])}}<!-- nupp -->
            {!! Form::close() !!}
            </div>
    </div>
</div>

@endsection