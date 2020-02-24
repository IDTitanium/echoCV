@extends('layouts.reports')
@section('styles')

@stop
@section('content')
        <section class="header searchContact">
          <div class="rep">Reports</div>
          <a href="/reports/create" class="btn btn-primary searchContact repTopBtn">New Report</a>
        </section>

        <section class="message">
          <ul class="nav nav-tabs nav-lg repStatus repMain" role="tablist" style="margin-bottom:1.2rem;">
            <li role="presentation">
              <a class="repTitle"  href="/reports">
                <img src="{{ asset('css/icons/repAll.svg') }}">ALL</a>
            </li>
            <li role="presentation">
              <a class="repTitle"  href="/sent_report">
                <img src="{{ asset('css/icons/repSent.svg') }}">SENT</a>
            </li>
            <li role="presentation">
              <a class="repTitle" href="/received_report">
                <img src="{{ asset('css/icons/repRec.svg') }}">RECEIVED</a>
            </li>
            <li class="active" role="presentation">
              <a class="repTitle" href="/scheduled_report">
                <img src="{{ asset('css/icons/repSch1.svg') }}">SCHEDULED</a>
            </li>
            <li role="presentation">
              <a class="repTitle" href="/draft_report">
                <img src="{{ asset('css/icons/repDra.svg') }}">DRAFT</a>
            </li>
          </ul>
          <div class="repMobParent">
            <ul class="navbar-nav repStatus repMobile">
              <li class="nav-item dropdown repMobActive">
                <a id="navbarDropdown" class="nav-link dropdown-toggle repTitle" href="/scheduled_report" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>SCHEDULED
                </a>
                <div class="dropdown-menu repMobDropdown" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item repTitle" href="/reports">ALL</a>
                  <a class="dropdown-item repTitle" href="/sent_report">SENT</a>
                  <a class="dropdown-item repTitle" href="/received_report">RECEIVED</a>
                  <a class="dropdown-item repTitle" href="/draft_report">DRAFT</a>
                </div>
              </li>
            </ul>
            <a href="/new_report" ><img src="{{ asset('css/icons/repMobCreate.png') }}" /></a>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="SearchAreaTabs-1" role="tab-panel" style="background:transparent!important">
              <div class="widget-wrapper container-fluid table-responsive">
                <table id="mySearchableData" class="display table table-hover table-responsive" cellspacing="0">
                  <thead class="tdSchHead">
                    <td></td>
                    <td>To</td>
                    <td>Type</td>
                    <td>Message</td>
                    <td>Next send date</td>
                    <td>Actions</td>
                  </thead>
                  <tbody class="repMainTable" style="width:100vw">
                    @foreach ($reports as $report)
                    <tr style="width:100%">
                      <td><input type="checkbox" name="" value=""></td>
                      <td data-search="Tiger Nixon" class="tdDept conEmailPhone">--- receipients</td>
                      <td class="tdName">Monthly</td>
                      <td class="tdName">{{ $report->content }}</td>
                      <td class="tdName">2 Nov 2020 12:00am</td>
                      <td class="tdSettings"><img src="{{ asset('css/icons/repSchSettings.png') }}" /></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tbody class="repMobTable tdSchBody" style="width:100vw">
                    <tr style="display:flex!important; justify-content:flex-start;">
                      <td class="tdt" style="display:flex!important; justify-content:flex-start; margin-top:1rem">
                        <input type="checkbox" name="" value=""></td>
                      <td data-search="Tiger Nixon" class="tdDept" style="display:flex!important; flex-direction:column; width:90vw; margin-right:0.5rem">
                        <div class="" style="display:flex!important; justify-content:space-between">
                          <div class="conEmailPhone">T. Nixon</div>
                          <div class="">Timestamp</div>
                        </div>
                        <div class="">System Arc</div>
                        <div class="">Message.... Message.... Message....</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>

        </section>
  
  @stop
