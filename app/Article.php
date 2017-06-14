<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['content','user_id','title','description','img','tag','published_at'];

    public function singleGetTags()
    {
        $tagArray = explode('-', $this->tag);
        $tem='';
        foreach ($tagArray as $value) {
            $tem.= '[' . Category::find($value)->description . ']';
        }
        return $tem;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
