<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=2, user-scalable=no">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.css.map">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css.map">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
  <style>
      header .main-nav{
	    position: fixed;
	  top: 0;
	left: 0;
	width: 100%;
	z-index: 4000;
}
header .main-nav-scrolled{
	background-color: rgba(0,0,0,0.4);
}
.navbar-light .navbar-nav .nav-link{
	color: #fff;
}
.navbar-light .navbar-nav .active .nav-link{
	color: #00e0d0;
}

/*for test*/
body{
  height: 400px;
}
</style>
<script>
    var  mn = $(".main-nav");
    mns = "main-nav-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});
</script>
  <body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-danger text-light py-3 main-nav">
          <div class="container">
            <a class="navbar-brand" href="index.html"><img src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjhjPfY_97WAhWCOI8KHSvHA34QjRwIBw&url=http%3A%2F%2Fpluspng.com%2Fhp-png-1793.html&psig=AOvVaw38ZFiKrvcpgGwQUMhu9Vx8&ust=1507481987906950" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#story">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#expertise">expertise</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#team">teams</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#works">works</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#people-say">pepole say</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  text-uppercase" href="#contact">contact</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <script src="js/custom.js"></script>
  </body>
</html>