<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['area', 'city', 'brand', 'model', 'volume', 'owners', 'mileage', 'year', 'image', 'price'];
    public function author()
    {
        return $this->hasOne(User::class);
    }

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->user_id = Auth::user()->id;
        Auth::user()->addPost();
        $post->save();

        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
    
    public function remove()
    {
        if($image != null)
        {
            Storage::delete( 'uploads/' . $this->image );
        }
        $this->delete();
    }

    public function uploadImage($image)
    {
        if($image == null)
        {
            return;
        }
        if($image != null)
        {
            Storage::delete( 'uploads/' . $this->image );
        }
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }
    
    public function getImage()
    {
        if($this->image == null)
        {
            return 'img/no-image.png';
        }
        return 'uploads/' . $this->image;
    }
}
