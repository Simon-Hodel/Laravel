    <?php

    use App\Http\Controllers\RegisterController;
    use App\Models\Application;
use App\Models\Category;
use App\Models\Event;
    use Illuminate\Support\Facades\File;
    use Spatie\YamlFrontMatter\YamlFrontMatter;
    use Illuminate\Support\Facades\Route;
    use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
    use PharIo\Manifest\ApplicationName;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\Routing\Loader\YamlFileLoader;
    use Symfony\Component\VarDumper\VarDumper;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return redirect('/events');
    });
    Route::get('/events', function () {
        return view('events', [
            'events' => Event::with('category')->get()
        ]);
    });
    
    Route::get('events/{event:slug}', function (Event $event) {
        return view('event', [
            'event' => $event
        ]);
    }); 

    Route::get('categories/{category:name}', function (Category $category) {
        return view('events', [
            'events' => $category->events
        ]);
    }); 



    /*
    Route::post('/event', function () {
        $request = request();

            $application = new \app\Models\Application();
            $application->firstname = $request->get('firstname');
            $application->lastname = $request->get('lastname');
            $application->email = $request->get('email');
            $application->answer = $request->get('answer');
            $application->session_id = session()->getId();
            $application->save();

            return redirect('/event');
    });
        Route::get('/event/applications', function(){
        $applications = \app\Models\Application::all();
        dd($applications);
    });
    */