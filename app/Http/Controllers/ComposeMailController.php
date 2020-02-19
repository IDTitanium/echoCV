<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
// Use App\Compose;
Use App\Report;
use App\User;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;

//Sending reports (mails) to contact
use App\Mail\ReportsMail;
use Mail;

class ComposeMailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reports = Report::all();
      return view('reports.all')->with('reports', $reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $usersmail = User::all();
      // return view('reports.new_report')->with('usersmail', $usersmail);

      return view('reports.new_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

  //   $this->validate($request, [
  //     'title' => 'required',
  //     'body' => 'required',
  //     'subject' => 'required',
  //   ]);
  //
  //
  // //Create Contact
  // $compose = new Compose;
  // $compose->subject =$request->input('subject');
  // $compose->title =$request->input('title');
  // $compose->body =$request->input('body');
  // $compose->btn1 =$request->input('btn1');
  // $compose->save();
  //
  // $details = [
  //     'subject' => $compose->subject,
  //     'title' => $compose->title,
  //     'body' => $compose->body,
  //     'btn1' => $compose->btn1
  // ];


  $this->validate($request, [
    'report_title' => 'required',
    'content' => 'required',
    'receiver' => 'required',
    'image'  => 'image|nullable|max:1999'
  ]);

  if($request->hasFile('image')) {
      $originName = $request->file('image')->getClientOriginalName();
      $fileName = pathinfo($originName, PATHINFO_FILENAME);
      $extension = $request->file('image')->getClientOriginalExtension();
      $fileName = $fileName.'_'.time().'.'.$extension;

      $request->file('image')->storeAs('public/images', $fileName);
      // $request->file('image')->move(public_path('images'), $fileName);


  }

  //Create Report
  $report = new Report;
  $report->report_title =$request->input('report_title');
  $report->subject =$request->input('subject');
  $report->receiver =$request->input('receiver');
  $report->content =$request->input('content');
  $report->image = $fileName;
  // $report->user_id =$loguser->id;
  // $report->company_id =$comp->id;
  $report->status =$request->input('status');
  $report->save();//Reports are saved in the DB here

//Data of what is either sent or saved
  $details = [
      'receiver' => $report->receiver,
      'subject' => $report->subject,
      'title' => $report->report_title,
      'body' => $report->content,
      'status' => $report->status,
      'image' => $report->image
  ];
// dd($details);
  // $emails = array($details['receiver']);
    $recipients = explode(', ', $details['receiver']);
    // dd($recipients);
    if($details['status'] == 'saved'){
        return redirect('/reports')->with('success', 'Report Successful Saved, You can view it in Draft');//This is will lead to the draft
      }
      else if($details['status'] == 'scheduled'){
        return view('/reports/samp')->with(compact('details'));
          // return view('/reports/samp')->with('success', 'Preview the report');
      }
      else {
          Mail::to($recipients)->send(new ReportsMail($details));
        return redirect('/sent_report')->with('success', 'Report Successful Sent to Contact(s)');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $reports = Report::all();

      return view('reports.new_report1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function received() {
      $receiverid = Auth::user()->email;

      $reports = Report::where('receiver', '$receiverid')->get();
      // $reports = DB::table('reports')->where('receiver', '$receiverid')->get();
      return view('reports.received')->with('reports', $reports);
    }

    public function scheduled() {
      return view('reports.scheduled');
    }

    public function sent() {
      $senderid = Auth::user()->id;

      $reports = Report::where('status', 'sent')->get();
      // $reports = DB::table('reports')->where('user_id', $senderid)->get();
      return view('reports.sent')->with('reports', $reports);

    }

    public function draft() {
      $senderid = Auth::user()->id;

      $reports = Report::where('status', 'saved')->get();
      // $reports = DB::table('reports')->where('user_id', $senderid)->get();
      return view('reports.draft')->with('reports', $reports);

    }

    public function sample() {
      return view('reports.sample');
    }


}
