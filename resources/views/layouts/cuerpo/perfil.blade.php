<button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">
    <img> {!! str_limit(Auth::user()->email, 10) !!}
    <span class="caret"></span>
</button>
<ul class="dropdown-menu pull-right">
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Salir
        </a>
        <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
    </li>
</ul>