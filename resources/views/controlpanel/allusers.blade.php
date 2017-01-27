<!DOCTYPE html>
<html>
  <head>
    <title>All User</title>
  </head>
  <body>
    @foreach ($users as $user)
        <ul>
          <a href="{{ URL::route('user.profile', [$user->username]) }}" >{{ $user->username }}'s profile</a>
        </ul> 
    @endforeach
  </body>
</html>