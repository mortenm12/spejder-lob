@extends('layouts.app')

@section('content')
<div class="container">
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

                    @foreach ($races as $race)
                        <a href='/race/{{$race->id}}'>{{$race->name}}</a>
                        <br>
                    @endforeach
                    <br>

                    <a class="btn btn-primary" href="new/race" role="button">{{ __('race.newRace') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
