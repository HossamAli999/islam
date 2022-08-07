@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quran</h1>
    <ul>
    @foreach ($quran['chapters'] as $item)
        <li>{{$item['revelation_place']}} , {{$item['revelation_order']}} {{$item['name_simple']}} {{$item['name_arabic']}}</li>
    @endforeach
    {{-- {{print_r($quran['chapters'])}} --}}
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
