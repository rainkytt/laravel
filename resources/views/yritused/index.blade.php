@extends('layouts.navbar')

@section('content')
@include('layouts.messages') <!-- vea, j.t teated -->
<div class="container">
    <a href="/home" class="btn btn-secondary">Tagasi</a>
    <div class="card">
        <div class="card-header">Üritused</div>
            <div class="card-body">
                @if(count($yritused) > 0)
                    @foreach($yritused as $yritus)
                        <h3><a href="/yritused/{{$yritus->id}}">Ürituse ID on: {{$yritus->id}}</a></h3>
                        <small>Loodud {{$yritus->created_at}}</small>
                    @endforeach
                        {{$yritused->links()}} <!-- lk numbrite jaoks -->
                @else
                    <p>Üritusi ei ole</p>
                @endif
        </div>
    </div>
</div>
@endsection