<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- admin is folder and admincss is the file  -->
    @include("admin.admincss");
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar");
    <!-- this is the same menu just pasted from foodmenu.blade.php, basically the same as when we insert a new product -->
    <div style="position: relative; top: 60px; right: -150px;">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style=" margin-bottom: 15px">
                <label for="">Title</label>
                <input style="color: black" type="text" name="name" value="{{$data->name}}" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">Price</label>
                <input style="color: black" type="num" name="price" value="{{$data->price}}" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">Description</label>
                <input style="color: black" type="text" name="description" value="{{$data->description}}" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">Old image</label>
                <img style="height: 200px;" src="/foodimage/{{$data->image}}" alt="">
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">New image</label>
                <input type="file" name="image" required>
            </div>
            <div style=" margin-bottom: 15px">
                <input style="border: 2px solid white; background-color: red; color: white; width: 70px; height: 40px" type="submit" value="Save">
            </div>

        </form>
        <div>

  </div>
    @include("admin.adminscript");

  </body>
</html>