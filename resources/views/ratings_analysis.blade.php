@extends('layout.master')

@section('title')
    Report Analysis
@endsection

@section('content')
<link rel="stylesheet" href="{{asset('public/css/app.css')}}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- resources/views/ratings/analysis.blade.php -->

    <div class="container">
        <h2>Ratings Analysis</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Average Rating</div>
                    <div class="card-body">
                        <h3>{{ $averageRating }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ratings Distribution</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($ratingDistribution as $distribution)
                                <li class="list-group-item">
                                    {{ $distribution->star_rating }} Stars: {{ $distribution->count }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h3>Top Rated Products</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Average Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topRatedProducts as $product)
                        <tr>
                            <td>{{ $product->product_id }}</td>
                            <td>{{ $product->average_rating }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
        .rating-chart {
        margin-top: 20px;
    }

    .rating-bar {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .rating-value {
        width: 30px;
        font-weight: bold;
        margin-right: 10px;
    }

    .rating-bar-inner {
        height: 20px;
        background-color: #f1f1f1;
        border-radius: 4px;
    }

    .rating-count {
        margin-left: 10px;
        font-weight: bold;
    }

</style>
 
@endsection