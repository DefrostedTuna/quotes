<div class="nav-mobile--container">
    <div class="nav-mobile--wrap">
        <ul>
            <li class="nav-mobile__search">
                {{ Form::open() }}
                <i class="material-icons">search</i>
                <input id="input__search" name="search" type="text" class="validate" placeholder="Type anything and press Enter">
                {{ Form::close() }}
            </li>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="">Quotes</a></li>
            <li><a href="">Authors</a></li>
            <li><a href="{{ route('documentation') }}">API</a></li>
        </ul>
    </div>
</div>
<div class="nav-mobile--mask"></div>