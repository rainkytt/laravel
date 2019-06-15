@extends('layouts.navbar')

@section('content')
@include('layouts.messages') <!-- vea, j.t teated -->
<div class="container">
    <a href="{{ url('/yritused') }}" class="btn btn-secondary">Tagasi ürituste lehele</a>
    <div class="card">
        <div class="card-header">See on ürituse muutmise leht</div>
            <div class="card-body">
            {!! Form::open(['action' => ['YritusedController@update', $yrituss->id], 'method' => 'POST']) !!}
            <div class="form-group row">
                    {{Form::label('yksyks', '1.1. Pühapäevane või pühade jumalateenistus', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('yksyks',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskaks', '1.2. Jumalateenistusest võttis osa (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('ykskaks', $yrituss->ykskaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('ykskolm', '1.3. Armulauaga jumalateenistus', ['class' => 'col-sm-5'])}}
                    {!! Form::checkbox('ykskolm',1) !!}
                </div>
                <div class="form-group row">
                    {{Form::label('yksneli', '1.4. Armulauale võeti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('yksneli', $yrituss->yksneli, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
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
                    {{Form::number('yksseitse', $yrituss->yksseitse, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <hr>
                <div class="form-group row">
                    {{Form::label('kaksyks', '2.1. Ristiti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksyks', $yrituss->kaksyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskaks', '2.2. Leeritati (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskaks', $yrituss->kakskaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskolm', '2.3. Laulatati (mitu paari?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskolm', $yrituss->kakskolm, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksneli', '2.4. Abielu registreeriti (mitmel korral?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksneli', $yrituss->kaksneli, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kaksviis', '2.5. Maeti (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kaksviis', $yrituss->kaksviis, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kakskuus', '2.6. Kodust armulauda jagati (mitmele inimesele?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kakskuus', $yrituss->kakskuus, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
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
                    {{Form::number('kolmyksyks', $yrituss->kolmyksyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmykskaks', '3.1.2. Lastetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmykskaks', $yrituss->kolmykskaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmykskolm', '3.1.3 Laste- ja pühapäevakoolitööd juhendas (mitu õpetajat?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmykskolm', $yrituss->kolmykskolm, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmyksneli', '3.1.4. Lastelaagri(te)s osales (laagriks loetakse vähemalt kahepäevast) (mitmu last?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmyksneli', $yrituss->kolmyksneli, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkaksyks', '3.2.1 Noortetöös osales (mitu noort?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkaksyks', $yrituss->kolmkaksyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkakskaks', '3.2.2. Noortetööd juhendas (mitu juhendajat?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkakskaks', $yrituss->kolmkakskaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkakskolm', '3.2.3. Noortetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkakskolm', $yrituss->kolmkakskolm, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkolmyks', '3.3.1. Leeriõpetust anti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkolmyks', $yrituss->kolmkolmyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmkolmkaks', '3.3.2. Leerilaagri(te)s osales (laagriks loetakse vähemalt kahepäevast) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmkolmkaks', $yrituss->kolmkolmkaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmneliyks', '3.4.1. Muusikatöös osales (koguduse koorilauljate, solistide või pillimängijatena töös osalenute arv) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmneliyks', $yrituss->kolmneliyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelikaks', '3.4.2. Muusikatööd juhendas (organistid, koorijuhid, organist-koorijuhid, ansamblijuhid) (mitu muusikut?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelikaks', $yrituss->kolmnelikaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelikolm', '3.4.3. Muusikakollektiive oli (muusikakollektiivid on koorid, ansamblid ja orkestrid) (mitu kollektiivi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelikolm', $yrituss->kolmnelikolm, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmnelineli', '3.4.4. Kooriharjutusi peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit) (mitu tundi?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmnelineli', $yrituss->kolmnelineli, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('kolmviis', '3.5. Kogudusetöös osales vabatahtlikena (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('kolmviis', $yrituss->kolmviis, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
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
                    {{Form::number('viisyks', $yrituss->viisyks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('viiskaks', '5.2. Annetajaliikmeid oli kokku (liikmemaksu või -annetuse tasunuid) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('viiskaks', $yrituss->viiskaks, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
                <div class="form-group row">
                    {{Form::label('viiskolm', '5.3. Täiskogu liikmeid oli kokku (koguduse konfirmeeritud liikmed, kes on aruandeaastal käinud vähemalt üks kord armulaual ja tasunud liikmemaksu (-annetuse)) (mitu inimest?)', ['class' => 'col-sm-5'])}}
                    {{Form::number('viiskolm', $yrituss->viiskolm, ['min' => '0', 'max' => '999', 'class' => 'form-control col-sm-1', 'placeholder' => '0'])}}
                </div>
            
                {{Form::hidden('_method', 'PUT')}}<!-- et update-s saaks kasutada POST meetodit real 10, muidu jääks ainult PUT või PATCH -->
                {{Form::submit('Esita', ['class' => 'btn btn-primary'])}}<!-- nupp -->
            {!! Form::close() !!}
            </div>
    </div>
</div>
@endsection