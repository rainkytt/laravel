@extends('layouts.navbar')

@section('content')
@include('layouts.messages') <!-- vea, j.t teated -->
<div class="container">
<a href="{{ url('/yritused') }}" class="btn btn-secondary">Tagasi</a>
    <div class="card">
        <div class="card-header">Ürituse ID on: {{$yritus->id}}</div>
        <div class="card-body">
                <p>1.1. Pühapäevane või pühade jumalateenistus: <b>{!!$yritus->yksyks!!} korda</b></p> <!-- näitamaks html -i -->
                <p>1.2. Jumalateenistusest võttis osa: <b>{!!$yritus->ykskaks!!} inimest</b></p>
                <p>1.3. Armulauaga jumalateenistus: <b>{!!$yritus->ykskolm!!} korda</b></p>
                <p>1.4. Armulauale võeti: <b>{!!$yritus->yksneli!!} inimest</b></p>
                <p>1.5. Toimus kontsert: <b>{!!$yritus->yksviis!!} korda</b></p>
                <p>1.6. Tegu oli teenistusega: <b>{!!$yritus->ykskuus!!}</b></p>
                <p>1.6.1. osales korraline abiline (abiõp, diakon, praktikant, jutlustaja)?: <b>{!!$yritus->ykskuusyks!!} korda</b></p>
                <p>1.6.2. keegi teine?: <b>{!!$yritus->ykskuuskaks!!} korda</b></p>
                <p>1.7. Kõigil teenistustel ja ametitalitustel osales ühtekokku: <b>{!!$yritus->yksseitse!!} inimest</b></p>
                <hr>
                <p>2.1. Ristiti: <b>{!!$yritus->kaksyks!!} inimest </b></p>
                <p>2.2. Leeritati: <b>{!!$yritus->kakskaks!!} inimest </b></p>
                <p>2.3. Laulatati: <b>{!!$yritus->kakskolm!!} paari </b></p>
                <p>2.4. Abielu registreeriti: <b>{!!$yritus->kaksneli!!} korral</b></p>
                <p>2.5. Maeti: <b>{!!$yritus->kaksviis!!} inimest </b></p>
                <p>2.6. Kodust armulauda jagati: <b>{!!$yritus->kakskuus!!} inimesele</b></p>
                <p>2.7. Muid talitusi peeti (pühitsemised, õnnistamised, kihlused): <b>{!!$yritus->kaksseitse!!} korda</b></p>
                <p>2.8. Kodusid külastati: <b>{!!$yritus->kakskaheksa!!} korda</b></p>
                <p>2.9. Palvusi vanglas, haiglas, hoolekandeasutuses, jms.: <b>{!!$yritus->kaksyheksa!!} korda</b></p>
                <hr>
                <p>3.1.1. Lastetöös osales: <b>{!!$yritus->kolmyksyks!!} last</b></p>
                <p>3.1.2. Lastetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit): <b>{!!$yritus->kolmykskaks!!} tundi</b></p>
                <p>3.1.3 Laste- ja pühapäevakoolitööd juhendas: <b>{!!$yritus->kolmykskolm!!} õpetajat</b></p>
                <p>3.1.4. Lastelaagri(te)s osales (laagriks loetakse vähemalt kahepäevast): <b>{!!$yritus->kolmyksneli!!} last</b></p>
                <p>3.2.1 Noortetöös osales: <b>{!!$yritus->kolmkaksyks!!}</b> noort</p>
                <p>3.2.2. Noortetööd juhendas: <b>{!!$yritus->kolmkakskaks!!}</b> juhendajat</p>
                <p>3.2.3. Noortetunde peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit): <b>{!!$yritus->kolmkakskolm!!} tundi</b></p>
                <p>3.3.1. Leeriõpetust anti (tunniks arvestatakse üks akadeemiline tund = 45 minutit): <b>{!!$yritus->kolmkolmyks!!} tundi</b></p>
                <p>3.3.2. Leerilaagri(te)s osales (laagriks loetakse vähemalt kahepäevast): <b>{!!$yritus->kolmkolmkaks!!} inimest</b></p>
                <p>3.4.1. Muusikatöös osales (koguduse koorilauljate, solistide või pillimängijatena töös osalenute arv): <b>{!!$yritus->kolmneliyks!!} inimest</b></p>
                <p>3.4.2. Muusikatööd juhendas (organistid, koorijuhid, organist-koorijuhid, ansamblijuhid): <b>{!!$yritus->kolmnelikaks!!} muusikut</b></p>
                <p>3.4.3. Muusikakollektiive oli (muusikakollektiivid on koorid, ansamblid ja orkestrid): <b>{!!$yritus->kolmnelikolm!!} kollektiivi</b></p>
                <p>3.4.4. Kooriharjutusi peeti (tunniks arvestatakse üks akadeemiline tund = 45 minutit): <b>{!!$yritus->kolmnelineli!!} tundi</b></p>
                <p>3.5. Kogudusetöös osales vabatahtlikena: <b>{!!$yritus->kolmviis!!} inimest</b></p>
                <hr>
                <p>4.1. Nõukogu koosolekuid peeti: <b>{!!$yritus->neliyks!!} korda</b></p>
                <p>4.2. Täiskogu koosolekuid nõukogu ülesannetes peeti: <b>{!!$yritus->nelikaks!!} korda</b></p>
                <p>4.3. Juhatuse koosolekuid peeti: <b>{!!$yritus->nelikolm!!} korda</b></p>
                <hr>
                <p>5.1. Liikmeid kokku (kõik kogudusse ristimise läbi vastuvõetud ning teistest EELK kogudustest üle tulnud liikmed): <b>{!!$yritus->viisyks!!} inimest</b></p>
                <p>5.2. Annetajaliikmeid oli kokku (liikmemaksu või -annetuse tasunuid): <b>{!!$yritus->viiskaks!!} inimest</b></p>
                <p>5.3. Täiskogu liikmeid oli kokku (koguduse konfirmeeritud liikmed, kes on aruandeaastal käinud vähemalt üks kord armulaual ja tasunud liikmemaksu (-annetuse)): <b>{!!$yritus->viiskolm!!} inimest</b></p>

            <hr>
            <small>Loodud {{$yritus->created_at}}</small>
            <hr>
            @if(!Auth::guest()) <!-- näed ainult siis kui sa ei ole guest -->
                <a href="/yritused/{{$yritus->id}}/edit" class="btn btn-secondary">Muuda</a>
                    {!!Form::open(['action' => ['YritusedController@destroy', $yritus->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Kustuta', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
            @endif
        </div>
    </div>
</div>
@endsection