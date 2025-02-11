<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- admin is folder and admincss is the file  -->
    @include("admin.admincss");
  </head>
  <body>
    <!-- need this div bellow to display everything where it needs to be eg next to the menu in the big empty space -->
  <div class="container-scroller">
    @include("admin.navbar");
    <div style="position: relative; top: 60px; right: -150px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div style=" margin-bottom: 15px">
                <label for="">Title</label>
                <input style="color: black" type="text" name="name" placeholder="write a title" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">Price</label>
                <input style="color: black" type="num" name="price" placeholder="add a price" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">image</label>
                <input type="file" name="image" required>
            </div>
            <div style=" margin-bottom: 15px">
                <label for="">Description</label>
                <input style="color: black" type="text" name="description" placeholder="write a description" required>
            </div>
            <div style=" margin-bottom: 15px">
                <input style="border: 2px solid white; background-color: red; color: white; width: 70px; height: 40px" type="submit" value="Save">
            </div>

        </form>
        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px;">Food Name</th>
                    <th style="padding: 30px;">Price</th>
                    <th style="padding: 30px;">Description</th>
                    <th style="padding: 30px;">Image</th>
                    <th style="padding: 30px;">Action</th>
                    <th style="padding: 30px;">Action 2</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img style="height: 200px;" src="/foodimage/{{$data->image}}" alt=""></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
  </div>
    @include("admin.adminscript");

  </body>
</html>