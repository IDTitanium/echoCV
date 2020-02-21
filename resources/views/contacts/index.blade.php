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
    <link href="{{ asset('css/contactTable.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">
    <!-- Scripts -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <script src="{{ asset('js/jquery.contact.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style media="screen">

    .btnConTable:focus, .btnConTable1:focus {
      box-shadow: 0 0 0 0 rgba(0,0,0,0)!important;
      outline: 0px auto -webkit-focus-ring-color;
    }

    </style>
</head>
<body>

    <div class="wrapper">
      @include('layouts.sidebar')
    </div>
    <div class="" style="margin-left:12rem">
      @include('inc.messages')
    </div>
    <main class="wholeContent">
      <section class="header searchContact">
        <div class="rep">Contacts</div>
        <a href="/contacts/create" class="btn btn-primary searchContact conTopBtn">Create Contact</a>
      </section>

      <section class="contactMain">
        <div class="widget-wrapper container-fluid" style="padding:0; margin:0">
          <div class="section-wrap-b table-responsive">
            <div class="d-flex justify-content-flex-start btnDelAll">
              <button class="delete-all mr-3 btnConTable" data-url=""><img src="{{ asset('css/icons/metricdel.svg') }}"/></button>
              <button class="pr-4 btnConTable1" data-url=""><img src="{{ asset('css/icons/conArch.svg') }}"/></button>
              <div class=""></div>
            </div>

            <table id="mySearchableData" class="display table table-hover table-responsive">
              <thead class="tdHead">
                <tr>
                  <td class="tdt"><input type="checkbox" id="check_all"></td>
                  <td class="tdOthers">NAME</td>
                  <td class="tdCop">COMPANY</td>
                  <td class="tdOthers">EMAIL</td>
                  <td class="tdOthers">PHONE</td>
                  <td class="tdOthers">TAGS</td>
                </tr>
              </thead>
              <tbody class="tdBody">
                @if(count($contacts) > 0)
                @foreach ($contacts as $contact)
                <tr id="tr_{{$contact->id}}">
                  <td class="tdt"><input type="checkbox" class="checkbox" data-id="{{$contact->id}}"></td>
                  <td data-search="{{ $contact->fname }} {{ $contact->lname }}" class="tdName" onclick="window.location='/contact/{{ $contact->id }}'">
                    <img src="https://via.placeholder.com/150x150/54de2b/FFFFFF.png?text={{ ucwords($contact->fname[0]) }}{{ ucwords($contact->lname[0]) }}" />
                    {{ ucwords($contact->fname) }} {{ ucwords($contact->lname) }}</td>
                  <td data-search="{{ $contact->company }}" class="tdCop" onclick="window.location='/contact/{{ $contact->id }}'">{{ $contact->company }}</td>
                  <td class="tdOthers">{{ $contact->email }}</td>
                  <td data-order="" class="tdOthers" onclick="window.location='/contact/{{ $contact->id }}'">{{ $contact->phoneNo }}</td>
                  <td class="tdTags" onclick="window.location='/contact/{{ $contact->id }}'">{{ $contact->tags }}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </section><br><br>
      <a href="/contact/create" class="btn btn-default mobileBtn"></a>
      <div class="inputSearch">
        <img src="{{ asset('css/icons/grsearch.svg') }}" >
      </div>
    </main>

</body>


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


<!-- Delete Contacts -->
<script type="text/javascript">

    $(document).ready(function () {
        $('#check_all').on('click', function(e) {

         if($(this).is(':checked',true))
         {
            $(".checkbox").prop('checked', true);
         } else {
            $(".checkbox").prop('checked',false);
         }
        });

         $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
         });

        $('.delete-all').on('click', function(e) {

            var idsArr = [];
            $(".checkbox:checked").each(function() {
                idsArr.push($(this).attr('data-id'));
            });

            if(idsArr.length <=0)
            {
                alert("Please select atleast one record to delete.");
            }  else {

                if(confirm("Are you sure, you want to delete the selected categories?")){

                    var strIds = idsArr.join(",");

                    $.ajax({
                        url: "{{ route('contact.multiple-delete') }}",
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {
                                  $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {

                            alert(data.responseText);

                        }
                    });

                }
            }
        });

        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });
    });

</script>

</html>
