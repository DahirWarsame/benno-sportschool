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
                    <div class="panel-heading">User {{ $user->username }}</div>

                    <div class="panel-body">
                        <div id="profile">
                            <div class="table-responsive-vertical shadow-z-1">
                                <!-- Table starts here -->
                                <table id="table" class="table table-hover table-mc-light-blue">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Prefix</th>
                                        <th>Lastname</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Created</th>
                                        <th>Rol</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td data-title="ID">{{ $user->user_id }}</td>
                                        <td data-title="Name">{{ ucfirst($client->name) }}</td>
                                        <td data-title="Prefix">{{ ucfirst($client->tussenvoegsel) }}</td>
                                        <td data-title="Lastname">{{ ucfirst($client->lastname) }}</td>
                                        <td data-title="Address">{{ ucfirst($client->address) }}</td>
                                        <td data-title="City">{{ ucfirst($client->city) }}</td>
                                        <td data-title="Created">{{ ucfirst($client->date) }}</td>
                                        <td data-title="Rol">{{ ucfirst($rol) }}</td>
                                    </tr>
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