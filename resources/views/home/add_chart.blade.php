<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Add Chart</title>
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
    .add-header a{
        color: #333333; 
        font-size: 18px;
      
    }
  .exact-class{
        border-bottom: 2px solid #19B9FD;
    }
    .card-header{
        border-bottom: none;
        background: #EEEEEE;
    }

    .side-section{
        box-shadow: -2px 0px 4px rgba(0, 0, 0, 0.15);
        border: thick solid  #FFFFFF; 
        height: 100vh;
    }

    .add-header a:hover{
        opacity: 0.6;
        padding-left: 5px;
    }
</style>
<body>
    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    
    <main class="wholeContent mt-2"> 
        <div class="row">
            <div class="col-7">
                <div class="body">
                    <div class="col-md-10 col-sm-12 mt-5 pt-5 row justify-content-center">
                    <div class="col-md-10 col-sm-6 ml-5  ">
                        <div class=" ml-1 mt-3">
                        {{-- <h4>Coca-Cola</h4> --}}
                        <div class="row " style="margin-left: .1em">
                            <p> Sales and Exit</p>
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
                    </div>
                </div>
            </div>
            {{-- <div class="verticalLine"></div>             --}}
            <div class="col-5 ml-n3 pl-2 m-3 pt-4 mt-n2 side-section" style="">
                <div class="add-header " >  
                    <a href="/add_chart" class="exact-class" >Metric </a>
                    <a href="/export_report" class="ml-3" >Export </a>

                    <div class="float-right"> 
                       <button class="btn btn-default"> Cancel</button>
                        <button class="btn btn-primary"> Save</button>
                    </div>

                </div>

                <div class="form mt-4">
                    <form action="" class="form-group">
                        <div class="form-group">
                            <label for=""> Chart title</label>
                            <input type="text" placeholder="Sales and Exit" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""> Chart title</label>
                            <select name="" id="" class="form-control">
                                <option value=""> Column</option>
                                <option value=""> Bar</option>
                                <option value=""> Funnel</option>
                                <option value=""> Pie</option>
                                <option value=""> Spline</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="row ml-1 ">
                                <p class=""> Metric</p>
                                <p class="ml-auto mr-3 text-info">New metric</p>
                            </div>
                            <select name="" id="" class="form-control mt-n3" >
                                <option value="" > Search available metrics </option>
                            </select>
                        </div>
{{-- 
                        <div class="card text-center">
                            <div class="card-header">
                              <ul class="nav">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Link</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body text-left">
                                <p> Investment KPI</p>
                            </div>
                        </div> --}}

                        <div class="card" style="background:  #EEEEEE;">
                            <div class="card-header ">
                                <div class="d-flex justify-content-end">
                                    <i class="fas fa-cog"></i>
                                    <i class="fas fa-times ml-2"></i>
                                </div>
                            </div>
                            <div class="card-body mt-n4">
                              Investment KPI
                            </div>
                        </div>

                        <div class="card mt-3" style="background:  #EEEEEE;">
                            <div class="card-header ">
                                <div class="d-flex justify-content-end">
                                    <i class="fas fa-cog"></i>
                                    <i class="fas fa-times ml-2"></i>
                                </div>
                            </div>
                            <div class="card-body mt-n4">
                              Exit KPI
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>