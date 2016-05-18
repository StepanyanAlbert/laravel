@if(Auth::check())
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            @if (isset($name))
                <span class="navbar-brand">Welcome {{$name}}!!!</span>

            @else
                <span class="navbar-brand">Welcome !!!</span>
            @endif
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="btn-group navbar-btn" role="group" aria-label="logout">
                        <a href="logout">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSignin">
                                Log out
                            </button>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endif