@extends('web.layout')

@section('title', 'Booking')

@section('content')
    
    <div class="page-title gradient-overlay op6" style="background: url({{ asset("web/images/breadcrumb.jpg") }}); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Booking Form</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Booking Form</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <!-- CONTENT -->
            <div class="col-lg-12 col-12">
              <div class="section-title">
                <h4>BOOK YOUR STAY</h4>
                <p class="section-subtitle">Book your Room Now</p>
              </div>
              <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia deleniti fuga recusandae perferendis modi voluptate, ad ratione saepe voluptas nam provident reiciendis velit nulla repellendus illo consequuntur amet similique hic.</p>
              <!-- BOOKING FORM -->
              <form class="booking-form-advanced" action="{{ route('booking.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>CHECK-IN/OUT
                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input type="text" class="datepicker form-control " name="booking_date" readonly="readonly">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Guests
                        <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <div class="panel-dropdown">
                        <div class="form-control guestspicker">Guests
                          <span class="gueststotal"></span></div>
                        <div class="panel-dropdown-content">
                          <div class="guests-buttons">
                            <label>Adults
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="booking_adults" class="booking-guests" value="0">
                              <div class="plus"></div>
                            </div>
                          </div>
                          <div class="guests-buttons">
                            <label>Cildren
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="booking_children" class="booking-guests" value="0">
                              <div class="plus"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Room Type</label>
                      <select name="booking_roomtype" class="form-control" title="Select Room Type" data-header="Select Room Type">
                        <option value="Single Room" data-subtext="<span class='badge badge-info'>€89 / night</span>">Single Room </option>
                        <option value="Double Room" data-subtext="<span class='badge badge-info'>€129 / night</span>">Double Room</option>
                        <option value="Deluxe Room" data-subtext="<span class='badge badge-info'>€89 / night</span>">Deluxe Room</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Your Comments</label>
                      <textarea class="form-control" name="booking-comments" placeholder="Your Comments..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn mt50 float-right">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                      BOOK A ROOM NOW
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>

@endsection