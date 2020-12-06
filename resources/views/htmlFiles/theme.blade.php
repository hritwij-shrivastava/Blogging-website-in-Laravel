<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>Sphoot-For Those Who Want To Grow</title>
    <link rel="stylesheet" href="public/css/theme.css">
    @include('files.commonCss')
</head>

<body>

   @include('files.header')
    @include('files.sidebar')


    <div id="content">
        <div class="backgroundarea">
            <div class="mainarea-post">
                <a href="../theme-preview/theme-preview.php?theme=0"><div class="picbox"><img src="public/images/theme0.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=1" ><div class="picbox"><img src="public/images/theme1.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=2" ><div class="picbox"><img src="public/images/theme2.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=3" ><div class="picbox"><img src="public/images/theme3.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=4" ><div class="picbox"><img src="public/images/theme4.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=5" ><div class="picbox"><img src="public/images/theme5.png" alt="" class="htmlimg"></div></a>

                <a href="../theme-preview/theme-preview.php?theme=6" ><div class="picbox"><img src="public/images/theme6.png" alt="" class="htmlimg"></div></a>
                
                <a href="../theme-preview/theme-preview.php?theme=7" style="padding-bottom:30px;"><div class="picbox"><img src="public/images/theme7.png" alt="" class="htmlimg"></div></a>
            </div>
        </div>
    </div>



    @include('files.script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="public/tools/readmore/readmore.js"></script>
    <script src="public/js/home.js"></script>

</body>

</html>