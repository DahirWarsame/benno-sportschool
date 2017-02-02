@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welkom</div>

                    <div class="panel-body">
                        Log a.u.b in om volledig gebruik te maken van onze site. :)
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Active users</div>

                    <div class="panel-body">
                        <div class="table-responsive-vertical shadow-z-1">
                            <table id="table" class="table table-hover table-mc-light-blue">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naam</th>
                                    <th>Achternaam</th>
                                    <th>Profiel</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td data-title="ID">{{ $user->user_id }}</td>
                                        <td data-title="Name">{{ ucfirst($user->name) }} </td>
                                        <td data-title="Lastname">{{ ucfirst($user->lastname) }} </td>
                                        <td data-title="Link">
                                            <a href="{{ URL::route('user.userprofile', [$user->username]) }}" >Link</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
