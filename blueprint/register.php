
<?php 
include_once "partials/header.php";
include_once "partials/navbar.php";
session_start();
include_once "php/register.php";//register function
?>

<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
     
       </script>
       <?php 
       ?>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Lets code!! <br />
            <span class="text-primary">Project by Jenny</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            I designed this project with the sole purpose of tackling a bunch of common issues found when using PHP as a programming language. Get to learn with me by registering. <br> Check out my website protfilio:  <a href="https://jenipher-kuki.000webhostapp.com/" target="_blank" rel="noopener noreferrer">@Jenipher_website</a>. <br>Follow me on my github handle to get fast access to all my projects :  <a href="https://github.com/JENIPHER123" target="_blank" rel="noopener noreferrer">@Jenipher_github </a>.  
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <!-- registration form -->
              <form action="#" method="post">
              <div class="row">
                  <div class="col-md-12 mb-5">
                    <?php if($_SESSION['success']!=''):?>
                      <p style="background-color: rgba(0, 0, 0, 0.5);" class="text-light rounded p-4 fw-bold">Registration successful !!</p>
                    <?php $_SESSION['success']=''; endif;?>
                    <div class="h1 fw-bold text-center">REGISTER</div>
                  </div>
                 
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="first_name" type="text" id="form3Example1" class="form-control" />
                      <label  class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text"name="last_name" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control"name="email" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control"name="password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to my newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit"name="submit" class="btn btn-primary btn-block mb-4 form-control">
                  Sign up
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Already have an account? <a href="login.php">login here!!</a></p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
              <!-- registration form ! -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?php include_once "partials/footer.php"?>