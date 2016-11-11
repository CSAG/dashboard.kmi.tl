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
                <img src="https://scontent.fbkk7-2.fna.fbcdn.net/v/t1.0-1/p160x160/14716067_1313050905386266_2833666601007258857_n.jpg?oh=7f5ad2bbbacf86dc320b43452c38e4a5&oe=5887F3DE"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed" aria-expanded="false">
                    Passakon Puttasuwan
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample" aria-expanded="false">
                    <ul class="nav">
                        <li>
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <a href="#">Log out</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ url('income') }}">
                    <i class="material-icons">monetization_on</i>
                    <p>รายรับรายจ่าย</p>
                </a>
            </li>

            <li>
                <a href="{{ url('user') }}">
                    <i class="material-icons">supervisor_account</i>
                    <p>สมาชิก</p>
                </a>
            </li>

        </ul>
    </div>
</div>