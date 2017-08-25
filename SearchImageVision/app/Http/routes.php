<?php

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
use Illuminate\Http\Request;
Route::get('/', function () {
	$contents = "";
	$text = "";
	$filepath =" ";
	$previewImage = "";
    return view('welcome',compact('filepath'))->with('contents',$contents)->with('text',$text)->with('previewImage',$previewImage);
});

Route::get('/generate', function () {
	$contents = "";
	$text = '';
	$filepath = " ";
    return view('welcome',compact('filepath'))->with('contents',$contents)->with('text',$text);
});

Route::post('/generate', function () {
	$stammerScriptDirectory = public_path().'/BanglaStemmer/Stemmer/Stemming.py';
	if(Input::hasFile('file'))
	{
		$destinationPath = public_path();
		$fileName = md5('abc'.microtime(true));
		$file = Input::file('file')->move($destinationPath, $fileName);
		$scriptPath = public_path().'/resources/classify_image.py';
		$basePath = public_path();

		// $imageFilePath = $destinationPath.'/'.$fileName;
		$outputFile = $destinationPath."/".$fileName.".txt";
		$cmd = 'python '.$scriptPath.' '.$basePath.' '.$fileName.' '.$outputFile;
		shell_exec($cmd);
		$contents = File::get(public_path().'/'.$fileName.'.txt');

		$text = '';
		$filepath = " ";
    	return view('welcome',compact('filepath'))->with('contents',$contents)->with('text',$text)->with('previewImage', $fileName);
    	// return redirect('/')->with('contents',$contents)->with('text',$text)->with('previewImage', $fileName);
		

	}
	

    //return view('welcome');
});