<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:55:18 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/plugin.min.css')}}">
    {{-- {{asset('assets/')}} --}}
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
                            
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Sign Up Rating System</h6>
                                    </div>
                                </div>
                                
                                <form action="{{route('create')}}" method="post">
                                @csrf
                                    <div class="card-body">
                                        <div class="edit-profile__body">
                                            <div class="edit-profile__body">
                                                <div class="form-group mb-20">
                                                    <label for="name">name</label>
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Full Name">
                                                    <strong style="color: rgb(232, 7, 7)">{{  $errors->first('name')}}</strong>
                                                </div>
                                                
                                                <div class="form-group mb-20">
                                                    <label for="email">Email Adress</label>
                                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                                        placeholder="name@example.com" value="{{ old('email') }}">
                                                    <strong style="color: rgb(232, 7, 7)">{{  $errors->first('email')}}</strong>
                                                </div>

                                                <div class="form-group mb-15">
                                                    <label for="password-field">password</label>
                                                    <div class="position-relative">
                                                        <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password" value="{{ old('password') }}">
                                                        <div
                                                            class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                        </div>
                                                        <strong style="color: rgb(232, 7, 7)">{{  $errors->first('password')}}</strong>
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                        Create Account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                               
                                <div class="admin-topbar">
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="{{route('login')}}" class="color-primary">
                                            Sign In
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

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:55:18 GMT -->

</html>
