<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast;
// use App\RelatedNews;
// use App\NewsTimeline;

class News extends Model
{
    
    //将新闻转换为短新闻
    public function getDescriptionAttribute($value)
    {
        return str_before( $value , "..." );
    }

    public function getCategoriesAttribute()
    {
        return "热门话题";
    }
    
    public function getContentAttribute($value)
    {
        
        return "<p>".str_replace("...","</p><p>",$value)."</p>";
    }
    
    public function getCreatedAtAttribute($value)
    {
        
        return Carbon::parse($value)->diffForHumans();
    }
        
    public function relatednews()
    {
        return $this->hasMany("App\RelatedNews",'articleid','articleid');
    }

    public function newstimelines()
    {
        return $this->hasMany("App\NewsTimelines",'articleid','articleid');
    }
}
