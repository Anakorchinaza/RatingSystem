<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\review;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;
use Carbon\Carbon;


class ReviewController extends Controller
{
    
    public function SubmitRating(Request $request, FlasherInterface $flasher){
        
        $user_id = $request->user_id;
        $rating_data = $request->rating_data;
        $poduct_id = $request->poduct_id;
        $review_text = $request->review_text;

        review::insert([
            'user_id' => $user_id,
            'product_id' => $poduct_id,
            'comments' => $review_text,
            'star_rating' =>  $rating_data,
            'created_at' => Carbon::now(),
            
        ]);

        return('Rating successfully!');
  

    }//End Method

    public function ViewRating(Request $request){

        $keywords = $request->input('keywords');
        $rating = $request->input('rating');
        $sortBy = $request->input('sort_by', 'created_at'); // Default sorting by date
        $sortOrder = $request->input('sort_order', 'desc'); // Default sorting order

        $query = Product::query();

        $all_rating = review::simplePaginate(10);
        $ratings = review::simplePaginate(10); // Retrieve 10 ratings per page
        $reviews = review::with('user', 'product')->orderBy($sortBy, $sortOrder)->simplePaginate(10);


        if (!empty($keywords)) {
            $query->where('name', 'like', '%' . $keywords . '%');
        }

        if (!empty($rating)) {
            $query->whereHas('ratings', function ($q) use ($rating) {
                $q->where('star_rating', $rating);
            });
        }

        $products = $query;

        return view('view_rating', compact('all_rating', 'ratings', 'reviews', 'products'));
    }//end method


    // public function ViewRating(Request $request)
    // {
    //     $keywords = $request->input('keywords');
    //     $rating = $request->input('rating');
    //     $sortBy = $request->input('sort_by', 'created_at');
    //     $sortOrder = $request->input('sort_order', 'desc');
    
    //     $query = Review::with('user', 'product')->orderBy($sortBy, $sortOrder);
    
    //     if (!empty($keywords)) {
    //         $query->whereHas('product', function ($q) use ($keywords) {
    //             $q->where('name', 'like', '%' . $keywords . '%');
    //         });
    //     }
    
    //     if (!empty($rating)) {
    //         $query->where('star_rating', $rating);
    //     }
    
    //     $reviews = $query->simplePaginate(10);
    
    //     return view('view_rating', compact('reviews'));
    // }

    public function ratingsAnalysis(){
        $averageRating = review::avg('star_rating');
        
        $ratingDistribution = review::select('star_rating', review::raw('count(*) as count'))
            ->groupBy('star_rating')
            ->orderBy('star_rating')
            ->get();
        
        $topRatedProducts = review::select('product_id', review::raw('avg(star_rating) as average_rating'))
            ->groupBy('product_id')
            ->orderByDesc('average_rating')
            ->take(5)
            ->get();
        
        return view('ratings_analysis', compact('averageRating', 'ratingDistribution', 'topRatedProducts'));
    }//end method


 

    public function analysis(){
        // Count the number of ratings for each star rating
        $ratingDistribution = review::select('star_rating', DB::raw('COUNT(*) as count'))
            ->groupBy('star_rating')
            ->pluck('count', 'star_rating')
            ->toArray();

        // Fill in missing star ratings with count 0
        $ratingDistribution = array_merge(array_fill(1, 5, 0), $ratingDistribution);

        return view('analysis', compact('ratingDistribution'));
    }//end method

    
    








}
