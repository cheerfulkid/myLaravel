<?php
use App\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('tasks');
});

/**
 * 增加新的任務
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(),
        ["name" => "required|max:255"]
    );

    if($validator->fails())
    {
        return redirect("/")
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->nameFront;
    $task->save();
});

/**
 * 刪除任務
 */
Route::delete('/task/{id}', function ($id) {
    //
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
