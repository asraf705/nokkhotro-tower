<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static  $contact;

    public static function saveInfo($request){
        self::$contact = new Contact();
        self::$contact->location = $request->location;
        self::$contact->mail = $request->mail;
        self::$contact->call_1 = $request->call_1;
        self::$contact->call_2 = $request->call_2;
        self::$contact->save();
    }


    public static function updateInfo($request,$id){
        self::$contact = Contact::find($id);
        self::$contact->location = $request->location;
        self::$contact->mail = $request->mail;
        self::$contact->call_1 = $request->call_1;
        self::$contact->call_2 = $request->call_2;
      
        self::$contact->save();
    }

}
