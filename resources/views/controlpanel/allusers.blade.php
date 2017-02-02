@extends('layouts.user')

@section('title', 'All Users')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>

                    <div class="panel-body">
                        <div id="profile">
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
                                            <td data-title="Name">{{ ucfirst($user->email) }}</td>
                                            <td data-title="Link">
                                                <a href="{{ URL::route('user.userprofile', [$user->username]) }}" >{{ $user->username }}'s profile</a>
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
    </div>


@endsection