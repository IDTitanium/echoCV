<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Report Sample</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <div class="wrapper">

  @include('layouts.sidebar')
    </div>
    <main class="wholeContent">

      <section class="page ">
        <div class="d-flex justify-content-end top mobileHide" >
          <button type="submit" name="button" class="btn btn-default mobileHide">Save & Close</button>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="submit" class="btn btn-primary btnNow mobileHide "  data-toggle="tooltip" data-placement="left" title="Send report now">Send now</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary  mobileHide  dropdown-toggle" aria-haspopup="true"
              aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Schedule report"></button>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center ">
         
          <select name="" id="" class="form-control mobileHide mt-5 shadow" style="width: 50%">
            <option value="">
              To: greg.lorem, melissa.ark, oakculture
            </option>
          </select>
          
        </div>

        <div class="desktopView  col-md-6 mx-auto">
          <div class="heading mt-4 ">
            <h3> August Investor Update</h3>
            <p class="not-mobile-content"> To: <span class="text-info "> Jane Magnesys for Netflix</span></p>
            
          </div>
          <hr class="shadow not-mobile-content">  

          <div class="sample-content">
            <p class="text-wrap">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Earum asperiores eos adipisci at, cum magnam repellendus, 
              aliquid perferendis ad explicabo molestiae nulla deserunt? 
              Autem ipsam labore nihil nam accusantium maxime.

              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Earum asperiores eos adipisci at, cum magnam repellendus, 
              aliquid perferendis ad explicabo molestiae nulla deserunt? 
              Autem ipsam labore nihil nam accusantium maxime.

            </p>
          </div>

          <div class="">
            <img src="{{ asset('css/icons/sample.png') }}" style="width: 100%" alt="">
          </div>
        
          <div class="thanks  mt-4">
            <h4> Thanks</h4>
            <p class="text-wrap">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi optio facere accusantium
              neque consectetur ea incidunt perspiciatis est. Necessitatibus perspiciatis aliquid eaque
                sapiente asperiores consequuntur tempora quia voluptatum earum fuga.
            </p>
          </div>
          <hr class="shadow">
          <div class="not-mobile-content">
            <div class=" row recieved ">
              <h5 class="ml-3"> Recieved</h5>
              <h6 class="ml-auto">Year: 
              <select name="" id="">
                <option value=""> 2019</option>
                <option value=""> 2019</option>
              </select>
              </h6>
            </div>
            <div class="scrolling-wrapper  container">
              <div class="cal ml-0"><p> Sep 2019</p></div>
              <div class="cal "><p> Jan 2019</p></div>
              <div class="cal "><p> Feb 2019</p></div>
              <div class="cal "><p> Mar 2019</p></div>
              <div class="cal"><p> Apr 2019</p></div>
              <div class="cal"><p> May 2019</p></div>
              <div class="cal"><p> Jun 2019</p></div>
              <div class="cal"><p> Jul 2019</p></div>
              <div class="cal"><p> Aug 2019</p></div>
       emote        <div class="cal"><p> Sep 2019</p></div>
              <div class="cal"><p> Oct 2019</p></div>
              <div class="cal"><p> Nov 2019</p></div>
              <div class="cal"><p> Dec 2019</p></div>
            </div>

            <div class="container  row">
              <div class="sent ml-3">
                <p> Not sent</p>
                <p class="text-info"> Send</p>
              </div>

              <div class="view ml-5">
                <p> View</p>
              </div>

              <div class="view ml-4">
                <p> View</p>
              </div>

            
            </div>

            <div class="walk container ml-2">
              <div class="row">
                <p class="mr-auto">Number of Walkins</p>
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Number
                </button>
                <input type="text" placeholder="Enter Value" class="p-2 ml-auto mr-4 form-control" style="width: 6em">
              </div>
              <div class="row mt-5">
                <p class="mr-auto">Total Net Profit</p>
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Currency
                </button>
                <input type="text" placeholder="Enter Value" class="p-2 ml-auto mr-4 form-control" style="width: 6em; ">
              </div>
            </div>

            <div class="pitch container mt-5">
              <h3> Pitch deck</h3>
              <p class="text-wrap"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Cumque non veritatis iusto quo recusandae asperiores esse 
                libero doloremque aperiam mollitia amet, quis culpa tempora
                  unde veniam. Eum veritatis magni harum!</p>
              <button class="btn btn-secondary"> Upload file</button>
            </div>

            
        
        </div>
        <div class=" mobileHide">
          <div class="col">
            <div class="row">
                <p> Section title</p>
                <p class="ml-auto "> Required </p>
                <label class="switch mt-1 ml-2">
                  <input type="checkbox" checked>
                  <span class="slider round"></span>
                </label>
            </div>
            <div class="form-group align-form  ">
              <input type="text" placeholder="Monthly metrics" class="p-3 form-control">
            </div>

            <div class="form-group align-form">
              <p> Description</p>
              <textarea name="" id="" class="form-control text-wrap" placeholder="dfdf" >
                
              </textarea>
            </div>

            <div class="kpi headed row align-form">
              <div class=" col-elements">
                 <p>KPI name</p>
                 <input type="text" class="form-control " placeholder="Number of Walk-Ins" >
                 <input type="text" class="form-control mt-4" placeholder="Total Net Profit" >
              </div>

              <div class="mx-auto col"> 
                <p>Format</p>
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  Number
                </button>

                <button class="btn btn-secondary  dropdown-toggle btn-sm" style="margin-top: 2.6em" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  Currency
                </button>
              </div>

              <div class="ml-auto text-right"> 
                <p class="">KPI Value</p>
                <input type="text" class="form-control " placeholder="Enter Value" >
                <input type="text" class="form-control mt-4" placeholder="Enter Value" >
              </div>
              
            </div>
            <div class="base-kpi row ml-n3 mb-4 mt-3">
              <a href="" class="text-info" data-toggle="modal" data-target="#addKpi"> <i class="fas fa-plus"></i> Add KPI</a>
              <a href="" class="text-info ml-auto" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash-alt "></i> </a>
            </div>

            <!-- Add KPI modal --> 
            <div class="modal fade" id="addKpi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addKpi">Add KPI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="text" placeholder="Add KPI" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button>
                    <button type="button" class="btn btn-primary  " class="close" data-dismiss="modal" aria-label="Close">Save</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- -->

             <!-- Delete Modal -->

             <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete update?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p> 
                      Are you sure you want to delete this update?
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Yes, delete update </button>
                    <button type="button" class="btn btn-default btn-test " class="close" data-dismiss="modal" aria-label="Close">No, keep update</button>
                  </div>
                </div>
              </div>
            </div>
             <!-- -->

            <div class="row">
              <p> Section title</p>
              <p class="ml-auto"> Required </p>
              <label class="switch mt-1 ml-2">
                <input type="checkbox" >
                <span class="slider round"></span>
              </label>
            </div>
            <div class="form-group align-form  ">
              <input type="text" placeholder="Pitch deck" style="font-size: 1.3rem" class="p-4 form-control">
            </div>  
            <div class="form-group align-form">
              <p> Upload prompt</p>
              <textarea name="" id="" class="form-control text-wrap" placeholder="dfdf" >
                
              </textarea>
            </div>

            <div class="upload ml-n3 mobileHide">
              <button class="btn btn-secondary" data-toggle="modal" data-target="#uploadModal">
                Upload file
              </button>
              <a href="" class="text-dark" data-toggle="modal" data-target="#deleteModal" ><i class="fas mt-2 fa-trash-alt float-right"></i></a>
            </div>

            
        </div>
          <!-- Upload file -->
          <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addKpi">Upload File</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <label for=""> Name:</label>
                  <input type="text" placeholder="File Name" class="form-control mb-5">

                  <input type="file" class="form-control">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button>
                  <button type="button" class="btn btn-primary  " class="close" data-dismiss="modal" aria-label="Close">Upload</button>
                </div>
              </div>
            </div>
          </div>

          <!-- -->

          <!-- delete modal -->
          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete update?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p> 
                    Are you sure you want to delete this update?
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"> Yes, delete update </button>
                  <button type="button" class="btn btn-default btn-test " class="close" data-dismiss="modal" aria-label="Close">No, keep update</button>
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <div class="row btns-in-row mt-5  mobileHide">
            <button class="btn btn-secondary " data-toggle="modal" data-target="#addText"> Add text request</button>
            <button class="btn btn-secondary ml-2" data-toggle="modal" data-target="#addMetrics"> Add metrics request</button>
            <button class="btn btn-secondary ml-2"  data-toggle="modal" data-target="#uploadModal"> Add file request</button>
          </div>
        </div>

      </div>

      <!-- add text request --> 
      <div class="modal fade" id="addText" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Text Request</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="add text request" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger"  class="close" data-dismiss="modal"> Cancel </button>
              <button type="button" class="btn btn-primary "  data-dismiss="modal" aria-label="Close">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Add file request -->
      <div class="modal fade" id="addMetrics" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete update?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> 
                <input type="text" placeholder="add metrics request" class="form-control">
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger"  class="close" data-dismiss="modal"> Cancel </button>
              <button type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- add file request -->
      <div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete update?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> 
                Are you sure you want to delete this update?
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> Yes, delete update </button>
              <button type="button" class="btn btn-default btn-test " class="close" data-dismiss="modal" aria-label="Close">No, keep update</button>
            </div>
          </div>
        </div>
      </div>

      </section>
      <div style="height: 10rem"></div>
    </main>
    </body>
</html>
