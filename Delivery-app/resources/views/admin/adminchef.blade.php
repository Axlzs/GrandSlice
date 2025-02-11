<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- admin is folder and admincss is the file  -->
    @include("admin.admincss");
  </head>
  <body>
  <div class="container-scroller" style="position: relative; top: 60px; right: -150px;">
    @include("admin.navbar");
    <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name</label>
            <input style="color: blue;" type="text" name="name" id="" required="" placeholder="Enter Name">
        </div>
        <div>
            <label>Speciality</label>
            <input style="color: blue;" type="text" name="speciality" id="" required="" placeholder="Enter the Speciality">
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image" required="">
        </div>
        <div>
            <input style="border: 2px solid white; background-color: red; color: white; width: 70px; height: 40px" type="submit" value="save">
        </div>
    </form>
    <div>
    <table bgcolor="black">
        <tr>
            <th style="padding: 30px;">Chef Name</th>
            <th style="padding: 30px;">Speciality</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px;">Action 2</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img style="height: 100px" src="/chefimage/{{$data->image}}" alt=""></td>
            <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
            <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
  </div>
    @include("admin.adminscript");

  </body>
</html>