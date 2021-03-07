<?php
namespace Khaleghi\Project\Http\Controllers;

use Illuminate\Http\Request;
use Khaleghi\Media\Services;
use App\Http\Controllers\Controller;;
use Cyaxaress\Common\Responses\AjaxResponses;
use Khaleghi\Project\Models\Project;
use Khaleghi\Category\Models\Category;
use Khaleghi\User\Repositories\UserRepo;
use Khaleghi\Media\Services\MediaFileService;
use Khaleghi\Project\Repositories\ProjectRepo;
use Khaleghi\Category\Repositories\CategoryRepo;
use Khaleghi\Project\Http\Requests\ProjectRequest;
use Khaleghi\User\Models\User;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectRepo $projectRepo)
    {
        //
        //auther=User::get(name=auther_id==id;);
        $projects=$projectRepo->paginate();
        return view('project::index',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UserRepo $userRepo, CategoryRepo $categoriesRepo)
    {
        //
        $authers = $userRepo->getauther();
        $statuses = Project::$statuses;
        $categories =  Category::all();
        
        return view('project::create', compact('authers', 'statuses', 'categories'));
    }

    public function store(Request $Request, ProjectRepo $projectRepo)
    {
        $Request->request->add(['banener_id'=>MediaFileService::upload($Request->file('image'))->id]);
        $projectRepo->store($Request);
       
      return redirect()->route('project.index');
    }

    public function show($id)
    {
        //
    }
    public function edit($id,ProjectRepo $projectRepo,UserRepo $userRepo, CategoryRepo $categoriesRepo)
    {
        $project=$projectRepo->findByid($id);
        $authers = $userRepo->getauther();
        $categories  =  Category::all();
        return view('project::edit',compact('project','authers','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,ProjectRepo $projectRepo)
    {
        // $project = $projectRepo->findByid($id);
        // $this->authorize('edit', $project);
        // if ($request->hasFile('image')) {
        //     $request->request->add(['banner_id' => MediaFileService::upload($request->file('image'))->id ]);
        //     if ($project->banner)
        //         $project->banner->delete();
        // }else{
        //     $request->request->add(['banner_id' => $project->banner_id]);
        // }
        // $projectRepo->update($id, $request);
        // return redirect(route('project.index'));

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ProjectRepo $projectRepo)
    {
        //
        $project=$projectRepo->findByid($id);
        if($project->banner){
            $project->banner->delete();
        }
      
        $project->delete();
        return AjaxResponses::SuccessResponse();
    }
}
