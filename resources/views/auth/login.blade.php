<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:55:16 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/../../../unicons.iconscout.com/release/v3.0.0/css/line.css')}}">
</head>

<body>
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="index.html">
                                    <img class="dark" src="img/logo-dark.png" alt="">
                                    <img class="light" src="img/logo-white.png" alt="">
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Sign in Rating System</h6>
                                    </div>
                                </div>
                               <form action="{{route('signin')}}" method="POST">
                                @csrf
                                    <div class="card-body">
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-25">
                                                <label for="username">Email Address</label>
                                                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                                    placeholder="name@example.com">
                                                <strong style="color: rgb(244, 17, 17)">{{  $errors->first('email')}}</strong>
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">Password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control  @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password" value="{{ old('password') }}">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                    <strong style="color: rgb(244, 17, 17)">{{  $errors->first('password')}}</strong>
                                                </div>
                                            </div>
                                            {{-- <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-1">
                                                    <label for="check-1">
                                                        <span class="checkbox-text">Keep me logged in</span>
                                                    </label>
                                                </div>
                                                <a href="forget-password.html">forget password?</a>
                                            </div> --}}
                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    sign in
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                               </form>
                                <div class="px-20">
                                    <p class="social-connector social-connector__admin text-center">
                                        <span>Or</span>
                                    </p>
                                    
                                </div>
                                <div class="admin-topbar">
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="{{route('register')}}" class="color-primary">
                                            Sign up
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    

    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/script.min.js')}}"></script>

</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:55:18 GMT -->

</html>
