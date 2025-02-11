<!DOCTYPE html>
<html>
<head>
    <title>Pizza Ordering</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
    <h1>Pizza Menu</h1>
    <div class="menu">
        <div class="product">
            <img url='/foodimage/{{$data->image}}'>
            <h2>Pizza 1</h2>
            <p>Description</p>
            <button>Add to Cart</button>
        </div>

        <!-- Repeat the above code block for each product -->
    </div>
</body>
</html>
