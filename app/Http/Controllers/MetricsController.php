<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
//Google Sheets
use Revolution\Google\Sheets\Facades\Sheets;
// These for charts
use App\Charts\UserLineChart;
use App\Graph;
//These for excel import/export
use App\Exports\ExportGraph;
use App\Imports\ImportGraph;
use Maatwebsite\Excel\Facades\Excel;

class MetricsController extends Controller
{

      /**
      * Handle the incoming request.
      *
      * @param  \Illuminate\Http\Request  $request
      *
      * @return \Illuminate\Http\Response
      */
     public function __invoke(Request $request)
     {

        //  $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        //                 ->sheetById(config('sheets.post_sheet_id'))
        //                 ->all();
        //
        // $posts = array();
        // foreach ($sheets AS $data) {
        //     $posts[] = array(
        //         'name' => $data[0],
        //         'message' => $data[1],
        //         'created_at' => $data[2],
        //     );
        // }

        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
                        ->sheet(config('sheets.post_sheet_id'))
                        ->get();

        //$header = $sheets->pull(0);
        $header = [
            'name',
            'message',
            'created_at',
        ];

        $posts = Sheets::collection($header, $sheets);
        $posts = $posts->reverse()->take(10);

        return view('metrics.google_test')->with(compact('posts'));
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function build()
    {

      $graphs = Graph::all();
      // dd($graphs);

      if(count($graphs) > 0){
        foreach($graphs as $graph){
          $chart = new UserLineChart;
          $chart1 = new UserLineChart;
          $chart2 = new UserLineChart;
          $api = url('/metrics/show/bar');
          $borderColors = [
              "rgba(25, 99, 132, 1.0)",
              "rgba(22, 160, 133, 1.0)",
              "rgba(55, 205, 86, 1.0)",
              "rgba(51, 105, 232, 1.0)",
              "rgba(244, 67, 54, 1.0)",
              "rgba(34, 198, 246, 1.0)",
              "rgba(153, 102, 255, 1.0)",
              "rgba(255, 159, 64, 1.0)",
              "rgba(102, 30, 99, 1.0)",
              "rgba(255, 159, 64, 1.0)",
              "rgba(133, 30, 99, 1.0)",
              "rgba(205, 220, 57, 1.0)"
          ];
          $fillColors = [
              "rgba(255, 99, 132, 0.2)",
              "rgba(22, 160, 133, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(51, 105, 232, 0.2)",
              "rgba(244, 67, 54, 0.2)",
              "rgba(34, 198, 246, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(233, 30, 99, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(233, 30, 99, 0.2)",
              "rgba(205, 220, 57, 0.2)"
          ];

              // Bar
              $chart->displaylegend(true);
              $chart->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart->labels([$graph->field1, $graph->field2, $graph->field3, $graph->field4, $graph->field5, $graph->field6,
              $graph->field7, $graph->field8, $graph->field9, $graph->field10, $graph->field11, $graph->field12]);
              $chart->dataset('EchoVC Mertics', 'bar',  [$graph->value1, $graph->value2, $graph->value3, $graph->value4,
              $graph->value5, $graph->value6, $graph->value7, $graph->value8, $graph->value9, $graph->value10, $graph->value11, $graph->value12])
              ->color($borderColors)
              ->backgroundcolor($fillColors);

              // Doughnut
              $chart1->minimalist(true);  //This shows the graph line
              // $chart1->displaylegend(true);
              // $chart1->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart1->labels([$graph->field1, $graph->field2, $graph->field3, $graph->field4, $graph->field5, $graph->field6,
              $graph->field7, $graph->field8, $graph->field9, $graph->field10, $graph->field11, $graph->field12]);
              $chart1->dataset('EchoVC Mertics', 'doughnut',  [$graph->value1, $graph->value2, $graph->value3, $graph->value4,
              $graph->value5, $graph->value6, $graph->value7, $graph->value8, $graph->value9, $graph->value10, $graph->value11, $graph->value12])
              ->color($borderColors)
              ->backgroundcolor($fillColors);

              // Line
              // $chart2->title($graph->name, 30, "rgb(255, 99, 132)", true, 'Nunito');
              $chart2->labels([$graph->field1, $graph->field2, $graph->field3, $graph->field4, $graph->field5, $graph->field6,
              $graph->field7, $graph->field8, $graph->field9, $graph->field10, $graph->field11, $graph->field12]);
              $chart2->dataset('EchoVC Mertics', 'line',  [$graph->value1, $graph->value2, $graph->value3, $graph->value4,
              $graph->value5, $graph->value6, $graph->value7, $graph->value8, $graph->value9, $graph->value10, $graph->value11, $graph->value12])
              ->color("rgb(255, 99, 132)")
              ->backgroundcolor("rgb(255, 199, 231)")
              ->fill(true)
              ->linetension(0.5);
            }
      }

    // return view('metrics.show')->with('chart', $chart, 'graph', $graph);
    // return $chart->api();
    return view('metrics.show')->with(compact('chart', 'chart1', 'chart2', 'graphs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    //     'name' => 'required',
    //     'desc' => 'required'
    //   ]);
    //
    // //Create Metrics
    // $graph = new Graph;
    // $graph->name =$request->input('name');
    // $graph->desc =$request->input('desc');
    // $graph->percent =$request->input('percent');
    // $graph->numb =$request->input('numb');
    // Excel::import(new ImportGraph, request()->file('file'));
    // $graph->save();
    //
    // return redirect('/metrics/show/')->with('success', 'Metrics Successful Created with Excel Sheet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $graphs = Graph::find($id);
      return view('metrics.show')->with('graphs', $graphs);
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

    public function index()
    {
        $graphs = Graph::all();
        return view('metrics.create')->with('graphs', $graphs);
    }


    /**
   * @return \Illuminate\Support\Collection
   */
   public function importExport()
   {
      $graphs = Graph::all();
      return view('import')->with('graphs', $graphs);
   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function export()
   {
       return Excel::download(new ExportGraph, 'metrics.xlsx');
   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function import(Request $request)
   {
       Excel::import(new ImportGraph, request()->file('file'));
       return redirect('/metrics')->with('success', 'Excel Sheet Successful Uploaded');
       // return view('metrics.show')->with('success', 'Excel Sheet Successful Uploaded');

     //   $this->validate($request, [
     //     'name' => 'required',
     //     'desc' => 'required'
     //   ]);
     //
     //
     // //Create Metrics
     // $graph = new Graph;
     // $graph->name =$request->input('name');
     // $graph->desc =$request->input('desc');
     // $graph->percent =$request->input('percent');
     // $graph->numb =$request->input('numb');
     // // dd($graph->name);
     // $graph->save();
     // Excel::import(new ImportGraph, request()->file('file'));
     //
     // return redirect('/metrics/show/')->with('success', 'Metrics Successful Created with Excel Sheet');
   }

   public function sheets()
   {
      $graphs = DB::table('graphs')->distinct()->get();
      // $graphs = Graph::all();
      // dd($graphs);
      return view('metrics.sheets')->with('graphs', $graphs);
   }

   public function spreadsheets()
   {
      $graphs = Graph::all();
      return view('metrics.spreadsheets')->with('graphs', $graphs);
      // $graphs = Graph::find($id);
      // return view('metrics.spreadsheets')->with('graphs', $graphs);
   }

   public function metricsKpi($id)
   {
      // $graphs = Graph::all();
      // return view('metrics.kpi')->with('graphs', $graphs);
      $graphs = Graph::find($id);
      return view('metrics.kpi')->with('graphs', $graphs);
   }

   public function metricsSingleKpi($id)
   {
      // $graphs = Graph::all();
      // return view('metrics.kpi_value')->with('graphs', $graphs);
      $graphs = Graph::find($id);
      return view('metrics.single_kpi')->with('graphs', $graphs);
   }

}
