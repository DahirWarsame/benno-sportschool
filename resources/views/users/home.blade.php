@extends('layouts.app')

@section('', 'Home')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welkom</div>
                    <div class="panel-body">
                        Dit is uw persoonlijke homepagina
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection