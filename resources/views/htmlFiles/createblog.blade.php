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
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('public/css/edit-blog.css') }}">
    @include('files.commonCss')
    <title>Sphoot: My Blog</title>
    <script src="{{ asset('public/tools/ckeditor/ckeditor.js') }}"></script>
</head>

<body>
    <nav class="mynav sticky-top">
        <a  href="#" id="pointer" onclick="goBack()">
            <svg width="1em" style="font-size:30px; " height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"
                />
                <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </a>
        <a href=""><img src="{{ asset('public/images/logo2.png') }}" alt="" id="logo"></a>
        <button type="button" class="publish btn-success" id="publish" onclick="mypost()">
                <svg width="1em" height="1em" style="position: relative; top: -3px;" viewBox="0 0 16 16" class="bi bi-cursor-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                </svg>
        Publish</button>
    </nav>
        <div id="top" >
            <button id="upnav">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"
                    />
                </svg>
            </button>
            <button id="downnav">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                </svg>
            </button>
        </div>
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
                <div id="title">
                    <h5 id="title-h">Title</h5>
                    <input type="text" placeholder="Title" id="input-h" value="@php if($post_title !='(Untitled)'){echo ($post_title);}@endphp">
                </div>
            <div id="area" contenteditable="true">@php if($post_content !=''){echo ($post_content);}@endphp</div>
            </div>
        </div>



    @include('files.script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('public/js/blog.js') }}"></script>
</body>

</html>