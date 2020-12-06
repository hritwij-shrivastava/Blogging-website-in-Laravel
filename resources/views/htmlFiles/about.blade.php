<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/about.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('public/css/index.css') }}"> -->
  <title>Sphoot-For Those Who Want To Grow</title>
</head>

<body>

@include('layout.navbar')

  <div id="wrapper-side">
    <div class="box1">
      <div class="box-center">
        <div class="center-area">
          <div class="we">

            <div class="hritwij"></div>
            <div class="mszh1">
              <li> Hritwij Shrivastava</li>
              <li id="hrh2"> Developer, Founder </li>
            </div>

            <div class="dipika"></div>
            <div class="mszd1">
              <li> Dipika Dubey</li>
              <li id="dipi2"> Developer, Founder </li>
            </div>

            <div class="udita"></div>
            <div class="mszu1">
              <li> Udita Das</li>
              <li id="udi2">Developer, Founder</li>
            </div>
          </div>
        </div>
        <div class="box2">
          <img src="{{ asset('public/images/flower2.png') }}" alt="" id="flower">
          <img src="{{ asset('public/images/lap.png') }}" alt="" id="lappy">
          <img src="{{ asset('public/images/mobile_phone.png') }}" alt="" id="mobile">
          <img src="{{ asset('public/images/beautiful.png') }}" alt="" id="female">

        </div>
      </div>
    </div>


    <div class="box3">
      <div class="we2">
        <div class="hritwij2"></div>
        <div class="mszh2">
          <h1 >Hello,</h1>
          <h1 id="abit">a bit about me:</h1>
          <h1 id="wordsh">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque aspernatur quidem similique molestiae ullam veniam,
            quos, quaerat aut ad tempora magni deleniti quam natus commodi in, accusamus incidunt quisquam fuga.</h1>
        </div>
      </div>
    </div>

    <div class="box4">
      <div class="we3">
        <div class="dipika2"></div>
        <div class="mszd2">
          <h1 >Hello,</h1>
          <h1 id="abitd">a bit about me:</h1>
          <h1 id="wordsd">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque aspernatur quidem similique molestiae ullam veniam,
            quos, quaerat aut ad tempora magni deleniti quam natus commodi in, accusamus incidunt quisquam fuga.</h1>
        </div>
      </div>
    </div>

    <div class="box5">
      <div class="we4">
        <div class="udita2"></div>
        <div class="mszu2">
          <h1 >Hello,</h1>
          <h1 id="abitu">a bit about me:</h1>
          <h1 id="wordsu">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque aspernatur quidem similique molestiae ullam veniam,
            quos, quaerat aut ad tempora magni deleniti quam natus commodi in, accusamus incidunt quisquam fuga.</h1>
        </div>
      </div>
    </div>

    <div class="box6">
      <div class="center-areamsz">
        <div class="share">
          <img src="{{ asset('public/images/share.png') }}" alt="" id="shareimage">
          <h1 class="shareword1">Beautiful themes that are
            <br> responsive and customizable</h1>
          <h5 class="shareword2">No design skills needed. You have
            <br> complete control over the look and feel of your website, from its layout, to content and colors.</h5>
        </div>
        <div class="money">
          <img src="{{ asset('public/images/money.png') }}" alt="" id="moneyimage">
          <h1 class="shareword1">Beautiful themes that are
            <br> responsive and customizable</h1>
          <h5 class="shareword2">No design skills needed. You have
            <br> complete control over the look and feel of your website, from its layout, to content and colors.</h5>
        </div>
        <div class="group">
          <img src="{{ asset('public/images/group.png') }}" alt="" id="groupimage">
          <h1 class="shareword1">Beautiful themes that are
            <br> responsive and customizable</h1>
          <h5 class="shareword2">No design skills needed. You have
            <br> complete control over the look and feel of your website, from its layout, to content and colors.</h5>
        </div>
      </div>
    </div>

    <div class="box7">
      <div class="center-areamsz2">
        <h1 id="cus">Contact Us</h1>
        <h1 id="wehelp">We're here to help</h1>
        <hr id="breaktop">
        <div class="callno">
          <img src="{{ asset('public/images/call.png') }}" alt="" class="sharemob">
          <h1 class="sharecs">Call Us</h1>
          <h5 class="sharenomy" style="color:blue">+91 8051319411</h5>
        </div>
        <div class="callno">
          <img src="{{ asset('public/images/email2.png') }}" alt="" class="sharemob">
          <h1 class="sharecs">Email</h1>
          <h5 class="sharenomy" style="color:blue">support@sphoot.com</h5>
        </div>
        <div class="callno">
          <img src="{{ asset('public/images/ask.png') }}" alt="" class="sharemob">
          <h1 class="sharecs">Ask a question</h1>
          <button class="btn btn-primary" id="midit">Get Started</button>
        </div>
        <hr id="breakbottom">
      </div>
    </div>
 

    <div class="box8">
      <h1 id="cool">"Sphoot is better than any other blogging platform, Create your cool blog
        <br> with us."</h1>
      <button class="btn btn-success join"> Sign up now</button>
    </div>

    <div class="footer bg-dark">
      <div>
        <ul class="footer-ar" style="list-style: none; float: left;">
          <li>
            <h3>Help</h3>
          </li>
          <li>
            <a href="#" class="text-light">Help Center</a>
          </li>
          <li>
            <a href="#" class="text-light">Help Forum</a>
          </li>
          <li>
            <a href="#" class="text-light">Video Tutorials</a>
          </li>
          </br>
          </br>
          <li>
            <span style="display: inline-block; ">
              <a style="display: inline-block; font-size: 11px; padding-left: 5px !important;" href="#">Terms of Service &nbsp; &#8226;</a>
            </span>
            <span style="display: inline-block; ">
              <a style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#">Privacy &nbsp; &#8226;
              </a>
            </span>
            <span style="display: inline-block; ">
              <a style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#"> Content Policy
              </a>
            </span>
          </li>
        </ul>

      </div>
      <div>

      </div>
    </div>

  </div>

    @include('files.script')
    <script src="{{ asset('public/js/about.js') }}"></script>


</body>

</html>