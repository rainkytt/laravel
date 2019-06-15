@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kinnita oma e-post') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Teie e-posti aadressile on saadetud uus kinnituslink.') }}
                        </div>
                    @endif

                    {{ __('Enne jätkamist kontrollige oma e-posti kinnitamise linki.') }}
                    {{ __('kui te e-kirja ei saanud, ') }}, <a href="{{ route('verification.resend') }}">{{ __('siis uue saamiseks vajutage siia') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
