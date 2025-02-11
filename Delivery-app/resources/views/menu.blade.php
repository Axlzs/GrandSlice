<!DOCTYPE html>
<html>
<head>
    <title>Pizza Ordering</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
    <h1>Pizza Menu</h1>
    <div class="menu">
        @foreach($data as $data)
        <form action="{{url('/addcart',$data->id)}}" method="post">
            @csrf
        <div class="product">
            <img src="/foodimage/{{$data->image}}" alt="Pizza 1">
            <h2 class="productName">{{$data->name}}</h2>
            <h3 class="price">{{$data->price}}$</h3>
            <p class="description">{{$data->description}}</p>
            <!-- <button class="addToCart">Add to Cart</button> -->
            <input type="number" name="quantity" min="1" value="1" style="width: 80px">
            <input class="addToCart" type="submit" value="Add To Cart">
        </div>
        </form>
        @endforeach
        <!--style="background-image: url('/foodimage/{{$data->image}}');"-->
    </div>
    <div>
    <a class="cart" href="">@auth<a href="/redirects">Go back</a>@endauth @guest <a href="/">Go back</a>@endguest</a>
    </div>
</body>
</html>
