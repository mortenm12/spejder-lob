@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('New race') }}</div>

                <div class="card-body">
                    <form action='/race/create' method='post' autocomplete="off" >
                        @csrf
                        <div class="container mb-3">
                            {{ __('race.race name') }}
                            <input type='text' name='name' class="form-control">
                        </div>
                        <div class="container mb-3">
                            {{ __('race.start time') }}
                            <input type='datetime-local' name='startTime' class="form-control">
                        </div>
                        <div class="container mb-3">
                            {{ __('race.end time') }}
                            <input type='datetime-local' name='endTime' class="form-control">
                        </div>
                        <button tupe='submit' class='btn btn-primary btn-block'> {{ __('race.save') }} </button>
                        <a class="btn btn-primary" href="/home" role="button">{{ __('race.back') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
