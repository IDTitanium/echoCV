<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Met;

class CkeditorController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ckeditor');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
      $this->validate($request, [
        'name1' => 'required'
      ]);

      $met = new Met;
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $met->name = $fileName;
            $met->name =$request->input('name1');
            // $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'File uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction(1, '$url', '$msg')</script>";
            // dd($response);

            Met::create($request->all());
            $met->save();
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
