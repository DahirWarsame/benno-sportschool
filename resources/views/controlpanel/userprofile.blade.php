@extends('layout.admin')

@section('title', 'User Profile')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div id="profile">
        <h1>User {{ $user->username }}</h1>
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
                    <td data-title="Address">{{ ucfirst($client->adress) }}</td>
                    <td data-title="City">{{ ucfirst($client->city) }}</td>
                    <td data-title="Created">{{ ucfirst($client->date) }}</td>
                    <td data-title="Rol">{{ ucfirst($rol->role_description) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection