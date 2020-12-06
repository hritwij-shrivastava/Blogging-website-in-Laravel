@extends('layout/master')

@section('body')

  <div class="action-area">
    <div id="carouselExampleIndicators" class="carousel slide below carousel-fade" data-ride="carousel" data-interval="11000" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" >
        <div class="carousel-item active" >
          <img src="public/images/nasa-motion-0.2.gif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>Write Educational Blog</h1>
          </div>
        </div>
        <div class="carousel-item" >
          <img src="public/images/history2.gif" class="d-block w-100" alt="...">
          <div class="team-blur" style="opacity: 0.4 !important;"></div>
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>Tell Historical Story</h1>
          </div>
        </div>    
        <div class="carousel-item" >
          <img src="public/images/foodblog.jpg" class="d-block w-100" alt="...">
          <div class="team-blur" style="opacity: 0.4 !important;"></div>
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>Show everyone your delicious recipes</h1>
          </div>
        </div>
        <div class="carousel-item" >
          <img src="public/images/software.jpg" class="d-block w-100" alt="...">
          <div class="team-blur" style="opacity: 0.4 !important;"></div>
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>Solve programming problems</h1>
          </div>
        </div> 
        <div class="carousel-item" >
          <img src="public/images/travel.jpg" class="d-block w-100" alt="...">
          <div class="team-blur" style="opacity: 0.4 !important;"></div>
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>Share your travelling experiences</h1>
          </div>
        </div> 
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <div class="t-center">
    <h2 class="h-style">For everyone, who wants to grow</h2>
    <div class="small-line"></div>
    <p class="pword">
      Want a platform to share your knowledge uniquely?
      Here we welcome you all to explore your exciting new ideas, knowledge, skills to share across the globe. Sphoot provides you the platform that helps you to build yourself irrespective of who you are.
      Our mission helps beginners to know themselves and our services support you to keep growing. We provide assistance to get you started whatever else you dream up.
    </p>
  </div>

  <div class="container-card">
    <div class="container below">
      <div class="row">
        <div class="col-sm-6 col-md-4 text-center">
          <div class="card wh-media">
            <img src="public/images/blog.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Write Blog</h5>
              <p class="card-text">Make your own blog with us. We will help you in sharing your knowledge with everyone.</p>
              <a href="#" class="btn mycolor">Start Making Blog</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 text-center mt-n5">
          <div class="card wh-media-special">
            <img src="public/images/solution1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Find Solution</h5>
              <p class="card-text">Find soluion of your problem. Read Blogs posted by others and get the solution of your problem.</p>
              <a href="#" class="btn btn-success">Try now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 text-center">
          <div class="card wh-media">
            <img src="public/images/author2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ask questions </h5>
              <p class="card-text">Ask questions directly to the authors. Discuss any topic or doubts directly with them.</p>
              <a href="#" class="btn mycolor">Chat with authors</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="design-container">
    <div class="design">
      <div class="center-logo">
        <img src="public/images/sphoot-favicon-white.png" alt="" class="logoimg">    
      </div>
      <div id="svg">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera graphics cam" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
          <path fill-rule="evenodd" d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera graphics cam2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
          <path fill-rule="evenodd" d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-reels graphics videoR" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 8a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8zm11.5 5.175l3.5 1.556V7.269l-3.5 1.556v4.35zM2 7a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2z"/>
          <path fill-rule="evenodd" d="M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M9 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-reels graphics videoL" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 8a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8zm11.5 5.175l3.5 1.556V7.269l-3.5 1.556v4.35zM2 7a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2z"/>
          <path fill-rule="evenodd" d="M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M9 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-music-player graphics musicR" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
          <path fill-rule="evenodd" d="M11 3H5v3h6V3zM5 2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H5zm3 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <circle cx="8" cy="11" r="1"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-music-player graphics musicL" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
          <path fill-rule="evenodd" d="M11 3H5v3h6V3zM5 2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H5zm3 11a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <circle cx="8" cy="11" r="1"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mic graphics g-mic " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M10 8V3a2 2 0 1 0-4 0v5a2 2 0 1 0 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil graphics g-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-left-dots graphics g-chat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
          <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart graphics g-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart graphics g-heart1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart graphics g-heart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart graphics g-heart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-patch-question graphics g-ques" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"/>
          <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-speaker graphics g-speaker" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
          <path fill-rule="evenodd" d="M8 4.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-spellcheck graphics g-spellcheck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8.217 11.068c1.216 0 1.948-.869 1.948-2.31v-.702c0-1.44-.727-2.305-1.929-2.305-.742 0-1.328.347-1.499.889h-.063V3.983h-1.29V11h1.27v-.791h.064c.21.532.776.86 1.499.86zm-.43-1.025c-.66 0-1.113-.518-1.113-1.28V8.12c0-.825.42-1.343 1.098-1.343.684 0 1.075.518 1.075 1.416v.45c0 .888-.386 1.401-1.06 1.401zm-5.583 1.035c.767 0 1.201-.356 1.406-.737h.059V11h1.216V7.519c0-1.314-.947-1.783-2.11-1.783C1.355 5.736.75 6.42.69 7.27h1.216c.064-.323.313-.552.84-.552.527 0 .864.249.864.771v.464H2.346C1.145 7.953.5 8.568.5 9.496c0 .977.693 1.582 1.704 1.582zm.42-.947c-.44 0-.845-.235-.845-.718 0-.395.269-.684.84-.684h.991v.538c0 .503-.444.864-.986.864zm8.897.567c-.577-.4-.9-1.088-.9-1.983v-.65c0-1.42.894-2.338 2.305-2.338 1.352 0 2.119.82 2.139 1.806h-1.187c-.04-.351-.283-.776-.918-.776-.674 0-1.045.517-1.045 1.328v.625c0 .468.121.834.343 1.067l-.737.92z"/>
          <path fill-rule="evenodd" d="M14.469 9.414a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.908 1.907 3.476-4.346a.75.75 0 0 1 1.055-.117z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe graphics g-globe" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book graphics g-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop graphics g-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
        </svg>
      </div>
    </div>
    <div class="design-content">
        <h1 class="design-title">Sphoot makes blogging as easy as making notes in your notebook.</h1>
        <p>We made blogging, really simple for everyone. Write blogs on Stories, TV shows, Technology, Cooking , Travelling, Fashion, Art.</p>
      </div>
  </div>

  <div class="choose">
    <h2>Select design that suits best for your blog</h2>
    <p>Make cool & stylish blog. Choose templates that fits your requirement. Select layouts and hundreds of background images.</p>
    <img src="public/images/design3.gif" alt="" class="design1">
  </div>

  <div class="showoff">
    <div class="center-container">
      <div class="usernumber">
        <h2 class="number">60</h2>
        <p class="subtittle">Users</p>
      </div>
      <div class="country">
        <h2 class="numberNaN">5</h2>
        <p class="subtittle">Countries</p>
      </div>
      <div class="blogs">
        <h2 class="number">500</h2>
        <p class="subtittle">Blogs</p>
      </div>
      <div class="likes">
        <h2 class="number">6000</h2>
        <p class="subtittle">Likes</p>
      </div>
    </div>
  </div>

  <div class="domain">
    <h2>Get a free domain</h2>
    <p>Give name of your choice to your blog. Get a free yourname.sphoot.com domain with just a few clicks.</p>
    <img src="public/images/web.png" alt="" class="web">
  </div>

  <div class="team-container">
    <div class="team"></div>
    <div class="team-blur"></div>
    <div class="join">
      <button class="joincolor">JOIN US</button>
    </div>
  </div>


@endsection
