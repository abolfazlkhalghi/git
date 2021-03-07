<?php

namespace Khaleghi\Project\Models;

use Illuminate\Database\Eloquent\Model;
use Khaleghi\Media\Models\Media;
use Khaleghi\User\Models\User;

class Project extends Model
{
    protected $guarded = [];
    const TYPE_Completed = "completed";
    const TYPE_NotCompleted = "notcompleted";
    const TYPE_Lockd = "lockd";
    static $statuses = [self::TYPE_Completed, self::TYPE_NotCompleted, self::TYPE_Lockd];
    


    public function banner(){
        return $this->belongsTo(Media::class,'banner_id');
    }
    public function auther(){
        return $this->belongsTo(User::class,'auther_id');
    }
    public function findByid($id){
        return Project::findOrFail($id);
    }
}
