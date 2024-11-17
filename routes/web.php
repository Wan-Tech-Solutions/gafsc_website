<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\SSO\LoginController;
use App\Http\Controllers\Auth\SSO\RegisterController;
use App\Http\Controllers\Auth\UploadController;
use App\Http\Controllers\Front\HomepageController;
use App\Models\Career;
use App\Models\Download;
use App\Models\Faq;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use Plank\Mediable\Media;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::group(['prefix' => 'organisation', 'as' => 'organisation.'], function () {
    Route::group(['prefix' => 'command', 'as' => 'command.'], function () {
        Route::get('commandant', function () {
            return view('website.pages.organisation.command.commandant');
        })->name('commandant');

        Route::get('d-commandant', function () {
            return view('website.pages.organisation.command.d_commandant');
        })->name('d_commandant');
    });

    Route::group(['prefix' => 'policy-committee', 'as' => 'policy-committee.'], function () {
        Route::get('/', function () {
            return view('website.pages.organisation.policy.committee');
        })->name('committee');

        Route::get('ascom-senior-division', function () {
            return view('website.pages.organisation.policy.senior');
        })->name('ascom_senior_division');

        Route::get('ascom-junior-division', function () {
            return view('website.pages.organisation.policy.junior');
        })->name('ascom_junior_division');
    });

    Route::group(['prefix' => 'academic-board', 'as' => 'academic-board.'], function () {
        Route::get('/', function () {
            return view('website.pages.organisation.academic_board.board');
        })->name('board');

        Route::get('dean', function () {
            return view('website.pages.organisation.academic_board.dean');
        })->name('dean');

        Route::get('vice-dean', function () {
            return view('website.pages.organisation.academic_board.vice');
        })->name('vice_dean');
        Route::get('chief-instructor', function () {
            return view('website.pages.organisation.academic_board.chief_instructor');
        })->name('chief_instructor');

        Route::get('acting-chief-instructor', function () {
            return view('website.pages.organisation.academic_board.acting_chief_instructor');
        })->name('acting_chief_instructor');
    });
    
    
    Route::get('staff-and-faculty', function () {
        return view('website.pages.organisation.staff_and_faculty');
    })->name('staff_and_faculty');
    
    /*
    Route::group(['prefix' => 'staff_and_faculty', 'as' => 'staff_and_faculty.'], function () {
        Route::get('headquarters', function () {
            return view('website.pages.organisation.staff.headquarters');
        })->name('headquarters');

        Route::get('academic', function () {
            return view('website.pages.organisation.staff.academic');
        })->name('academic');
        
        Route::get('chief_instructors', function () {
            return view('website.pages.organisation.staff.chief_instructors');
        })->name('chief_instructors');
        
        Route::get('directing_staff', function () {
            return view('website.pages.organisation.staff.directing_staff');
        })->name('directing_staff');
    });
    */
    
    Route::get('control-board', function () {
        return view('website.pages.organisation.control_board');
    })->name('control_board');

    Route::get('organogram', function () {
        return view('website.pages.organisation.organogram');
    })->name('organogram');
});

Route::group(['prefix' => 'academics', 'as' => 'academic.'], function () {
    Route::group(['prefix' => 'military', 'as' => 'military.'], function () {
        Route::get('senior-division', function () {
            return view('website.pages.academic.military.senior');
        })->name('senior-division');

        Route::get('junior-division', function () {
            return view('website.pages.academic.military.junior');
        })->name('junior-division');

        Route::get('international-allied-students', function () {
            return view('website.pages.academic.military.international-allied-students');
        })->name('international-allied-students');
    });

    Route::group(['prefix' => 'graduate-school', 'as' => 'graduate_school.'], function () {
        Route::get('mdip', function () {
            return view('website.pages.academic.graduate_school.mdip');
        })->name('mdip');
        
         Route::get('course-overview', function () {
            return view('website.pages.academic.graduate_school.course-overview');
        })->name('course-overview');

        Route::get('pdip', function () {
            return view('website.pages.academic.graduate_school.pdip');
        })->name('pdip');

        Route::get('pdip-overview', function () {
            return view('website.pages.academic.graduate_school.pdip-overview');
        })->name('pdip-overview');

        Route::get('course', function () {
            return view('website.pages.academic.graduate_school.course');
        })->name('course');
    });

    Route::group(['prefix' => 'international-entry', 'as' => 'international_entry.'], function () {
        Route::get('structure-and-courses', function () {
            return view('website.pages.academic.international_entry.structure_courses');
        })->name('structure_courses');
    });
});

Route::group(['prefix' => 'resources', 'as' => 'resources.'], function () {
    Route::get('downloads', function () {
        $files = Cache::rememberForever('downloads', function () {
            return Download::latest()->paginate(100);
        });

        return view('website.pages.resources.downloads', compact('files'));
    })->name('downloads');

    Route::get('download/{media}', function (Media $media) {
        return response()->streamDownload(
            function () use ($media) {
                $stream = $media->stream();
                while ($bytes = $stream->read(1024)) {
                    echo $bytes;
                }
            },
            $media->basename,
            [
                'Content-Type' => $media->mime_type,
                'Content-Length' => $media->size,
            ]
        );
    })->name('download');

    Route::get('academic-calendar', function () {
        return view('website.pages.resources.academic_calendar');
    })->name('academic_calendar');

    Route::group(['prefix' => 'research', 'as' => 'research.'], function () {
        Route::get('catalog', function () {
            return view('website.pages.resources.research.catalog');
        })->name('catalog');

        Route::get('featured', function () {
            return view('website.pages.resources.research.featured');
        })->name('featured');
    });

    Route::group(['prefix' => 'publications', 'as' => 'publications.'], function () {
        Route::get('/', [HomepageController::class, 'publications'])->name('publications');
        Route::get('/{publication:slug}', [HomepageController::class, 'publication'])->name('single');
    });
});

Route::group(['prefix' => 'admissions', 'as' => 'admissions.'], function () {
    Route::get('requirements', function () {
        return view('website.pages.admissions.requirements');
    })->name('requirements');

    Route::get('how-to-apply', function () {
        return view('website.pages.admissions.how_to_apply');
    })->name('how_to_apply');

    Route::get('tuition-and-fees', function () {
        return view('website.pages.admissions.tuition_and_fees');
    })->name('tuition_and_fees');
});

Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
    Route::get('history', function () {
        return view('website.pages.about.history');
    })->name('history');

    Route::get('alumni', function () {
        return view('website.pages.about.alumni');
    })->name('alumni');

    Route::get('mission-and-vision', function () {
        return view('website.pages.about.mission_and_vision');
    })->name('mission_and_vision');

    Route::get('careers', function () {
        $careers  = Career::latest()->where('deadline', '>', now())->get();

        return view('website.pages.about.careers', compact('careers'));
    })->name('careers');

    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', [HomepageController::class, 'blogs'])->name('blogs');
        Route::get('/{blog:slug}', [HomepageController::class, 'blog'])->name('single');
    });

    Route::get('gallery', function () {
        $album = Cache::rememberForever('album', function () {
            return Gallery::with('media')->get();
        });
        return view('website.pages.about.gallery', compact('album'));
    })->name('gallery');

    Route::get('campus-tour', function () {
        return view('website.pages.about.campus_tour');
    })->name('campus_tour');
});

Route::get('coming-soon', function () {
    return view('website.coming-soon');
})->name('coming-soon');

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('contact-us', function () {
        return view('website.pages.contact.contact');
    })->name('contact-us');

    Route::get('faqs', function () {
        $faqs = Cache::rememberForever('faqs', function () {
            return Faq::get()->groupBy('category');
        });
        return view('website.pages.contact.faq', compact('faqs'));
    })->name('faq');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/forgot-password', [App\Http\Controllers\Auth\Admin\ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot-password');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\Admin\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password.submit');
});

Auth::routes(['register' => false]);

Route::post('/sign-up', RegisterController::class)->name('sign-up');
Route::post('/sign-in', LoginController::class)->name('sign-in');

Route::post('/upload', UploadController::class)->name('upload');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/{user}', [App\Http\Controllers\Auth\ImpersonationController::class, 'impersonate'])->name('impersonate');
Route::get('/user', [App\Http\Controllers\Auth\ImpersonationController::class, 'leaveImpersonate'])->name('impersonate.leave');

// php artisan ziggy:generate
// ./vendor/bin/pint -v
// php artisan page-cache:clear
