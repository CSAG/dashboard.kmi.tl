<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{ url('public/dashboard/img/favicon.ico') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>CSAG Dashboard Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('public/dashboard/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/dashboard/css/material-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/dashboard/css/demo.css') }}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
</head>

<body>
<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ url('public/dashboard/img/logo_small.png') }}" class="text-center"
                                              style="max-height: 150%"></a>
    </div>

</nav>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" filter-color="black" data-image="{{ url('public/dashboard/img/csag_team.jpg') }}">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        @if(session('err'))
                            <div class="alert alert-danger" style="margin-bottom: 50px">

                                <span>
                                    {{session('err')}}</span>
                            </div>
                        @endif
                        <form method="post" action="{{ url('login') }}">
                            {{ csrf_field() }}
                            <div class="card card-login">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">CSAG Dashboard Login</h4>
                                </div>

                                <div class="card-content">

                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email address</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a target="_blank" href="http://csag.kmi.tl">
                                CSAG
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://kmi.tl">
                                KMI.TL
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://mail.kmi.tl">
                                EMAIL
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/csag.kmitl">
                                FACEBOOK PAGE
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/groups/csagcommunity">
                                FACEBOOK COMMUNITY
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://csag.kmi.tl">CSAG</a> องกรค์ที่เจ๋งที่สุดใน KMITL
                </p>
            </div>
        </footer>
        <div class="full-page-background"
             style="background-image: url({{ url('public/dashboard/img/csag_team.jpg') }});"></div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('public/dashboard/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/jquery.tagsinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/dashboard/js/material-dashboard.js') }}" type="text/javascript"></script>


</html>