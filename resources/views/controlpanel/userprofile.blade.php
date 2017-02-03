@extends('layouts.app')

@section('title', 'User Profile')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User {{ ucfirst($client->name)." ".ucfirst($client->lastname) }}</div>

                    <div class="panel-body">
                        <div id="profile">
                            <div class="table-responsive-vertical shadow-z-1">
                                <!-- Table starts here -->
                                <table id="table" class="table table-hover table-mc-light-blue">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Lastname</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Created</th>
                                        <th>Rol</th>
                                        <th>Wijzigen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td data-title="ID">{{ $user->user_id }}</td>
                                        <td data-title="Name">{{ ucfirst($client->name)." ".ucfirst($client->tussenvoegsel) }}</td>
                                        <td data-title="Lastname">{{ ucfirst($client->lastname) }}</td>
                                        <td data-title="Address">{{ ucfirst($client->address) }}</td>
                                        <td data-title="City">{{ ucfirst($client->city) }}</td>
                                        <td data-title="Created">{{ ucfirst($client->date) }}</td>
                                        <td data-title="Rol">{{ ucfirst($rol) }}</td>
                                        <td data-title="Wijzigen">
                                            <a href="{{ URL::route('user.edit', [$user->username]) }}" >
                                                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive-vertical shadow-z-1">
                                <!-- Table starts here -->
                                <table id="table" class="table table-hover table-mc-light-blue">
                                    <thead>
                                    <tr>
                                        <th>Apparaat</th>
                                        <th>Tijdsduur</th>
                                        <th>Snelheid/Sets</th>
                                        <th>Afstand</th>
                                        <th>Gewicht</th>
                                        <th>Calr verbrand </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sportdata as $data)
                                        <tr>
                                            <td data-title="ID">{{ ucfirst($data->device_name) }}</td>
                                            <td data-title="Tijdsduur">{{ ($data->duration) }}</td>
                                            <td data-title="Snelheid">{{ isset($data->speed) ? $data->speed : 'NVT' }}</td>
                                            <td data-title="Afstand">{{ isset($data->km) ? $data->km : 'NVT' }}</td>
                                            <td data-title="Gewicht">{{ isset($data->weight) ? $data->weight : 'NVT' }}</td>
                                            <td data-title="Calr verbrand">{{ ($data->total_sec * (($data->speed * $data->calr_burned))) }}</td>
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
    </div>

@endsection