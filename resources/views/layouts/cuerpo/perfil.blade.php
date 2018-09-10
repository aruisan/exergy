<button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">
    <img> {!! str_limit(Auth::user()->email, 10) !!}
    <span class="caret"></span>
</button>
<ul class="dropdown-menu pull-right">
    <form action="{{ url('/avatar')}}" id="avatarForm" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" style="display: none" name="photo" id="avatarInput" accept="image/*">
    </form>
    <li>
        <i class="fa fa-user-circle" aria-hidden="true"></i>{{ Auth::user()->email }} 
    </li>
    <li>
        <i class="fa fa-user-circle" aria-hidden="true"></i>{{ Auth::user()->name }} 
    </li>
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Salir
        </a>
        <form  action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
    </li>
</ul>