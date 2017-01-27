<div>
    <h1>User {{ $user->username }}</h1>
    <ul>
      <li>First Name: {{ $client->name }}</li>
      <li>Tusenvoegsel: {{ $client->tusenvoegsel }}</li>
      <li>Lastname: {{ $client->lastname }}</li>
      <li>Adress: {{ $client->adress }}</li>
      <li>City: {{ $client->city }}</li>
      <li>Created: {{ $client->date }}</li>
      <li></li>
      <li>Rol: {{ $rol->rol_description }}</li>
    </ul>
</div>