<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Sphoot-For Those Who Want To Grow</title>
    <!-- Bootstrap CSS -->
    @include('files.commonCss')
    <link rel="stylesheet" href="{{ asset('public/css/profile.css') }}">
</head>

<body>

    @include('files.header')
    @include('files.sidebar')
    <div id="content">
        <div class="blank-space">
            <div class="message-area">
                <div class="yellowcircle">
                    <div class="yellocircle2">
                    </div>
                    <div class="greencircle">
                        <a href=" {{ session('PROF') }}" target="_blank">
                            <div class="imgarea" style = " background-image: url('{{ asset(session('PROF')) }}'); ">
                            </div>
                        </a>

                    </div>

                    <div class="whitearea">
                        <div id="img">
                            <h1 id="white_name">
                            {{ session('firstname') }}
                            </h1>
                            <h1 id="title_name">
                            {{ session('lastname') }}
                            </h1>
                            <h1 id="founder"class="the">{{ session('bioh1') }}</h1> <br> 
                            <h1 id="founderOF"class="the"> {{ session('bioh2') }}</h1>
                            <img id="landline" src="{{ asset('public/images/pho2.png') }}" alt="">
                            <h1 id="cme">Contact me on :</h1>
                            <h1 id="mobno">
                            {{ session('mobile') }}
                            </h1>
                            <div class="finalcircle">
                                <h1 id="meem">MEET ME</h1>
                                <h1 id="ons">ON SPHOOT</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>




@include('files.script')
</body>

</html>