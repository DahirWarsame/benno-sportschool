@extends('layout.admin')

@section('title', 'All Users')

@section('sidebar')
    @parent

@endsection

@section('content')
<div id="profile">
    <h1>All users</h1>
    <div class="table-responsive-vertical shadow-z-1">
        <!-- Table starts here -->
        <table id="table" class="table table-hover table-mc-light-blue">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Link</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <td data-title="ID">{{ $user->user_id }}</td>
                <td data-title="Name">{{ ucfirst($user->username) }}</td>
                <td data-title="Link">
                    <a href="{{ URL::route('controlpanel.userprofile', [$user->username]) }}" >{{ $user->username }}'s profile</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection