@php
    $num = $result->count();

    if($num == 1){
        $u_id = $result->value('u_id');
        $post_title = $result->value('post_title');
        $post_content = $result->value('post_content');
        $status = $result->value('status');
    }
    $back_img = $result2->value('backgroundtheme');
@endphp

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $post_title }}</title>
    <link rel="stylesheet" href="{{ asset('public/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/loginSignupHeader.css') }}">
    @include('files.commonCss')

    <style>
        .dipikablog1{
            background-image: url('{{ asset('public/images/dipikablog1.jpg') }}');
            background-position: -400px -800px;
        }
        .dipikablog2{
            background-image: url('{{ asset('public/images/dipikablog2.jpg') }}');
            background-position: 400px -800px;
        }
        .dipikablog3{
            background-image: url('{{ asset('public/images/dipikablog3.jpg') }}');
            background-position:center; 
            background-size: cover;
        }
        .dipikablog4{
            background-image: url('{{ asset('public/images/dipikablog4.jpg') }}');
            background-position: -437px 0px;
        }
        .dipikablog5{
            background-image: url('{{ asset('public/images/dipikablog5.jpg') }}');
            background-position: -400px -800px;
        }
        .dipikablog6{
            background-image: url('{{ asset('public/images/dipikablog6.jpg') }}');
            background-size: contain;
            background-position: -345px -450px
        }
        .dipikablog7{
            background-image: url('{{ asset('public/images/dipikablog7.jpg') }}');
            background-position: 0px 0px
        }
    </style>

</head>

<body>
    @if(empty(session('name')))
        @include('files.loginSignupHeader')
    
    @else
        @include('files.header')
    @endif
    
    
    <div class="wrapper">
        <nav id="sidebar">
            <div class="authorprof">
                <div class="center_image">
                    <img src="" alt="" onerror=this.src="{{ asset('public/images/profile.svg') }}">
                </div>
            </div>
            <div class="author_name">
                <h5>Author Name</h5>
                <button class="visit">VISIT PROFILE</button>
                <!-- <h5>Articles</h5> -->
            </div>
            
        </nav>
</div>

    <div id="content">
    <div class="main-area 
                        @php 
                        if($back_img == '1'){
                            echo "dipikablog1"; 
                        }
                        else if($back_img == '2'){
                            echo "dipikablog2"; 
                        }
                        else if($back_img == '3'){
                            echo "dipikablog3"; 
                        }
                        else if($back_img == '4'){
                            echo "dipikablog4"; 
                        }
                        else if($back_img == '5'){
                            echo "dipikablog5"; 
                        }
                        else if($back_img == '6'){
                            echo "dipikablog6"; 
                        }
                    @endphp">
            <div class="writespace">
                <div id="area">
                    {!! $post_content !!}
                </div>
            </div>
        </div>
    </div>



    @include('files.script')
    <script src="{{ asset('public/js/loginSignupHeader.js') }}"></script>

</body>

</html>