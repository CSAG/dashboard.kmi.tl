<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{ url('public/dashboard/img/favicon.ico') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>CSAG Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('public/dashboard/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/dashboard/css/material-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/dashboard/css/demo.css') }}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    @stack('css')
</head>