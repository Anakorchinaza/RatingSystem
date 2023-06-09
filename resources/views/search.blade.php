@extends('layout.master')

@section('title')
    search
@endsection

@section('content')

   <div class="container">
        <div class="row">
            <div class="row">
                <div>
                    <form action="{{ route('view_rating') }}" method="GET">
                        <div>
                            <label for="keywords">Keywords:</label>
                            <input type="text" name="keywords" id="keywords" value="{{ request()->input('keywords') }}">
                        </div>
                        <div>
                            <label for="rating">Rating:</label>
                            <select name="rating" id="rating">
                                <option value="">All Ratings</option>
                                <option value="1" {{ request()->input('rating') == '1' ? 'selected' : '' }}>1 Star</option>
                                <option value="2" {{ request()->input('rating') == '2' ? 'selected' : '' }}>2 Stars</option>
                                <option value="3" {{ request()->input('rating') == '3' ? 'selected' : '' }}>3 Stars</option>
                                <option value="4" {{ request()->input('rating') == '4' ? 'selected' : '' }}>4 Stars</option>
                                <option value="5" {{ request()->input('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                            </select>
                        </div>
                        <div>
                            <label for="sort_by">Sort By:</label>
                            <select name="sort_by" id="sort_by">
                                <option value="created_at" {{ request()->input('sort_by') == 'created_at' ? 'selected' : '' }}>Date</option>
                                <option value="star_rating" {{ request()->input('sort_by') == 'star_rating' ? 'selected' : '' }}>Rating</option>
                            </select>
                        </div>
                        <div>
                            <label for="sort_order">Sort Order:</label>
                            <select name="sort_order" id="sort_order">
                                <option value="asc" {{ request()->input('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                                <option value="desc" {{ request()->input('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                            </select>
                        </div>
                        <button type="submit">Search</button>
                    </form>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Comments</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ratings as $rating)
                            <tr>
                                <td>{{ $rating->id }}</td>
                                <td>{{ $rating->product->name }}</td>
                                <td>{{ $rating->comments }}</td>
                                <td>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $rating->star_rating)
                                            <span class="star">&#9733;</span>
                                        @else
                                            <span class="star">&#9734;</span>
                                        @endif
                                    @endfor
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{ $ratings->appends(request()->input())->links() }}
                
            </div>
        </div>
   </div>

@endsection