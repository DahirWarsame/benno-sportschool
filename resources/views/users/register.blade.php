<!-- /container -->

@extends('layout.app')

@section('title', 'Registreer')

@section('sidebar')
    @parent


@endsection

@section('content')
    <div class="container">

        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputUsername" class="sr-only">Gebruikernaam</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Gebruikersnaam" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>

            <h3 class="form-signin-heading">Persoonsgegevens</h3>
            <label for="inputName" class="">Naam</label>
            <input type="text" id="inputName" class="form-control" placeholder="Naam" required>
            <label for="inputTussen" class="">Tussenvoegsel</label>
            <input type="text" id="inputTussen" class="form-control" placeholder="Tussenvoegsel" required>
            <label for="inputLastname" class="">Achternaam</label>
            <input type="text" id="inputLastname" class="form-control" placeholder="Achternaam" required>
            <label for="inputAddres" class="">Adres + Huisnummer</label>
            <input type="text" id="inputAddres" class="form-control" placeholder="Adres + Huisnummer" required>
            <label for="inputCity" class="">Stad</label>
            <input type="text" id="inputCity" class="form-control" placeholder="Stad" required>
            <label for="inputAccountNum" class="">Rekeningnummer(IBAN)</label>
            <input type="text" id="inputAccountNum" class="form-control" placeholder="Rekeningnummer(IBAN)" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        {{ Form::open(array('action' => 'UserController@method')) }}
        //
        {{ Form::close() }}

    </div>
@endsection
