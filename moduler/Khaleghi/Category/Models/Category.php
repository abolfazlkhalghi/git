<?php
namespace Khaleghi\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Khaleghi\Media\Models\Media;

class Category extends Model
{
    protected $guarded= [];

    public function getParentAttribute()
    {
        return (is_null($this->parent_id)) ? 'ندارند' : $this->parentCategory->title;
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function subCategories()
    {
        $this->hasMany(Category::class, 'parent_id');
    }
    // public function getThumbAttribute(){

    //     return '/storage/'.$this->banner->files[300];
    // }
    // public function banner(){

    //     return $this->belongsTo(Media::class,'banner_id');
    // }
}
