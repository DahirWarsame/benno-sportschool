@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="http://www.borstspierentrainen.nl/wp-content/uploads/2014/08/de-sportschool.jpg" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>Welkom</h3>
                                        <p>Bij benno's sportschool.</p>

                                    </div>
                                </div>

                                <div class="item">
                                    <img src="https://www.fernwoodfitness.com.au/img/The-7-rules-of-weight-lifting.jpg" alt="Image">
                                    <div class="carousel-caption">
                                        <h3>Sporten</h3>
                                        <p>Voor al je fitness needs!!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
