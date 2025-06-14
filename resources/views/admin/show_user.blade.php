<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        th{
            padding: 10px;
            color: white
        }
        td{
            padding: 10px
        }
    </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
                <h2>Show user</h2>
                <table>
                    <tr style="background-color: tomato" align="center">
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>usertype</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->usertype}}</td>
                            <td><a href="{{url('delete_user',$data->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger">remove</a></td>
                            <td><a href="{{url('update_user',$data->id)}}"  class="btn btn-success">update</a></td>
                        </tr>
                    @endforeach
                </table>
            </center>
          </div>
        </div>
        @include('admin.footer')
      </div>
    </div>
   @include('admin.sc')
  </body>
</html>