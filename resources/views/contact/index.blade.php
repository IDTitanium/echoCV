<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contacts</title>
      <link rel="icon" href="{{ asset('css/icons/echoVC.png') }}" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <link href="{{ asset('css/contactTable.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
      <!-- Scripts -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="{{ asset('js/jquery.contact.js') }}" defer></script>
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
          <a href="/contact/create" class="btn btn-primary searchContact conTopBtn">Create Contact</a>
        </section>
        <section class="contactMain">
          <div class="widget-wrapper container-fluid" style="padding:0; margin:0">
            <div class="section-wrap-b table-responsive">
              <table id="mySearchableData" class="display table table-hover table-responsive">
                <thead class="tdHead">
                  <tr>
                    <td></td>
                    <td class="tdOthers">NAME</td>
                    <td class="tdCop">COMPANY</td>
                    <td class="tdOthers">EMAIL</td>
                    <td class="tdOthers">PHONE</td>
                    <td class="tdOthers">TAGS</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody class="tdBody">
                  @if(count($contacts) > 0)
                  @foreach ($contacts as $contact)
                  <tr>
                      <td class="tdt"><input type="checkbox" name="" value="{{ $contact->id }}"></td>
                      <td data-search="{{ $contact->fname }} {{ $contact->lname }}" class="tdName">
                        <img src="https://via.placeholder.com/150x150/54de2b/FFFFFF.png?text={{ ucwords($contact->fname[0]) }}{{ ucwords($contact->lname[0]) }}" />
                        {{ ucwords($contact->fname) }} {{ ucwords($contact->lname) }}</td>
                      <td data-search="{{ $contact->company }}" class="tdCop">{{ $contact->company }}</td>
                      <td class="tdOthers">{{ $contact->email }}</td>
                      <td data-order="" class="tdOthers">{{ $contact->phoneNo }}</td>
                      <td class="tdOthers tdTags">{{ $contact->tags }}</td>
                      <td class="tdSettings"><a class="" href="/contact/{{ $contact->id }}">
                        <img src="{{ asset('css/icons/repSchSettings.png') }}" /></a></td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </section><br><br>
        <a href="/contact/create" class="btn btn-default mobileBtn"></a>

      </main>


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
