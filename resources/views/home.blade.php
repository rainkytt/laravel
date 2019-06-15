@extends('layouts.navbar')

@section('content')
<!-- avalehe sisu -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Oled sisse logitud kasutajaga: <b>{{ Auth::user()->name }}</b></div>
                        <div class="card-body"> 
                           <div class="btns-container">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <p><a href="{{ url('/yritused/create') }}" class="btn-siseveeb">Kantsliklade</a></p>
                            <p><a href="{{ url('/yritused') }}" class="btn-siseveeb">Vaata üritusi</a></p>
                            <p><a href="https://drive.google.com/open?id=19oPMVKmX3pL7OW99ZgQLH6rL37HWtZzI" class="btn-siseveeb" target="_blank">Failide Drive</a></p>
                            <p><a href="{{ url('/statistikad') }}" class="btn-siseveeb">Vaata statistikat</a></p>
                            <p><a href="{{ route('users') }}" class="btn-siseveeb">Kasutajate haldamine</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
