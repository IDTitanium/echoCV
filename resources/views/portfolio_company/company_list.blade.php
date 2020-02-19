<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Add Chart </title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- Styles -->
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      
      <link href="{{ asset('css/company.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
      <script src="{{asset('js/sidebar.js')}}" defer></script>

  </head>
  <body>

    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    <section class="reboard">
        <div class="head" style="width: 100%">
            <h3 class="float-left"> Portfolio Companies <small class="text-muted small"> 20 total </small>  </h3>
            {{-- <button class="btn btn-default back float-right" > Go Back </button> --}}
            <button class="btn btn-primary btn-add float-right mr-5 "> <i class="fas fa-plus"> </i>
                Add Company </button>
        </div>
        
        <div class="row ">    
          <div class="mobo">  
          <form class="form-inline form-search"  >
                <label class="sr-only" for="inlineFormInputName2"></label>
                <input type="search" class="form-control search-form mb-2  mr-sm-2" style="width: 24rem"="inlineFormInputName2" placeholder="Search files">
              
                <button type="submit" class="btn btn-primary search-btn btn-sm mb-2 p-2">
                  <svg class="svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.0833 13.3333H14.1617L13.835 13.0183C15.0179 11.6464 15.668 9.89481 15.6667 8.08334C15.6667 6.58349 15.2219 5.11734 14.3886 3.87026C13.5554 2.62319 12.371 1.65121 10.9854 1.07725C9.59968 0.503286 8.07492 0.35311 6.6039 0.645715C5.13288 0.93832 3.78166 1.66056 2.72111 2.72111C1.66056 3.78166 0.93832 5.13288 0.645715 6.6039C0.35311 8.07492 0.503286 9.59968 1.07725 10.9854C1.65121 12.371 2.62319 13.5554 3.87026 14.3886C5.11734 15.2219 6.58349 15.6667 8.08334 15.6667C9.96167 15.6667 11.6883 14.9783 13.0183 13.835L13.3333 14.1617V15.0833L19.1667 20.905L20.905 19.1667L15.0833 13.3333ZM8.08334 13.3333C5.17834 13.3333 2.83334 10.9883 2.83334 8.08334C2.83334 5.17834 5.17834 2.83334 8.08334 2.83334C10.9883 2.83334 13.3333 5.17834 13.3333 8.08334C13.3333 10.9883 10.9883 13.3333 8.08334 13.3333Z" fill="white"/>
                  </svg>
                </button>
        
            </form>
            
            <div class="form-group filter ml-3" style="margin-top: 5.5rem; position: relative; left: -20rem">
                <select name="" id="" class="form-control filter border">
                    <option value="" selected disabled> Filters</option>
                </select>
            </div>
          </div>
            <div class=" row ml-4 mt-2 text" >
                <p class="ml-4"> Series A <i class="fas fa-times " style="color: #888888" > </i>
                        </p>
                <p class="ml-5"> Healthcare <i class="fas fa-times mt-1" style="color: #888888"> </i> </p>
                <a href="#" class="btn btn-default mt-n2 ml-5" > Clear all</a>

            </div>
        
        </div>
        <hr class="horizontal mobileOnly shadow">
        {{-- cards --}}
        <div class="row ml-2 mt-5 col-md-12 col-sm-12 carder">
            
                <div class="card col-md-3 col-sm-6" >
                    <img src="{{ asset('css/icons/sony.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left">sony </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Maria</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3  col-sm-12">
                    <img src="{{ asset('css/icons/netflix.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left">  Netlix </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Matthew</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/macd.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> McDonald's </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Matthew</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/ninten.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> Nintendo </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Mark</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/master.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> MasterCard </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Fisayo</p>
                   <p> Analyst: Osamudiamen </p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/electric.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> General Electric </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Matthew</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/pizza.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> Pizza Hut </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Matthew</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/mit.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> Mitsubishi </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Damilola</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>

                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/life.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"> LifeBank </p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> Lead: Tsendai</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>
<a href="#">
                <div class="card col-md-3 " >
                    <img src="{{ asset('css/icons/ibm.png') }}" class="card-img-top mt-3" alt="...">
                   <div class="mt-2">
                        <p class="float-left"><I></I></p>
                        <p class="float-right" style="color:  #7AEF1F" onclick="myFunction(this)"> Open </p>
                   </div>  
                   
                   <p> {{company->$lead}}</p>
                   <p> Analyst: Bimpe</p>
                   
                </div>
                </a>

            
        </div>
    </section>
    <script>
function myFunction(evt) {

   if (evt.innerHTML == 'Open') {
    evt.innerHTML = 'Closed';

  evt.style.color = "red";
  } else {
    evt.innerHTML = 'Open';

evt.style.color = "#7AEF1F";

  }
}
</script>

    </body>
</html>
