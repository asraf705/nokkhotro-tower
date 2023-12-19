<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Contact;


class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home',[
            'categories'=>Category::all(),
            'portfolios'=>Portfolio::all(),
            'testimonials'=>Testimonial::where('status',1)->get(),
            'teams'=>Team::where('status',1)->get(),
            'contacts'=>Contact::all(),
        ]);
    }

    public function portfolio(){
        return view('front-end.portfolio.portfolio',[
            'categories'=>Category::all(),
            'portfolios'=>Portfolio::all()
        ]);
    }

    public function singlePortfolio($title){
        return view('front-end.portfolio.single-portfolio',[
            'portfolio'=>Portfolio::where('title',$title)->first()
        ]);
    }

    public function categoryWisePortfolio($categoryId){
        return view('front-end.portfolio.category-wise-portfolio',[
            'categories'=>Category::all(),
            'portfolios'=>Portfolio::where('category_id',$categoryId)->get()
        ]);
    }
}
