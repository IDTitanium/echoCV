<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contacts</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
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
        @include('inc.messages')

        <section class="header searchContact">
          <div class="rep">Contacts</div>
          <a href="/add_contact" class="btn btn-primary searchContact conTopBtn">Create Contact</a>
          <!-- <input type="submit" name="" class="btn btn-primary searchContact" value="Create Contact" /> -->
        </section>
        <section class="message">

        <div class="widget-wrapper container-fluid" style="padding:0; margin:0">
          <div class="section-wrap-b table-responsive">

            <table id="mySearchableData" class="display table table-hover table-responsive" style="margin-top:-0.5rem; padding: 0 0.6rem; width:100vw">
            <!-- <table class="table table-responsive table-stripped table-hover"> -->
              <thead style="width:100vw">
                <tr>
                  <td></td>
                  <td class="tdOthers">NAME</td>
                  <td class="tdOthers">COMPANY</td>
                  <td class="tdOthers">EMAIL</td>
                  <td class="tdOthers">PHONE</td>
                  <td class="tdOthers">TAGS</td>
                </tr>
              </thead>
              <tbody style="width:100vw">
                @if(count($contacts) > 0)
                @foreach ($contacts as $contact)

                <tr>
                  <td class="tdTag"><input type="checkbox" name="" value=""></td>
                  <td data-search="{{ $contact->fname }} {{ $contact->lname }}" class="tdName">
                    <img src="https://via.placeholder.com/150x150/54de2b/FFFFFF.png?text={{ ucwords($contact->fname[0]) }}{{ ucwords($contact->lname[0]) }}" />
                    {{ ucwords($contact->fname) }} {{ ucwords($contact->lname) }}</td>
                  <td data-search="{{ $contact->company }}" class="tdOthers">{{ $contact->company }}</td>
                  <td class="tdOthers">{{ $contact->email }}</td>
                  <td data-order="" class="tdOthers">{{ $contact->phoneNo }}</td>
                  <td class="tdOthers tdTags">{{ $contact->tags }}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
        </section>
        <button type="button" class="btn btn-default mobileBtn" data-toggle="modal" data-target="#myModal" id="open">+</button>

        <br><br><br><br>
      </main>


<!-- Modal to create new contact -->
      <div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="details-l" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">


              <h5 class="modal-title">Create Contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2" style="display:flex; justify-content:space-between">
                      <div class="fname">
                        <!-- <label for="Name">First Name*:</label> -->
                        <input type="text" class="form-control" name="name" id="name" required style="
                        border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="First Name*">
                      </div>
                      <div class="lname">
                          <!-- <label for="Name">Last Name*:</label> -->
                          <input type="text" class="form-control" name="name" id="name" required style="
                          border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-md-12 mr-2 ml-2">
                        <!-- <label for="Club">Email*:</label> -->
                        <input type="email" class="form-control" name="club" id="email" required style="
                        border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Email*">
                      </div>
                  </div>
                  <div class="row">
                     <div class="form-group col-md-12 mr-2 ml-2">
                        <!-- <label for="Phone">Phone:</label> -->
                        <input type="tel" class="form-control" name="country" id="country" style="
                        border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Phone">
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <!-- <label for="Company">Company:</label> -->
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Company">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <!-- <label for="Title">Title:</label> -->
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 mr-2 ml-2">
                      <!-- <label for="Tags">Tags:</label> -->
                      <input type="text" class="form-control" name="score" id="score" style="
                      border: 0px solid #AAAAAA; border-bottom: 1px solid #ccc; border-radius:0" placeholder="Tags">
                    </div>
                  </div>
              </div>

            </div>
            <div class="modal-footer" style="justify-content:flex-start!important; padding:1.5rem!important">

              <button type="submit" class="btn btn-save" style="background:#ddd; float:left!important">Save</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
        <!-- </form>
      </div> -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{ asset('js/jquery.dataTables.js') }}" defer></script>
  </script>



  <!--searchable table start -->
  <script type="text/javascript" language="javascript" class="init">
  //	$('#mydata').dataTable();
  $(document).ready(function() {
      $('#mySearchableData').DataTable();
  } );
  </script>
  <!--able table END -->

  <script>

    $(document).ready(function() {
    $('#filterOptions li').click(function() {
      // fetch the class of the clicked item
      var ourClass = $(this).attr('class');

      // reset the active class on all the buttons
      $('#filterOptions li').removeClass('active');
      // update the active state on our clicked button
      $(this).parent().addClass('active');

      if(ourClass == 'all') {
        // show all our items
        $('#ourHolder').children('div').show();
      }
      else {
        // hide all elements that don't share ourClass
        $('#ourHolder').children('div:not(.' + ourClass + ')').hide();
        // show all elements that do share ourClass
        $('#ourHolder').children('div.' + ourClass).show();
      }
      return false;
    });
  });


  function validateForm()
  {
  formObj = document.login;
      if (formObj.eml.value == "") {
      alert("You have not filled in the User Name field.");
  formObj.eml.focus();
      return false;
      }
      else if (formObj.pwd.value == "") {
      alert("You have not filled in the Password field.");
  formObj.pwd.focus();
      return false;
      }
  formObj.btnLogin.innerHTML='Wait..';
  formObj.btnLogin.disabled=true;
  }


  function Iforgot()
  {
  str = "lg.pw.php?eml=" + login.eml.value;
  document.location=str;
  }


  function FilterClear() {
  ShipmentFilter.txtRefOt.value="";
  ShipmentFilter.ddStatus.value=null;
  ShipmentFilter.ddMode.value=null;
  ShipmentFilter.ddCountryOrig.value=null;
  ShipmentFilter.ddCountryDest.value=null;
  ShipmentFilter.txtCityOrig.value="";
  ShipmentFilter.txtCityDest.value="";
  ShipmentFilter.txtPortLoad.value="";
  ShipmentFilter.txtPortDischarge.value="";
  ShipmentFilter.txtClient.value=null;
  ShipmentFilter.txtShipper.value=null;
  ShipmentFilter.txtConsignee.value=null;

  }


  function FilterReset() {
  FilterClear();
  ShipmentFilter.ddStatus.value=99;
  }
</script>


  </body>
  </html>
