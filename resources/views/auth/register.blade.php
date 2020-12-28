<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <style>
        .table>thead>tr>th {
            text-align: center;
            cursor: pointer;
        }



        body {
            background: #C5E1A5;
        }
        form {
            width: 60%;
            margin: 60px auto;
            background: #efefef;
            padding: 60px 120px 80px 120px;
            text-align: center;
            -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
            box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            position: relative;
            margin: 40px 0px;
        }
        .label-txt {
            position: absolute;
            top: -1.6em;
            /*padding: 10px;*/
            font-family: sans-serif;
            font-size: .8em;
            letter-spacing: 1px;
            color: rgb(120,120,120);
            transition: ease .3s;
        }
        .input {
            width: 100%;
            /*padding: 10px;*/
            background: transparent;
            border: none;
            outline: none;
        }

        .line-box {
            position: relative;
            width: 100%;
            height: 2px;
            background: #BCBCBC;
        }

        .line {
            position: absolute;
            width: 0%;
            height: 2px;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            background: #8BC34A;
            transition: ease .6s;
        }

        .input:focus + .line-box .line {
            width: 100%;
        }

        .label-active {
            top: -3em;
        }

        button {
            display: inline-block;
            padding: 12px 24px;
            background: rgb(220,220,220);
            font-weight: bold;
            color: rgb(120,120,120);
            border: none;
            outline: none;
            border-radius: 3px;
            cursor: pointer;
            transition: ease .3s;
        }

        button:hover {
            background: #8BC34A;
            color: #ffffff;
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <a href="{{ route('welcome') }}" style="float: right;margin-right: 20px;"><i class="fa fa-home  fa-2x" aria-hidden="true"></i>
                    </a>
                    <div class="panel-heading" ><h3 style="margin-left: 160px;">Register</h3></div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('register') }}">
                            {{ @csrf_field() }}

                            <label>
                                <p class="label-txt">Enter Your Name</p>
                                <input type="text" class="input" name="name" required>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </label>
                            <label>
                                <p class="label-txt">Enter Your Email</p>
                                <input type="email" class="input" name="email" required>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </label>
                            <label>
                                <p class="label-txt">ENTER YOUR PASSWORD</p>
                                <input type="password" class="input" name="password" required>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </label>
                            <label>
                                <p class="label-txt">Confirm PASSWORD</p>
                                <input type="password" class="input" name="password_confirmation" required>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </label>
                            <button type="submit">submit</button>
                            <p>Already a user <a href="{{ route('login') }}">Sign in</a></p>
                        </form>

                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                        {{--@if ($errors->has('name'))--}}
                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                        {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                        {{--@if ($errors->has('password'))--}}
                        {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                        {{--</span>--}}
                        {{--@endif--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                        {{--<div class="col-md-6">--}}
                        {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        {{--<div class="col-md-6 col-md-offset-4">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                        {{--Register--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    $(document).ready(function(){

        $('.input').focus(function(){
            $(this).parent().find(".label-txt").addClass('label-active');
        });

        $(".input").focusout(function(){
            if ($(this).val() == '') {
                $(this).parent().find(".label-txt").removeClass('label-active');
            };
        });

    });
</script>