@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ $race->name }}</div>

                <div class="card-body">
                    <table class="table ">
                        <tr>
                            <td>{{ __('race.start time').':' }}</td>
                            <td>{{$race->startTime}}</td>
                        </tr>

                        <tr>
                            <td>{{ __('race.end time').':' }}</td>
                            <td>{{$race->endTime}}</td>
                        </tr>
                    </table>

                    <a class="btn btn-primary" href="/home" role="button">{{ __('race.back') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
