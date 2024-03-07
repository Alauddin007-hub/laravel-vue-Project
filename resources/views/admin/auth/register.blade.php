<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PSM-Pos</title>

  <!--plugins-->
  <link href="{{asset('')}}backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="{{asset('')}}backend/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
  <link href="{{asset('')}}backend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
  <!--Styles-->
  <link href="{{asset('')}}backend/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('')}}backend/assets/css/icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="{{asset('')}}backend/assets/css/main.css" rel="stylesheet">
  <link href="{{asset('')}}backend/assets/css/dark-theme.css" rel="stylesheet">

</head>

<body>


  <!--authentication-->

  <div class="mx-3 mx-lg-0">

  <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-3">
    <div class="row g-3">
      <div class="col-lg-6 d-flex">
        <div class="card-body p-5 w-100">
          <img src="{{asset('')}}backend/assets/images/logo-icon.png" class="mb-4" width="45" alt="">
          <h4 class="fw-bold">Get Started Now</h4>
          <p class="mb-0">Enter your credentials to login your account</p>
          <div class="row g-3 my-4">
            <div class="col-12 col-lg-12">
              <button
                class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                  src="{{asset('')}}backend/assets/images/icons/google-2.png" width="18" class="me-2" alt="">Log In with Google</button>
            </div>
            <div class="col col-lg-12">
              <button
                class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img
                  src="{{asset('')}}backend/assets/images/icons/apple-logo.png" width="18" class="me-2" alt="">Log In with Apple</button>
            </div>
          </div>
          <div class="separator">
            <div class="line"></div>
            <p class="mb-0 fw-bold">OR</p>
            <div class="line"></div>
          </div>
          <div class="form-body mt-4">
            <form class="row g-3" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
              <div class="col-12">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" id="inputUsername" placeholder="Enter your username">
              </div>
              
              <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
              </div>

              <div class="col-12">
                <label for="inputChoosePassword" class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                  <input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> 
                  <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                </div>
              </div>

              <div class="col-12">
                <label for="inputConfirmPassword" class="form-label">Comfirm Password</label>
                <div class="input-group" id="show_hide_password">
                  <input type="password" name="password_confirmation" class="form-control border-end-0" id="inputConfirmPassword" placeholder="Enter Password"> 
                  <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                </div>
              </div>

              <div class="col-12">
                <label for="inputSelectCountry" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" id="inputConfirmPassword" id="inputSelectCountry">
                
              </div>

              <div class="col-12">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                  <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </div>
              <div class="col-12">
                <div class="text-start">
                  <p class="mb-0">Already have an account? <a href="auth-boxed-login.html">Sign in here</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex d-none">
        <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
          <img src="{{asset('')}}backend/assets/images/boxed-register.png" class="img-fluid rounded-4" alt="">
        </div>
        
      </div>
    </div><!--end row-->
  </div>

</div>

<!--authentication-->




  <!--plugins-->
  <script src="{{asset('')}}backend/assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>