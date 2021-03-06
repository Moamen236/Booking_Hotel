@extends('web.layout')

@section('title', 'Rooms')

@section('content')
    
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url({{ asset("web/images/breadcrumb.jpg") }}); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>ROOMS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Rooms</li>
            </ol>
          </div>
        </div>
    </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-list-view">
        <div class="container">
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/single/single1.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">SINGLE ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???89 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="favorite-item">
              <i class="fa fa-star-o"></i>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/double/double.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">DOUBLE ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 2 King</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???129 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/deluxe/deluxe.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">DELUXE ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???189 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/family/family.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">FAMILY ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 2 King and 1 Sofabed</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???149 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/king/king.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">KING ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???289 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="favorite-item">
              <i class="fa fa-star-o"></i>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/honeymoon/honeymoon.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">HONEYMOON ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???169 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/view/view.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">ROOM WITH VIEW</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King and 1 Sofabed</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???119 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/luxury/luxury.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">LUXURY ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 2 King</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???349 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.html"><img src="{{ asset("web/images/rooms/small/small.jpg") }}" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.html">SMALL ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">???39 / night</span>
                  <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- PAGINATION -->
          <nav class="pagination">
            <ul>
              <li class="prev-pagination">
                <a href="#">
                  &nbsp;<i class="fa fa-angle-left"></i>
                  Previous &nbsp;</a>
              </li>
              <li class="active">
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>...</li>
              <li>
                <a href="#">7</a>
              </li>
              <li>
                <a href="#">8</a>
              </li>
              <li>
                <a href="#">9</a>
              </li>
              <li class="next_pagination">
                <a href="#">
                  &nbsp; Next
                  <i class="fa fa-angle-right"></i>
                  &nbsp;
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </main>

@endsection