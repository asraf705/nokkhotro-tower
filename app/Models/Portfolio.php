<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;
    
    private static $portfolio,$slug,$image1,$image2,$image3,$imageNewName,$dir,$imgUrl;

    public static function saveInfo($request){
        self::$portfolio = new Portfolio();
        self::$portfolio->category_id = $request->category_id;
        self::$portfolio->address = $request->address;
        self::$portfolio->title =  self::makeSlug($request);    //$request->title;
        self::$portfolio->description = $request->description;
        self::$portfolio->image_1 = self::makeImgUrl1($request);
        self::$portfolio->image_2 = self::makeImgUrl2($request);
        self::$portfolio->image_3 = self::makeImgUrl3($request);
        self::$portfolio->save();

    }


    private static function makeSlug($request){
        if ($request->title){
            self::$slug = Str::slug($request->title);
        }
        return self::$slug;
    }


    private static function makeImgUrl1($request){
        self::$image1 = $request->file('image_1');
        self::$imageNewName = rand().'.'.self::$image1->extension();
        self::$dir = 'back-end-assets/portfolio-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image1->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }

    private static function makeImgUrl2($request){
        self::$image2 = $request->file('image_2');
        self::$imageNewName = rand().'.'.self::$image2->extension();
        self::$dir = 'back-end-assets/portfolio-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image2->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }

    private static function makeImgUrl3($request){
        self::$image3 = $request->file('image_3');
        self::$imageNewName = rand().'.'.self::$image3->extension();
        self::$dir = 'back-end-assets/portfolio-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image3->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;

    }

    public static function updateInfo($request,$id){
        self::$portfolio = Portfolio::find($id);
        self::$portfolio->category_id = $request->category_id;
        self::$portfolio->address = $request->address;
        self::$portfolio->title = $request->title;
        self::$portfolio->description = $request->description;
        if($request->file('image_1')){
            if(self::$portfolio->image_1){
                if (file_exists(self::$portfolio->image_1)){
                    unlink(self::$portfolio->image_1);

                }
            }
            self::$portfolio->image_1 = self::makeImgUrl1($request);
        }
        if($request->file('image_2')){
            if(self::$portfolio->image_2){
                if (file_exists(self::$portfolio->image_2)){
                    unlink(self::$portfolio->image_2);

                }
            }
            self::$portfolio->image_2 = self::makeImgUrl2($request);
        }
        if($request->file('image_3')){
            if(self::$portfolio->image_3){
                if (file_exists(self::$portfolio->image_3)){
                    unlink(self::$portfolio->image_3);

                }
            }
            self::$portfolio->image_3 = self::makeImgUrl3($request);
        }

        self::$portfolio->save();
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
