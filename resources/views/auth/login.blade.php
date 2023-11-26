<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/dist/css/adminx.css" media="screen" />
</head>

<body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
        <div class="page-login">
            <section class="aubna-blog-area section_50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <i class="bi bi-arrow-left-circle"></i>
                            <h1>Login</h1>                             
                            <hr style="border: 0.5px solid #F86D08;">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1"
                                    placeholder="email@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                    id="exampleDropdownFormPassword1" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <a href="/register">belum punya akun ?</a>
                                </div>
                                <button type="submit" class="btn btn-sm btn-block btn-primary">Sign in</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">
                            <a type="button" class="btn btn-outline-danger" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"></path>
                                </svg>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <div class="text-center">
                <a class="navbar-brand mb-4 h1" href="login.html">
                    <img src="{{ asset('admin') }}/demo/img/logo.png"
                        class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                    AdminX
                </a>
            </div>

            <div class="card mb-0"> --}}
                {{-- <div class="card-body">
            <a class="btn btn-labeled btn-block text-left btn-sm btn-facebook" href="#">
              <span class="btn-label">
                <i data-feather="facebook"></i>
              </span>
              Login with Facebook
            </a>
            <a class="btn btn-labeled btn-block text-left btn-sm btn-twitter" href="#">
              <span class="btn-label">
                <i data-feather="twitter"></i>
              </span>
              Login with Twitter
            </a>
          </div>
          <div class="card-seperator">
            <span>or</span>
          </div> --}}


                {{-- <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"
                                id="exampleDropdownFormPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-block btn-primary">Sign in</button>
                    </form>
                </div> --}}



                {{-- <div class="card-footer text-center">
            <a href="#"><small>Forgot your password?</small></a>
          </div> --}}
            {{-- </div> --}}
        </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/dist/js/vendor.js"></script>
    <script src="{{ asset('admin') }}/dist/js/adminx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->

</body>

</html>
