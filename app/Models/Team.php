<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public static  $team,$image,$imageNewName,$dir,$imgUrl;

    public static  function saveInfo($request){
        self::$team = new Team();
        self::$team->name = $request->name;
        self::$team->designation = $request->designation;
        self::$team->description = $request->description;
        self::$team->fb_link = $request->fb_link;
        self::$team->lidin_link = $request->lidin_link;
        if($request->file('image')){
            self::$team->image = self::saveImage($request);
        }
        self::$team->save();
    }

    public static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/team-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateInfo($request,$id){
        self::$team = Team::find($id);
        self::$team->name = $request->name;
        self::$team->designation = $request->designation;
        self::$team->description = $request->description;
        self::$team->fb_link = $request->fb_link;
        self::$team->lidin_link = $request->lidin_link;
        if($request->file('image')){
            if (self::$team->image){
                if (file_exists(self::$team->image)){
                    unlink(self::$team->image);
                }
            }
            self::$team->image = self::saveImage($request);
        }
        self::$team->save();
    }




}
