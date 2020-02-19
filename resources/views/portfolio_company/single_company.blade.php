<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>LifeBank</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- Styles -->
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
      
      <link href="{{ asset('css/company.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

  </head>
  <body>

    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    

    <section class="title"> 
      <div class="back page-setup" >
        <p style="color: #19B9FD;" class="backText" > <i class="fas fa-chevron-left"> </i><a href="../add_chart" style="color: #19B9FD;"> Back to portfolio companies </a></p>
        <hr class="ml-n5">
      </div>

      <div class="row page-setup">
        <div class="col-md-8 col-sm-12 ">
          <div class="row life-section">
            <img src="{{ asset('css/icons/life.png') }}" class="life-img" alt="">
            <div class="col life-bank col-sm-12">
              <h3> LifeBank</h3>
              <p>
                LifeBank is a smart blood system saving lives in Lagos by speeding up blood donations and deliveries
              </p>
            </div>
          </div>

          <div class="row">
         
                  
              <div class="info row " >
                  <ul class="list-unstyled row mt-5 p-2" style="background-color:#FAFAFA;">
                    <li > 
                      {{-- <i class="fas ml-3 fa-toggle-on toggler" style=""></i> --}}
                      <i class="fas fa-map-marker-alt"></i>
                      Abuja
                    </li>
                    <li class="ml-3 other"><i class="fas fa-globe"></i> www.lifebank.org</li>
                    <li class="ml-3 other"><i class="far fa-envelope"></i> hello@lifebank.ng</li>
                    <li class="ml-3"><i class="fas fa-tags"></i> B2C, Healthcare</li>
                    
                  </ul>   
                  <div class="row toggle" style="">
                    <p class="other">Closed</p>
                    <label class="switch mt-1 ml-2">
                      <input type="checkbox" checked>
                      <span class="slider round"></span>
                    </label>
                    <p class="open" style="color: #7AEF1F;">Open</p>
                </div>
     
            </div>

          </div>
         
          <ul class="list-unstyled row mt-5 ml-n3 list-table shadow">
            <li class=""><a href="" class="activer"> Description</a></li>
            <li class="ml-4"><a href=""> Comparison</a></li>
            <li class="ml-4"><a href=""> Performance</a></li>
              <li class="funded ml-4"><a href=""> Funding</a></li>
              <li class="ml-4 "><a href=""> Contact</a></li>
              <li class="ml-4 "><a href="">Files</a></li>
              <li class="ml-4 "><a href=""> Notes</a></li> 
            
            {{-- <button class="btn btn-primary btn-share btn-sm" style="margin-left: 0.5rem; margin-top: .1rem; width: 4rem"> Share</button> --}}
          </ul>
          
          <div class="details">
            <div class="container">
              <div class="row">
                <h5 class="text-uppercase float-left"> Description </h5>
                <p class="ml-auto "> Edit <i class="fas fa-pencil-alt"> </i></p>
                <div >
                  <p class="text-wrap">
                    We believe that no African should die from a shortage of
                    essential medical products at the Hospital level, 
                    and we are on a mission to solve it. Our goal is
                     to deliver needed medical products such as blood, 
                     blood products, oxygen, as well as vaccines to hospitals
                      across Africa. We are on a mission to save one million lives.
                  </p>
                </div>
              </div>

              <div class="row mt-5">
                <h5 class="text-uppercase float-left"> Comparison </h5>
                <p class="ml-auto "> Edit <i class="fas fa-pencil-alt"> </i></p>
               
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 ml-n3">
                  <h5 class=" text-capitalize"> Pizza Hut</h5>
                  <div class="irr">
                    <div class="row col-8 ">
                      <p> IRR</p>
                      <p class="ml-auto"> AVG. HP</p>
      
                    </div>
                    <div class="row col-8">
                      <h5> 21.5%</h5>
                      <h5 class="ml-auto"> 14%</h5>
                    </div>
                  </div>
                  <div class="row ml-1 mt-3">
                    <h5>Investments</h5>
                    <i class="fas fa-chevron-down ml-auto"> </i>
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
                                      'rgba(256, 006, 006, 1)',
                                      'rgba(256, 006, 006, 1)',
                                      'rgba(256, 006, 006, 1)',
                                      'rgba(256, 006, 006, 1)'
                                      // 'rgba(256, 46, 36, 1)'
                                    
                                  ],
                              
                                  borderWidth: 1
                              },
                              {
                                
                                minBarLength: 9,
                                  label: 'Investment',
                                  data: [100000, 400000, 440000, 780000],
                                  backgroundColor: [
                                      'rgba(041,047, 089, 1)',
                                      'rgba(041,047, 089, 1)',
                                      'rgba(041,047, 089, 1)',
                                      'rgba(041,047, 089, 1)',
                                    
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

                <div class="col-6 funding ml-3">
                  <h5 class=" text-capitalize"> Johnson & Johnson</h5>
                  <div class="row col-8">
                    <p> IRR</p>
                    <p class="ml-auto"> AVG. HP</p>
    
                  </div>
                  <div class="row col-8">
                    <h5> 21.5%</h5>
                    <h5 class="ml-auto"> 14%</h5>
                  </div>

                  <div class="row ml-1 mt-3">
                    <h5>TVPI</h5>
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
                            'rgba(122,239, 031, 1)',
                        ],
                        }]
                      },
                      options: {
                        bezierCurve: false
                      }
                    })
                    </script>
                </div>
              </div>
              <div class="row mt-5 performance">
                <h5 class="text-uppercase float-left"> Performance </h5>
                <p class="ml-auto "> Edit <i class="fas fa-pencil-alt"> </i></p>
               
              </div>
              <div class="row other">
                <div class="col-6 ml-n3"  >
                    <div class="row col-8">
                      <p> IRR</p>
                      <p class="ml-auto"> AVG. HP</p>
                    </div>
                    <div class="row col-8">
                      <h5> 21.5%</h5>
                      <h5 class="ml-auto"> 14%</h5>
                    </div>

                    <div class="row mt-3" style="margin-left: .1rem" >
                      <h5>Quarterly Overview</h5>
                      <i class="fas fa-chevron-down ml-auto"> </i>
                    </div>
                    <canvas id="muChart" width="400" height="400"></canvas>
                    <script>
                      var secondCtx = document.getElementById('muChart').getContext('2d');
                      var secondChart = new Chart(secondCtx, {
                          type: 'bar',
                          data: {
                              labels: ['Q1  2018', 'Q2 2018', 'Q3 2018', 'Q4 2018'],
                              datasets: [{
                                
                                minBarLength: 9,
                                  label: 'Exit',
                                  data: [300000, 370000, 370000, 600000],
                                  backgroundColor: [
                                    // RGBA(253,6,6,1)
                                    'rgba(122,239, 031, 1)',
                                    'rgba(122,239, 031, 1)',
                                    'rgba(122,239, 031, 1)',
                                    'rgba(122,239, 031, 1)'
                                      // 'rgba(256, 46, 36, 1)'
                                    
                                  ],
                              
                                  borderWidth: 1
                              },
                              {
                                
                                minBarLength: 9,
                                  label: 'Investment',
                                  data: [100000, 400000, 440000, 780000],
                                  backgroundColor: [
                                    // RGBA(25,185,253,1)

                                      'rgba(024, 185, 253, 1)',
                                      'rgba(024, 185, 253, 1)',
                                      'rgba(024, 185, 253, 1)',
                                      'rgba(024, 185, 253, 1)'
                                    
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
                
                <div class="col-6 mt-5 pt-4">
                  <div class="row ml-1 mt-3">
                    <h5>TVPI</h5>
                    <i class="fas fa-chevron-down ml-auto"> </i>
                  </div>
                  <canvas id="new-line" height="400" width="400"> </canvas>
                  <script> 
                  let ctxcv = document.getElementById('new-line').getContext('2d');

                    let newLine = new Chart(ctxcv, {
                      type: 'line',
                      data: {
                        
                        labels: [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019],
                        datasets: [{
                          label: 'TVPI',
                          data: [0.5, 2, 2.5, 1, 2.5, 3.5, 2, 3.7, 4, 4],
                          backgroundColor: [
                            // RGBA(122,239,31,1)
                            'rgba(96, 1, 190, 0.83)',
                          ],
                        },
                        {
                          label: 'TVPI',
                          data: [1.5, 4, 0.5, 1, 0.5, 3.9, 1, 3.7, 4, 4],
                          backgroundColor: [
                            // RGBA(122,239,31,1)
                            // RGBA(253,6,6,1)
                            'rgba(256, 006, 006, 0.83)',
                          ],
                        },
                      
                      
                      ]
                      },
                      options: {
                        bezierCurve: false
                      }
                    })
                    </script>
                </div>
              </div>

            </div>

            <div class="funding">
              <div class=" mt-5 row p-3">
                <h4 class="text-uppercase"> funding </h4>
                <a href="/funding" class="ml-auto" style="color: #000000"> Edit <i class="fas fa-pencil-alt"></i></a>      
              </div>
                <div class="row" >
                    <div class="col-6  ml-1">
                      <div class="row col-12">
                        <p class="text-uppercase text-muted"> Series A</p>
                        <p class="capitalize ml-auto text-muted"> January 20, 2019</p>
                      </div>

                      <div class="row col-12">
                        <p class="text-capitalize"> Commited</p>
                        <p class="capitalize ml-auto"> $342,000</p>
                      </div>

                      <div class="row col-12">
                        <p class="text-capitalize">Tranche1:</p>
                        <p class="mx-auto"> 5 Dec 2019</p>
                        <p class="capitalize ml-auto"> $342,000</p>
                      </div>    
                    </div> 

                    <div class="col-5 mr-1" >
                      <div class="row col-12">
                        <p class="text-uppercase text-muted"> Series A</p>
                        <p class="capitalize ml-auto text-muted"> January 20, 2019</p>
                      </div>
                      <div class="col-12 row">
                        <p class="text-capitalize"> Commited</p>
                        <p class="capitalize ml-auto"> $57,000</p>
                      </div>
                      <div class="col-12 row">
                        <p class="text-capitalize">Tranche1:</p>
                        <p class="mx-auto"> 21 Jul 2019</p>
                        <p class="capitalize ml-auto"> $25,000</p>
                      </div>
                      <div class="col-12 row">
                        <p class="text-capitalize">Tranche2:</p>
                        <p class="mx-auto"> 1 Sep 2019</p>
                        <p class="capitalize ml-auto"> $32,500</p>
                      </div>

                    </div>
                </div>
              </div>

              <div class="contact mt-4">
                <h4 class="text-uppercase"> contact </h4>
                <div class="row ml-1 mt-5">
                  <div class="col-6">
                    <div class="row">
                      
                      <div> <button class="btn btn-info rounded-circle p-4"  type="button" > UE</button> </div>
                      <div class="col">
                        <p> Uka Eje</p>
                        <p> Product Manager</p>
                        <p> uka.eje@something.com</p>
                        <p>+234 626 618 5564</p>
                      </div>
                    </div>
                    
                  </div>

                  <div class="col-6 ">
                    <div class="row">
                      
                      <div> <button class="btn btn-info rounded-circle p-4"  type="button" > AA</button> </div>
                      <div class="col contact">
                        <p> Ayodeji Ariakwe</p>
                        <p> Medical Consultant</p>
                        <p>ayodeji.arikawe@something.com</p>
                        <p>+234 626 618 5564</p>
                      </div>
                    </div>
                    
                  </div>

                </div>
              <div>
                <a  href="" class="lead text-black-50" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus ml-2" style="font-size: 1.2rem; color: #666666"></i> Add contact</a>  
              </div>   
                
              <!-- Add contact modal -->
              <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addKpi">Add contact</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="text" placeholder="Search contact" class="form-control">
                    </div>
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button> --}}
                      <button type="button" class="btn btn-primary  " class="close" data-dismiss="modal" aria-label="Close">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
    
              <!-- Add file modal -->
              <div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addFile">Add File</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label for=""> Name:</label>
                      <input type="text" placeholder="" class="form-control">

                      <input type="file" class="form-control mt-4">
                    </div>
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button> --}}
                      <button type="button" class="btn btn-primary  " class="close" data-dismiss="modal" aria-label="Close">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="mt-5 files">
                <h4 class="text-uppercase">files </h4>
                <div class="row   mt-3">
                  <div class="col-4">
                    <p class="lead font-weight-700" > <i class="fas fa-file" style="font-size: 1.3rem"></i> Updated list of employees</p>
                  </div>

                  <div class="col-4">
                    <a href="" class="lead text-black-50" data-toggle="modal" data-target="#addFile"><i class="fas fa-plus ml-2" style="font-size: 1.2rem; color: #666666"></i> Add file</p>                    </div>

                </div>
              </div>

              <div class="notes mt-5 ">
                <h4 class="text-uppercase"> Notes</h4>
                <div class="col-6 p-1 rounded-p mt-4" style="background: #F2F3F5;">
                  <p class="ml-3"> <a href="#" style="color:#19B9FD"> Biodun</a> Please proceed with the next tranche</p>
                  <small class="ml-3">Yesterday at 4:23PM</small>
                </div>
                <div class="ml-n2 mt-5 col-9">
                  <input type="text" class="p-4 form-control rounded"  placeholder="Add note">
                </div>
              </div>

              <div style="height: 5rem"></div>
          </div>
        
   
         </div>
       
        

        <div class="col-4 reports-part">
          <div class="col ">
            <h4 class="ml-n3"> Recent Reports</h4>
            <div class="row">
              <p class=""> August Report and KPIs </p>
              <p class="mx-auto"> Grechen A.</p>
              <a href="" class="ml-auto" style="color: #1B63DC;"> View</a>
            </div>

            <div class="row">
              <p class=""> Seed vs Series A</p>
              {{-- <p class="mx-auto"> Grechen A.</p  > --}}
              <a href="" class="ml-auto" style="color: #1B63DC;"> View</a>
            </div>

          </div>

          <div class="col mt-5 ml-n3">
            <h4 class=""> History</h4>
            <p class=""> Linked file “August Portfolio” <br>
              <small class="text-muted">Adetokunbo <i class="fas fa-circle" style="font-size: .5rem"></i><span> 3hours ago </span></small>
            </p>

            <p class=""> Edited Performance section to include “TVPI” <br>
              <small class="text-muted">Marvis <i class="fas fa-circle" style="font-size: .5rem"></i><span> 1min ago </span></small>
            </p>
            
          </div>
        </div>
      </div>
      

    </section>
    </body>
</html>
