<?php
namespace Khaleghi\Course\Providers;

use Khaleghi\Course\Models\Season;
use Khaleghi\Course\Policies\SeasonPolicy;
use Khaleghi\RolePermissions\Database\Seeds\RolePermissionTableSeeder;
use Khaleghi\Course\Models\Course;
use Khaleghi\Course\Policies\CoursePolicy;
use Khaleghi\RolePermissions\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/courses_routes.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/seasons_routes.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/lessons_routes.php');
        $this->loadViewsFrom(__DIR__  .'/../Resources/Views/', 'Courses');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang/');
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang/', "Courses");
        Gate::policy(Course::class, CoursePolicy::class);
        Gate::policy(Season::class, SeasonPolicy::class);
    }

    public function boot()
    {
        config()->set('sidebar.items.courses', [
            "icon" => "i-courses",
            "title" => "دوره ها",
            "url" => route('courses.index'),
            "permission" => Permission::PERMISSION_MANAGE_COURSES
        ]);
    }
}
