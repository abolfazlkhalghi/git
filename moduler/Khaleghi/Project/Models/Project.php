<?php

namespace Khaleghi\Project\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    const TYPE_Completed ="completed";
    const TYPE_NotCompleted ="notcompleted";
    const TYPE_Lockd ="lockd";
    static $status =[self::TYPE_Completed,self::TYPE_NotCompleted,self::TYPE_Lockd];
}
