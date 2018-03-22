<ul>
    <li>name:{{ $user->name }}</li>
    <li>Email:{{ $user['email'] }}</li>
</ul>
<hr>
@php
    var_dump($user);
@endphp