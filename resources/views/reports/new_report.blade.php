<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>New Report</title>
      <link href="{{ asset('css/contactTable.css') }}" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

      <!-- Scripts -->
      <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <style>
  .ck.ck-editor{
    width: 70%;
    margin-left: 17%;
    margin-top: 6%;

  }
  .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
     height: 60vh;
  }
  </style>
  <body>
    <div class="wrapper">

      @include('layouts.sidebar')
        </div>
        <main class="wholeContent">
          <h3 class="newRepNav">Reports</h3>
          <form action="{{ route('reports.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="newReport">
              <a href="/reports" class="btn btn-default">Back</a>
              <a href="/reports" class="btn btnClose">Close</a>
              <div class="newRepNavBtns">
                <button type="submit" name="button" class="btn btn-default">Save & Close</button>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <button type="submit" class="btn btn-primary btnNow" data-toggle="tooltip" data-placement="left" title="Send report now">Send now</button>
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" aria-haspopup="true"
                    aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Schedule report"></button>
                  </div>
                </div>
              </div>
            </section>
    
          </form>
               
        <div id="editor" class="fomm-control">
          <h1> Add Some Text</h1>
        </div>
        <div class="container d-flex justify-content-center mt-3 pt-1  " >
          <button type="button" name="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" id="open">Add text request</button>
          <button type="button" name="button" class="btn btn-secondary ml-3" >Add metrics request</button>
          <button type="button" name="button" class="btn btn-secondary ml-3" >Add file request</button>
        </div>
        </main> 

   
        <script>
                ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
                        
        </script>
  </body>
</html>
