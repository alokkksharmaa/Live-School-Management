  <?php include('includes/config.php') ?> <!-- Include configuration file for database connection and settings -->
  <?php include('header.php') ?> <!-- Include header file for common header elements -->

  <!--Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark default-color"> <!-- Start of navigation bar -->
    <a class="navbar-brand" href="#"><b>SMS</b></a> <!-- Brand name -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <!-- Toggler icon for mobile view -->
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333"> <!-- Collapsible content -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span> <!-- Current page indicator -->
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a> <!-- Link to About Us page -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a> <!-- Link to Courses page -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a> <!-- Link to Events page -->
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        
        <li class="nav-item dropdown">
          <?php if (isset($_SESSION['login'])) { ?> <!-- Check if user is logged in -->
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user mr-2"></i>Account <!-- User account icon -->
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="/sms-project/admin/dashboard.php">Dashboard</a> <!-- Link to Dashboard -->
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="logout.php">Logout</a> <!-- Logout link -->
          </div>
          <?php } else { ?> <!-- If user is not logged in -->
          <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>User login</a> <!-- Login link -->
          <?php } ?>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div class="py-5 shadow" style="background:linear-gradient(-45deg, #3923a7 50%, transparent 50%)"> <!-- Hero section with gradient background -->
    <div class="container-fluid my-2">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-3 font-weight-bold">Addmission Open for 2021-2022</h1> <!-- Admission announcement -->
          <p class="py-lg-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aperiam similique error, <br> iste molestiae dignissimos odit voluptat</p> <!-- Placeholder text -->
          <a href="" class="btn btn-lg btn-primary">Call to Action</a> <!-- Call to action button -->
        </div>
        <div class="col-lg-6">
          <div class="col-lg-8 mx-auto card shadow-lg">
            <div class="card-body py-5">
              <h3>Inquiry Form</h3> <!-- Inquiry form heading -->
              <form action="" method="post" class=""> <!-- Start of inquiry form -->
                <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="form1" class="form-control"> <!-- Input for name -->
                  <label for="form1">Your Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="email" id="email" class="form-control"> <!-- Input for email -->
                  <label for="email">Your Email</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="mobile" class="form-control"> <!-- Input for mobile number -->
                  <label for="mobile">Your Mobile</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <!-- <input type="text" id="class" class="form-control"> -->
                  <textarea name="" id="message" class="form-control md-textarea" rows="3"></textarea> <!-- Textarea for query message -->
                  <label for="message">Your Query</label>
                </div>

                <button class="btn btn-primary btn-block">Submit Form</button> <!-- Submit button for form -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- About us -->
  <section class="py-5"> <!-- About us section -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-5 ">
          <h2 class="font-weight-bold">About <br>  School Management System</h2> <!-- About us heading -->
          <div class="pr-5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis voluptates maiores consectetur, sunt nisi? Commodi.</p> <!-- Placeholder text -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam dolore magni laudantium?</p> <!-- Placeholder text -->
          </div>
          <a href="about-us.php" class="btn btn-secondary">Know More</a> <!-- Link to more about us -->
        </div>
        <div class="col-lg-6" style="background:url(./assets/images/still-life-851328_1280.jpg)"> <!-- Background image for about us -->
        </div>
      </div>
    </div>
  </section>
  <style>
  .course-image
  {
    width:100%;
    height: 170px !important;
    object-fit: cover;
    object-position: center;
  }
  </style>   
  <!-- Our Courses -->
  <section class="py-5 bg-light"> <!-- Courses section -->
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Courses</h2> <!-- Courses heading -->
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p> <!-- Placeholder text -->
    </div>

    <div class="container">
      <div class="row">
            
        <?php 
        $query = mysqli_query($db_conn,"SELECT * FROM courses ORDER BY id DESC LIMIT 0, 8"); <!-- Query to fetch courses from database -->
        while($course = mysqli_fetch_object($query))
        {?>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <div>
              <img src="./dist/uploads/<?php echo $course->image?>" alt="" class="img-fluid rounded-top course-image"> <!-- Course image -->
            </div>
            <div class="card-body">
              <b><?php echo $course->name?></b> <!-- Course name -->
              <p class="card-text">
                <b>Duration: </b> <?php echo $course->duration?> <br> <!-- Course duration -->
                <b>Price: </b> 4000/- Rs <!-- Course price -->
              </p>
              <button class="btn btn-block btn-primary btn-sm">Enroll Now</button> <!-- Enroll button -->
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Teachers -->
  <section class="py-5"> <!-- Teachers section -->
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Teachers</h2> <!-- Teachers heading -->
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p> <!-- Placeholder text -->
    </div>

    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < 6; $i++){ ?> <!-- Loop to display teacher cards -->
        <div class="col-lg-4 my-5">
          <div class="card">
            <div class="col-5 position-absolute" style="top:-50px">
              <img src="./assets/images/placeholder.jpg" alt="" class="mw-100 border rounded-circle"> <!-- Placeholder image for teacher -->
            </div>
            <div class="card-body pt-5 mt-4">
              <h5 class="card-title mb-0">Teacher's Name</h5> <!-- Teacher's name -->
              <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></p> <!-- Star ratings -->
              <p class="card-text">
                <b>Courses: </b> 5 <br> <!-- Number of courses taught -->
                <b>Ratings: </b> <!-- Placeholder for ratings -->
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Achievements -->
  <section class="py-5 text-white"  style="background:#3923a7"> <!-- Achievements section with background color -->
    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pr-5">
            <h2>Achievements</h2> <!-- Achievements heading -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, commodi laboriosam. Ullam aliquam dicta officiis accusamus.</p> <!-- Placeholder text -->

            <img src="./assets/images/still-life-851328_1280.jpg" alt="" class="img-fluid rounded"> <!-- Image for achievements -->
          </div>
          <div class="col-lg-6 my-auto">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span> <!-- Graduation cap icon -->
                    <h2 class="my-2 font-weight-bold h1">334</h2> <!-- Number of graduates -->
                    <hr class="border-warning">
                    <h4>Graduates</h4> <!-- Graduates label -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span> <!-- Graduation cap icon -->
                    <h2 class="my-2 font-weight-bold h1">334</h2> <!-- Number of graduates -->
                    <hr class="border-warning">
                    <h4>Graduates</h4> <!-- Graduates label -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span> <!-- Graduation cap icon -->
                    <h2 class="my-2 font-weight-bold h1">334</h2> <!-- Number of graduates -->
                    <hr class="border-warning">
                    <h4>Graduates</h4> <!-- Graduates label -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span> <!-- Graduation cap icon -->
                    <h2 class="my-2 font-weight-bold h1">334</h2> <!-- Number of graduates -->
                    <hr class="border-warning">
                    <h4>Graduates</h4> <!-- Graduates label -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonials -->
  <section class="py-5"> <!-- Testimonials section -->
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">What People Say</h2> <!-- Testimonials heading -->
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p> <!-- Placeholder text -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias. <!-- Placeholder text for testimonial -->
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i> <!-- Quote icon -->
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/placeholder.jpg" alt="" class="rounded-circle border" width="100" height="100"> <!-- Placeholder image for testimonial author -->
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6> <!-- Name of testimonial author -->
            <p><i>Designation</i></p> <!-- Designation of testimonial author -->
          </div>
        </div>
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias. <!-- Placeholder text for testimonial -->
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i> <!-- Quote icon -->
          </div>
          <div class="text-center mt-n2">
            <img src="./assets/images/placeholder.jpg" alt="" class="rounded-circle border" width="100" height="100"> <!-- Placeholder image for testimonial author -->
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6> <!-- Name of testimonial author -->
            <p><i>Designation</i></p> <!-- Designation of testimonial author -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer style="background:url(./assets/images/still-life-851328_1280.jpg) center/cover no-repeat"> <!-- Footer section with background image -->
    <div  class="py-5 text-white" style="background:#000000bb"> 
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <h5>Useful Links</h5> <!-- Useful links heading -->

              <ul class="fa-ul ml-4">
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li> <!-- Link to Home -->
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li> <!-- Link to About Us -->
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Courses</a></li> <!-- Link to Courses -->
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a></li> <!-- Link to Terms & Conditions -->
                <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Privacy Policy</a></li> <!-- Link to Privacy Policy -->
              </ul>
            </div>
            <div class="col-lg-4">
              <h5>Social Presence</h5> <!-- Social presence heading -->

              <div>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i> <!-- Facebook icon -->
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i> <!-- Instagram icon -->
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i> <!-- Twitter icon -->
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i> <!-- LinkedIn icon -->
                </span>
                <span class="fa-stack">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i> <!-- YouTube icon -->
                </span>
              </div>
            </div>
            <div class="col-lg-3">
              <h5>Subscribe Now</h5> <!-- Subscribe now heading -->
              <form action="">
                <!-- Material input -->
                <div class="form-group">
                  <input type="email" id="email-s" class="form-control" placeholder="Your Email"> <!-- Input for email subscription -->
                </div>
                <button class="btn btn-secondary py-2 btn-block">Submit</button> <!-- Submit button for subscription -->
              </form>
            </div>
          </div>
      </div>
    </div>
  </footer>

  <section class="py-2 bg-dark text-light"> <!-- Copyright section -->
    <div class="container-fluid">
      Copyright 2020-2020 All Rights Reserved. <a href="#" class="text-light">School Management System</a> <!-- Copyright notice -->
    </div>
  </section>
  
  <?php include('footer.php') ?> <!-- Include footer file for common footer elements -->