<?php


namespace Khaleghi\Course\Http\Controllers;


use App\Http\Controllers\Controller;
use Khaleghi\Course\Http\Requests\LessonRequest;
use Khaleghi\Course\Repositories\CourseRepo;
use Khaleghi\Course\Repositories\LessonRepo;
use Khaleghi\Course\Repositories\SeasonRepo;
use Khaleghi\Media\Services\MediaFileService;

class LessonController extends Controller
{
    /**
     * @var LessonRepo
     */
    private $lessonRepo;

    public function __construct(LessonRepo $lessonRepo)
    {
        $this->lessonRepo = $lessonRepo;
    }

    public function create($course, SeasonRepo $seasonRepo, CourseRepo $courseRepo)
    {
        $seasons = $seasonRepo->getCourseSeasons($course);
        $course = $courseRepo->findByid($course);
        return view('Courses::lessons.create', compact('seasons', 'course'));
    }

    public function store($course, LessonRequest $request)
    {
        $request->request->add(["media_id" => MediaFileService::upload($request->file('lesson_file'))->id ]);
        $this->lessonRepo->store($course, $request);
        newFeedback();
        return redirect(route('courses.details', $course));
    }
}
