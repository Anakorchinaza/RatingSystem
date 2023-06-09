@extends('layout.master')

@section('title')
    DashBoard
@endsection

@section('content')

    @php
    $products = App\Models\product::latest()->get();
    @endphp

   
    <div class="demo5 mt-30 mb-25">
            <div class="container-fluid">
                <div class="row">

                @foreach ($products as $items)
                        <div class="col-xxl-4 col-lg-4 mb-25">
                            <div class="blog-card">
                                <div class="blog-card__thumbnail">
                                    <a href="#">
                                        <img src="{{$items->image}}" alt="">
                                    </a>
                                </div>
                                <div class="blog-card__details">
                                    <div class="blog-card__content">
                                        {{-- <div class="blog-card__title--top">15 March 2021</div> --}}
                                        <h4 class="blog-card__title">
                                            <a href="#" class="entry-title" rel="bookmark">{{$items->name}}</a>
                                        </h4>
                                        <p>{{$items->description}}</p>
                                    </div>
                                    <div class="blog-card__meta">
                                        <div class="blog-card__meta-profile">
                                            {{-- <img src="img/alex-suprun.png" alt=""> --}}
                                            <span><strong>Price:</strong> #{{$items->price}}</span>
                                        </div>
                                        <div class="blog-card__meta-count">
                                            <button id="therate" class="btn btn-info btn-sm" data-bs-toggle="modal" 
                                            data-bs-target="#exampleModal"
                                            data-id = "<?php echo $items->id ?>"
                                            
                                            data-user_id ="<?php echo Auth::user()->id ?>"
                                            >Rate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

                    
                </div>

            </div>
        </div>
    </div>


@endsection
