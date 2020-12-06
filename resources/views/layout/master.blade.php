<!doctype html>
<html lang="en">

<head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172923637-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172923637-1');
  </script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="public/images/sphoot-favicon.ico" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sphoot-For Those Who Want To Grow</title>
</head>

<body>

  @include('layout.navbar')

  <div class="bg">
  <div class="bg-blur"></div>
  </div>
  

 @yield('body')
  


  <div class="footer">
    <div class="about-area">
      <a href="" id="footerhelp">Help</a>
      <a href="" id="footerabout">About Us</a>
      <a href="" id="footercareer">Careers</a>
      <a href="" id="footerevent">Event</a>
      <a href="" id="footernews">News</a>
    </div>
    <div class="social-link">
      <i class="fa fa-facebook space-between" aria-hidden="true"></i>
      <i class="fa fa-instagram space-between" aria-hidden="true"></i>
      <i class="fa fa-linkedin-square space-between" aria-hidden="true"></i>
      <i class="fa fa-twitter space-between" aria-hidden="true"></i>
      <i class="fa fa-youtube-play space-between" aria-hidden="true"></i>
      <i class="fa fa-github space-between" aria-hidden="true"></i>
    </div>
    <div class="detail-area"></div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/index.js"></script>

</body>

</html>