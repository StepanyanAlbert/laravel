
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            @if (Auth::check())
                <span class="navbar-brand">Welcome {{Auth::user()->username}}!!!</span>


                @else <span class="navbar-brand">Welcome guest!!</span>
            @endif

        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="btn-group navbar-btn" role="group" aria-label="logout">
                        @if(Auth::check())
                        <a href="{{url('logout')}}">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSignin">
                                Log out
                            </button></a>
                            <a href="{{url('homepage')}}">
                                <button class="btn btn-success">Go to homepage</button>
                            </a>
                            @else
                                    <a href="{{url('getlogin')}}">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSignin">
                                            Log in
                                        </button></a>
                                @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
