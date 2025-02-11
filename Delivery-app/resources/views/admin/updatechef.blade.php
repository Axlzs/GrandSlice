<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- admin is folder and admincss is the file  -->
    <base href="/public">
    @include("admin.admincss");
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar");
    <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Chef Name</label>
            <input style="color: blue;"type="text" name="name" value="{{$data->name}}">
            {{$data->name}}
        </div>
        <div>
            <label for="">Speciality/label>
            <input style="color: blue;"type="text" name="speciality" value="{{$data->speciality}}">
            {{$data->name}}
        </div>
        <div>
            <label for="">Old Image</label>
            <img style="height: 300px;"src="/chefimage/{{$data->image}}" alt="">
        </div>
        <div>
            <label for="">New Image</label>
            <input type="file" name="image">
        </div>
        <div>
            <input style="border: 2px solid white; background-color: red; color: white; width: 300px; height: 40px" type="submit" value="Update Chef" required="">
        </div>
    </form>
  </div>
    @include("admin.adminscript");

  </body>
</html>