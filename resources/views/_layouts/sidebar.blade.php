<div class="sidebar" data-active-color="orange" data-background-color="black"
     data-image="public/dashboard/img/sidebar-1.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            CSAG
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com" class="simple-text">
            CSAG
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('public/dashboard/img/avatar.png') }}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed" aria-expanded="false">
                    Passakon Puttasuwan
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample" aria-expanded="false">
                    <ul class="nav">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}">Log out</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <ul class="nav">
            <li class="{{ Request::segment(1) === null || Request::segment(1) === 'income' || Request::segment(1) === 'home' ? 'active' : null }}">
                <a href="{{ url('income') }}">
                    <i class="material-icons">monetization_on</i>
                    <p>Income</p>
                </a>
            </li>

            <li class="{{ Request::segment(1) === 'user' ? 'active' : null }}">
                <a href="{{ url('user') }}">
                    <i class="material-icons">supervisor_account</i>
                    <p>Members</p>
                </a>
            </li>

        </ul>
    </div>
</div>