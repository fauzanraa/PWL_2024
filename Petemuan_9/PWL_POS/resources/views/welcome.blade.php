@extends('layout.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo, apa kabar</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            {!! $chart->container() !!}
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{$chart->script()}}
@endsection