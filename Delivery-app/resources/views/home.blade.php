<!DOCTYPE html>
<html>
<head>
  <title>GrandSlice - Pizza Delivery</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
  <div class="navbar">
    <img class="GrandSlice" src="assets/very epic logo.png" alt="imagine a logo">
    <nav>
      <ul>
        <li><a href="#order">Order</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#reserve">Reserve</a></li>
        <li><a href="#chefs">Chefs</a></li>
        <li><a class="cart" href="">@auth<a href="{{url('/showcart',Auth::user()->id)}}">Cart[{{$count}}]</a>@endauth @guest Cart[0]@endguest</a></li>
        <li><a href="#language" class="language">LV</a></li>
        <li><a href="#language" class="language">EN</a></li>
        <li>@if (Route::has('login'))
          <!-- by default the class of login is class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" -->
                <li><div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"></li>
                    @auth
                        <li><x-app-layout>
    
                        </x-app-layout></li>
                    @else
                        <a href="{{ route('login') }}" class="login">Log in</a>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="login">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif</li>
      </ul>
    </nav>
  </div>
  <header>
    <h1 class="slogan">Slice into Happiness!</h1>
    <a class="big-order-button" href="#order">ORDER</a>
  </header>
 <div class="body">
  <section class="section-deals">
    <br>
    <h2>Hottest deals</h2>
    <div class="deals">
      <div class="deal">
        <a class="deal-img" href=""><img src="assets/deal1.png" alt="Deal 1"></a>
      </div>
      <div class="deal">
        <a class="deal-img" href=""><img src="assets/deal2.png" alt="Deal 2"></a>
      </div>
    </div>
    <br>
  </section>
<!-- insert chefs -->
@include("foodchef")
    <div class="order-options" id="order">
      <h3>Order Options</h3>
      <div class="button-container">
        <a class="option-button" id="order-online-button" href="/menu">
          <span>Order Online</span>
        </a>
        <!-- <a class="option-button" id="takeaway-button" href="#">
          <span>Take-away</span>
        </a> -->
      </div>
    </div>
 </div>
 <!-- reservation here -->
  @include("reservation")
  <section id="locations">
    <h2>Our Locations</h2>
    <ul class="location-list">
      <li>Brīvības iela 104</li>
      <li>Krišjāņa Valdemāra iela 2</li>
      <li>Ģertrūdes iela 70</li>
      <li>Origo</li>
      <li>Spice</li>
    </ul>
  </section>

  <footer>
    <div class="footer-menu">
      <ul>
        <li><a href="#contacts">Contacts</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#policies">Policies</a></li>
      </ul>
    </div>
    <p>&copy; 2023 GrandSlice. All rights reserved.</p>
  </footer>
</body>
</html>
