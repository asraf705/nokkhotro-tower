<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $portfolio;
    public function index()
    {
        return view('admin.portfolio.manage-portfolio',[
            'portfolios'=> Portfolio::all(),
            

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.portfolio.add-portfolio',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Portfolio::saveInfo($request);
        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$portfolio =Portfolio::find($id);
        if (self::$portfolio->status == 1){
            self::$portfolio->status = 0;
        }
        else{
            self::$portfolio->status = 1;
        }
        self::$portfolio->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.portfolio.edit-portfolio',[
            'portfolios'=>Portfolio::find($id),
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Portfolio::updateInfo($request,$id);
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$portfolio = Portfolio::find($id);
       if(self::$portfolio->image_1){
           if(file_exists(self::$portfolio->image_1)){
               unlink(self::$portfolio->image_1);
           }
       }

       elseif (self::$portfolio->image_2){
            if(file_exists(self::$portfolio->image_2)){
                unlink(self::$portfolio->image_2);
            }
        }
        
       elseif (self::$portfolio->image_3){
            if(file_exists(self::$portfolio->image_3)){
                unlink(self::$portfolio->image_3);
            }
        }

       self::$portfolio->delete();
       return back();
    }
}