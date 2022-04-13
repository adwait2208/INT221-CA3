<!DOCTYPE html>
<html lang="en">

<head>
  <title>FLEX-FIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }

    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 50%;
    }

    .ccc {
      height: 100px;
      width: 100px;
    }

    .row-setting {
      margin: 80px 0px !important;
    }

    .imgsetting {
      border-radius: 40%;
      height: 90px;
      width: 90px;
    }

    .cd {
      color: black;
    }

    .im {
      max-height: 90px;
      max-width: 100px;
    }
  </style>
</head>

<body>

  <div class="jumbotron  bg-dark text-white" style="margin-bottom:0">
    <div class="container mb-0">

      <div class="row">
        <div class="col-4 col-sm-2">
          <!-- <img src="logo.jpg" class="img-fluid im rounded-circle">  -->
        </div>
        <div class="col-4">
          <h2>FLEX-FIT</h2>
          <p>Improve your Flexibility with your Fitness</p>
        </div>

      </div>

    </div>
  </div>

  <nav class="navbar sticky-top navbar-expand-sm bg-info navbar-dark" style="margin-top: -40px;">
    <a class="navbar-brand" href="{{route('welcome')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">

          <a class="nav-link" data-toggle="modal" data-target="#myModal" href=""><i class="fa fa-comment" aria-hidden="true"></i> Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <!-- The Modal -->
  <div class="modal " id="myModal">
    <div class="modal-dialog">
      <div class="modal-content p-3">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact Us</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="{{route('contacts.store')}}" method="POST">
          @csrf
          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Comment</label>
              <textarea class="form-control" placeholder="Enter comment" name="comment"></textarea>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submbit" class="btn btn-info">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://gymplus.ie/wp-content/uploads/2021/09/Gymplus-Ashbourne-Photo-18-copy-scaled.jpg" alt="Los Angeles" width="1100" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>WORKOUT</h3>
          <p>Workout is much like any other sport. To be successful, you must dedicate yourself 100% to your training, diet and mental approach.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202107/Delhi_gyms_2.JPG?01B44Nrynrb1e.Wd1zwAwn1IhFsIocKT&size=1200:675" alt="Chicago" width="1100" height="500" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>FITNESS-CLUB</h3>
          <p>We are one of the best fitness club in the city which focus on the workout as per your flexibilty.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.gymstarters.com/wp-content/uploads/thumbnail_IMG_1107.jpg" alt="New York" width="1100" height="500" style="max-height: 500px;">
        <div class="carousel-caption">
          <h3>FITNESS QUOTES</h3>
          <p>¨Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.¨ – John F. Kennedy</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <h4>About Me</h4>
        <!-- <img src="adw.jpg" class="img-fluid rounded-circle" style="max-height: 200px;"> -->
       <div class="mt-2">
          <span class="mt-3">Name : Adwait Singh</span><br>
          <span class="mt-3">Email : adwait.singh007@gmail.com</span><br>
          <span>Mobile : 01759773446</span>


        </div>

        <h4 class="mt-5">Some Links</h4>
        <p>to see information about us</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active bg-info" href="{{route('welcome')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lgg" href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lgg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
                <div class="modal-header">
                  <h4 class="modal-title">Location Information</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="row row-content mt-2">

                  <div class="col-12 col-sm-4 offset-sm-1">
                    <h5>Our Address</h5>
                    <address style="font-size: 100%">
                      H-124, Near Lovely Professional University<br>
                      Law Gate<br>
                      Jalandhar<br>
                      <i class="fa fa-phone"></i>: +123456789<br>
                      <i class="fa fa-fax"></i>: +12345985281<br>
                      <i class="fa fa-envelope"></i>:
                      <a href="mailto:confusion@food.net">ad9642@.net</a>
                    </address>
                  </div>
                  <div class="col-12 col-sm-6 offset-sm-1">
                    <h5>Map of our Location</h5>
                  </div>
                  <div class="col-12 col-sm-11 offset-sm-1">
                    <div class="btn-group" role="group">
                      <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                      <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                      <a role="button" class="btn btn-success" href="ad9642@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg" href=""><i class="fa fa-podcast" aria-hidden="true"></i> About Us</a>
          </li>
          <!-- The Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content p-5">
                <div class="modal-header">
                  <h4 class="modal-title">Our History</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="row mt-5 mb-5">
                  <div class="col-12 col-md-6">

                    <p>We believe fitness should be accessible to everyone, everywhere,at a much cheaper rates so that everyone can access fitness equipment. </p>
                    <p>The club traces its humble beginnings a successful chain started by our CEO, Mr. Adwait Singh, that featured for the first time the Jalandhar's best cub.</p>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="card">
                      <h3 class="card-header bg-primary text-white">Facts At a Glance</h3>
                      <div class="card-body">
                        <dl class="row">
                          <dt class="col-6">Started</dt>
                          <dd class="col-6">3 Feb. 2020</dd>
                          <dt class="col-6">Best Fitness Club</dt>
                          <dd class="col-6">Fit-Flex Club</dd>
                          <dt class="col-6">Last Year's Member Joined</dt>
                          <dd class="col-6">546</dd>
                          <dt class="col-6">Trainer</dt>
                          <dd class="col-6">7</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-body bg-light">
                      <blockquote class="blockquote">
                        <p class="mb-0">¨Here’s what I tell anybody and this is what I believe. The greatest gift we have is the gift of life. We understand that. That comes from our Creator. We’re given a body. Now you may not like it, but you can maximize that body the best it can be maximized.¨</p>
                        <footer class="blockquote-footer">Adwait Singh,
                          <cite title="Source Title">Founder ,
                            FIT-FLEX CLUB, 2020</cite>
                        </footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </ul>
        <hr class="d-sm-none">
      </div>





      <div class="col-sm-8">
        @foreach ($blogs as $blog)
        <h4>{{$blog->title}}</h4>
        <p><i class="fa fa-user" aria-hidden="true"></i> Created By {{$blog->author}}</p>
        <div><img src="/upload/{{$blog->img_path}}" style="max-height:100px" ;></div>
        <p><i class="fa fa-calendar" aria-hidden="true"></i> Publised On {{$blog->created_at}}</p>
        @if(strlen($blog->descriptions) > 200) <p>{{substr($blog->descriptions,0 , 200)}}...</p>
        <a class="btn btn-info mb-4" href="{{route('blogUser.show', $blog->id)}}">Read more</a>
        <br>
        @else
        <p>{{$blog->descriptions}}</p>
        @endif


        @endforeach
        <span>
          {!! $blogs->links() !!}
        </span>
        <style>
          .w-5 {
            display: none;
          }
        </style>
      </div>


    </div>
    <!--row 2 -->
    <div style="margin-top: 200px"></div>
    <h1 style="text-align: center; font-weight: bold">WHY YOU JOIN WITH US</h1>
    <div class="row">
      <div class="col-4">
      </div>
      <div class="col-4 text-center">
        <p>These are the interesting things about our club which makes you fall in love with our fitness club.</p> 
      </div>
      <div class="col-4">
      </div>
    </div>

    <div class="row text-center row-setting">
      <div class="col-sm-4 col-md-4 d-block m-auto">
        <div class="imgsetting d-block m-auto bg-warning">
          <i class="fa fa-id-card fa-3x text-white mt-4"></i>
        </div>

        <h2>Qualified Instructor</h2>
        <p>We have best instructor and trainer from various institutes and centre which have a lot of experience.</p>
      </div>

      <div class="col-sm-4">
        <div class="imgsetting d-block m-auto bg-warning">
          <i class="fa fa fa-hospital-o fa-3x text-white mt-4"></i>
        </div>

        <h2>Tons of Equipment</h2>
        <p>We have multiple types of fitness equipment which makes you feel the diversity in the club.</p>
      </div>

      <div class="col-sm-4">
        <div class="imgsetting d-block m-auto bg-warning">
          <i class="fa fa-bath fa-3x text-white mt-4"></i>
        </div>

        <h2>Ralaxation & Meditation</h2>
        <p>We give free tutorial of meditation to all our premium members who takes 1 year of subscription . </p>
      </div>
    </div>


  </div>



  <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
    <h4>Copyright ©2022 All rights reserved</h4>
    <p>Made by Fit-Flex Team located in Jalandhar, Punjab.</p>

  </div>

</body>

</html>