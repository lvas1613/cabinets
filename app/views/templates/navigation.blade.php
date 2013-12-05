<nav class="navbarstyle" role="navigation">

<ul class="list-inline">
    <li class="fontchange">Home</li>
    <li class="fontchange">About Curtis</li>
    <li class="fontchange">Furniture</li>
    <li class="fontchange">Cabinetry</li>
    <li class="fontchange">Kitchen &amp; Bath</li>
    <li class="fontchange">Special Projects</li>
    <li class="fontchange">Contact</li>

    @if(!Auth::check())

    <li class="fontchange">{{ HTML::link('users/login', 'Login') }}</li>
    @else
    <li class="fontchange">{{ HTML::link('users/logout', 'Logout') }}</li>
    @endif

</ul>

</nav>