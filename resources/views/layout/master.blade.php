<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/demo10.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:53:00 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/../../../unicons.iconscout.com/release/v4.0.0/css/line.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    
        form {
            margin-bottom: 20px;
        }
    
        label {
            display: inline-block;
            margin-bottom: 5px;
        }
    
        input[type="text"],
        select {
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
            width: 200px;
        }
    
        button[type="submit"] {
            padding: 5px 10px;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
    
        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }
    
        .star {
            color: orange;
        }
    
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
    
        .pagination li {
            margin: 0 5px;
        }
    
        .pagination .active a {
            font-weight: bold;
        }
        
    </style>
    
    

</head>

<body class="layout-light side-menu">

    <div class="mobile-author-actions"></div>
       
    @include('include.header')
  

    <main class="main-content">
       @include('include.sidebar')
       
       <div class="contents">
            <div class="crm mb-25">
                @yield('content')
            </div>
       </div>

        @include('include.footer')

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
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper">

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">SUBMIT RATING</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" >
                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                      
                           <input type="hidden" id="user_id">
                           <input type="hidden" id="product_id">
                            <div class="card-body">
                                <div class="edit-profile__body">
                                    <div class="edit-profile__body">

                                        <div class="form-group mb-20">
                                            <label for="name">Review</label>
                                          
                                            <h4 class="text-center mt-2 mb-4">
                                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                                            </h4>
                                               
                                        </div>

                                        <div class="form-group mb-20">
                                            <label for="email">Type Review</label>
                                            <input type="text" name="review" class="form-control @error('review') is-invalid @enderror" id="review_text"
                                             value="{{ old('review') }}">
                                            <strong style="color: rgb(232, 7, 7)">{{  $errors->first('review')}}</strong>
                                        </div>
                                                          
                                        <div
                                            class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                            <button  id="save_review"
                                                class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
               
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

    <script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        $(document).on('click', '#therate', function(event){
            event.preventDefault();
            
            var id = $(this).data('id');
            var user_id = $(this).data('user_id');
            

            $('#product_id').val(id);
            $('#user_id').val(user_id);
            
            
        });
    </script>

    <script>
        var rating_data = 0;

        $('#add_review').click(function(){

            $('#review_modal').modal('show');

        });

        $(document).on('mouseenter', '.submit_star', function(){

            var rating = $(this).data('rating');

            reset_background();

            for(var count = 1; count <= rating; count++)
            {

                $('#submit_star_'+count).addClass('text-warning');

            }

        });

        function reset_background()
        {
            for(var count = 1; count <= 5; count++)
            {

                $('#submit_star_'+count).addClass('star-light');

                $('#submit_star_'+count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function(){

            reset_background();

            for(var count = 1; count <= rating_data; count++)
            {

                $('#submit_star_'+count).removeClass('star-light');

                $('#submit_star_'+count).addClass('text-warning');
            }

        });

        $(document).on('click', '.submit_star', function(){

            rating_data = $(this).data('rating');

        });

        $('#save_review').click(function(e){

            e.preventDefault();

            
            

            var poduct_id = $('#product_id').val();
            var user_id = $('#user_id').val();
            var review_text = $('#review_text').val();
            

            console.log(review_text);
            console.log(poduct_id);
            console.log(user_id);
            console.log(rating_data);


            if(review_text == '')
            {
                alert("Please Fill Both Field");
                return false;
            }
            else
            {
                $.ajax({
                    url:"/submit_rating",
                    method:"POST",
                    data:{
                        rating_data:rating_data, 
                        _token: $("#csrf").val(),
                        poduct_id:poduct_id, 
                        user_id:user_id, 
                        review_text:review_text
                    },
                    success:function(data)
                    {
                        $('#review_modal').modal('hide');

                        // load_rating_data();

                        // alert(data);

                        alert(data);
                        location.reload();

                       


                    }
                })
            }

        });

    </script>

</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/demo10.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 08:53:01 GMT -->

</html>
