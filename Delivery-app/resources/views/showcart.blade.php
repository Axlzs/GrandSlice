<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
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
        <li><a class="cart" href="{{url('/showcart',Auth::user()->id)}}">@auth Cart[{{$count}}] @endauth @guest Cart[0]@endguest</a></li>
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
  <table align="center">
    <tr>
        <th style="padding: 30px;">Food</th>
        <th style="padding: 30px;">Price</th>
        <th style="padding: 30px;">Quatnity</th>
        <th style="padding: 30px;">Action</th>
    </tr>
    <form action="{{url('orderconfirm')}}" method="post">
        @csrf
    @foreach($data as $data)
    <tr align="center">
        <td>
        <input type="text" name="foodname[]" value="{{$data->name}}" hidden="">{{$data->name}}</td>
        <input type="text" name="price[]" value="{{$data->price}}" hidden="">{{$data->price}}</td>
        <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">{{$data->quantity}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->quantity}}</td>

    </tr>
    @endforeach

    @foreach($data2 as $data2)
    <tr style="position: relative; top: -210px; right: -360px">
        <td><a href="{{url('/remove',$data2->id)">Remove</a></td>
    </tr>
    @endforeach
  </table>
  <div align="center" style="padding: 100px; background-color: #F4C129;">
    <button type="button" style="background-color: #0c5fff; height: 50px; width: 200px; border-radius: 10px; color: white;" onmouseover="this.style.backgroundColor='blue'" onmouseout="this.style.backgroundColor='#0c5fff'" class="order" id="order">Order</button>
  </div>

  <div id="appear" align="center" style="padding: 10px; display: none;" >
    <div style="padding: 10px;">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div style="padding: 10px;">
        <label for="">Phone</label>
        <input type="number" name="phone" placeholder="Phone Number">
    </div>
    <div style="padding: 10px;">
        <label for="">Adress</label>
        <input type="text" name="address" placeholder="Address">
    </div>
    <div style="padding: 10px;">
        <input style="background-color: green; height: 50px; width: 200px; border-radius: 10px; color: white;" onmouseover="this.style.backgroundColor='darkgreen'" onmouseout="this.style.backgroundColor='green'" type="submit" value="Order Confirm">

        <button type="button" style="background-color: red; height: 50px; width: 100px; border-radius: 10px; color: white;" onmouseover="this.style.backgroundColor='darkred'" onmouseout="this.style.backgroundColor='red'" id="close">Close</button>
    </div>
  </div>
  </form>
  <script type="text/javascript">
    $("#order").click(
        function()
        {
            $("#appear").show();
        }
    );
    $("#close").click(
        function()
        {
            $("#appear").hide();
        }
    );
  </script>
</body>
</html>