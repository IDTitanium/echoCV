<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
      
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <style>
    .dash-board a:hover{
        opacity: 0.6;
        padding-left: 5px;
    }
    .dash-board a{
        color: #333333; 
        font-size: 16px;
      
    }
  </style>
<body>
    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    
    
    <main class="wholeContent mt-2  "> 
      <div class="dashboard-header float-right" >  
        <a href="/add_chart" class="btn btn-primary">Add Chart </a>
        <button type="button" class="btn btn-dashboard ml-2" data-toggle="modal" data-target="#exampleModal">Share </button>
      </div>

      <!-- Share modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Share with others?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control" placeholder="Enter name or email address">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-data" data-dismiss="modal"> Share </button>
              <button type="button" class="btn btn-default btn-test "  style="color: #333333" class="close" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of share modal -->

      <div class="mobile-dashboard-header not-desktop-content row mt-4 ml-5 d-flex justify-content-between">
        <h3> Dashboard</h3>
        <p class=""><a href="" class="text-info "> Go Back</a></p>
      </div>

      <div class="dashboards mt-4 ml-2 ">
        
          <ul class="row list-unstyled dash-board">
            <li > <a class="activate list-inline-item" > Dashboard 1 </a></li>
            <li class="ml-3 list-inline-item" > <a href=""> Dashboard 2 </a></li>
            <li class="ml-3 list-inline-item"> <a href="" data-toggle="modal" data-target="#addModal"> <i class="fas fa-plus"></i>  </a></li>
          </ul>
      </div>

      <!-- Add Dashboard -->

      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Name your dashboard</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control" placeholder="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal"> Create dashboard </button>
              <button type="button" class="btn btn-default btn-test "  style="color: #333333" class="close" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!-- End of add dashboard modal -->

      <div class="mobile-dashboard-body  mt-3 row ">
        <div class="btn-group ml-4">
          <button type="button" class="btn  btn-share">Dashboard 1</button>
          <button type="button" class="btn btn-share dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
            
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
            <a class="dropdown-item" href="#">Dashboard 2</a>
           
          </div>
        </div>
        
          <button class="btn btn-primary ml-5 "> Add Chart </button>
          <button class="btn btn-share ml-1"> <i class="fas fa-share-alt"></i></button>
      </div>

      <hr>

      <div class="body">
        <div class="col-md-10 col-sm-12 mt-5 pt-5 row justify-content-center">
          <div class="col-md-5 col-sm-6 ml-5  ">
            <div class=" ml-1 mt-3">
              <h4>Coca-Cola</h4>
              <div class="row " style="margin-left: .1em">
                <p> Quarterly Overview</p>
                <i class="fas fa-chevron-down ml-auto"> </i>
              </div>
            </div>
            <div>
              <canvas id="myChart" width="400" height="400"></canvas>
              <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Q1  2018', 'Q2 2018', 'Q3 2018', 'Q4 2018'],
                        datasets: [{
                          
                          minBarLength: 9,
                            label: 'Exit',
                            data: [300000, 370000, 370000, 600000],
                            backgroundColor: [
                              // RGBA(253,6,6,1)
                                'rgba(122, 239, 31, 1)',
                                'rgba(122, 239, 31, 1)',
                                 'rgba(122, 239, 31, 1)',
                                 'rgba(122, 239, 31, 1)'
                                 
                                // 'rgba(256, 46, 36, 1)'
                              
                            ],
                        
                            borderWidth: 1
                        },
                        {
                          
                          minBarLength: 9,
                            label: 'Investment',
                            data: [100000, 400000, 440000, 780000],
                            backgroundColor: [
                                'RGB(25,185,253, 1)',
                                'RGB(25,185,253, 1)',
                                'RGB(25,185,253, 1)',
                                'RGB(25,185,253, 1)',
                              
                            ],
              
                            borderWidth: 1
                        }
                      ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stacked: true
                                }
                            }]
                        }
                    }
                });
                </script>
            </div>
          </div>

          <div class="col-md-5 col-sm-6 tvpi  ml-auto" >
            <div class="row ml-1 mt-5">
              <p>TVPI</p>
              <i class="fas fa-chevron-down ml-auto"> </i>
            </div>
            <canvas id="line-chart" height="400" width="400"> </canvas>
            <script> 
            let ctxc = document.getElementById('line-chart').getContext('2d');

              let lineChart = new Chart(ctxc, {
                type: 'line',
                data: {
                  
                  labels: [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019],
                  datasets: [{
                    lineTension: 0,
                    label: 'TVPI',
                    data: [0.5, 2, 2.5, 1, 2.5, 3.5, 2, 3.7, 4, 4],
                    backgroundColor: [
                      // RGBA(122,239,31,1)
                      'rgba(255,255, 255, 1)',
                  ],
                  }]
                },
                options: {
                  bezierCurve: false
                }
              })
              </script>
          </div>
          <div class="col-5 customer  mt-5 mr-auto ml-5" >
            <p> Customer Success</p>
            <div>
              <canvas id="barChart" height="400" width="400"> </canvas>
                <script>
                  var canvas = document.getElementById("barChart");
                  var ctx = canvas.getContext('2d');

                  var data = {
                        datasets: [
                          {
                              fill: true,
                              backgroundColor: [
                                'RGB(25,185,253)'],
                              data: [100],
                              label: '100%',
                              borderColor:	['RGB(25,185,253)'],
                              borderWidth: [2]
                          }
                      ]
                  };
                  var options = {
                        rotation: -0.7 * Math.PI
                  };


                  // Chart declaration:
                  var myBarChart = new Chart(ctx, {
                      type: 'doughnut',
                      data: data,
                      options: options
                  });
                </script>
            </div>
          </div>
        </div>
          </div>
          </div>
          
        </div>
      </div>
      
    </main>
</body>
</html>