<?php include('header.php') ?> <!-- Include header file for common header elements -->
  <section class="bg-light vh-100 d-flex"> <!-- Full-height section with light background -->
    <div class="col-3 m-auto"> <!-- Centered column for login form -->
      <div class="card"> <!-- Card container for login form -->
        <div class="card-body"> <!-- Card body for form elements -->
          <div class="border rounded-circle mx-auto d-flex " style="width:100px;height:100px" ><i class="fa fa-user text-light fa-3x m-auto"></i></div> <!-- User icon -->
          <form action="actions/login.php" method="POST"> <!-- Form submission to login action -->
            <!-- Material input -->
                <div class="md-form">
                  <input type="text" id="email" name="email" class="form-control"> <!-- Input for email -->
                  <label for="email">Your Email</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                  <input type="password" id="password" name="password" class="form-control"> <!-- Input for password -->
                  <label for="password">Your Password</label>
                </div>
            <div class="text-center">
              <button class="btn btn-secondary" name="login">Login</button> <!-- Login button -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php include('footer.php') ?> <!-- Include footer file for common footer elements -->
