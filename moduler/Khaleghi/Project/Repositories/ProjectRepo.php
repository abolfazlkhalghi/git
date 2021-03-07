<?php

namespace Khaleghi\Project\Repositories;

use Khaleghi\Category\Models\Category;
use Khaleghi\Project\Models\Project;
use Str;

class ProjectRepo
{

    public function store($values)
    {
        return Project::create
        ([
            "catyegory_id"=>$values->category_id,
            "banner_id"=>$values->banener_id,
            "auther_id"=>auth()->id(),
            "name" => $values->name,
            "percent"=>$values->percent,
            "AstanQuds"=>$values->AstanQuds,
            "slug" => $values->slug,
            "price" => $values->price,
            "status"=> $values->status,
            "Participant" => $values->Participant,
            "body" => $values->body,      

        ]);
    }
    public function paginate(){
        return Project::paginate();
    }
    public function findByid($id){
        return Project::findOrFail($id);
    }
    public function update($id,$values){
        return Project::where('id',$id)->update([
            "catyegory_id"=>$values->category_id,
            "banner_id"=>$values->banener_id,
            "auther_id"=>auth()->id(),
            "name" => $values->name,
            "percent"=>$values->percent,
            "AstanQuds"=>$values->AstanQuds,
            "slug" => $values->slug,
            "price" => $values->price,
            "status"=> $values->status,
            "Participant" => $values->Participant,
            "body" => $values->body,                  
        ]);
    }
}
