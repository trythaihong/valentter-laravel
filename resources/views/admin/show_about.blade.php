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
              <h2>show about</h2>
                <div style="margin-top: 30px">
                    <table>
                        <tr style="background-color: tomato" align="center"> 
                            <th>Name</th>
                            <th>des</th>
                            <th>title</th>
                            <th>sub_des</th>
                            <th>delete</th>
                            <th>Update</th>
                        </tr>
                        @foreach ($data as $data)
                            <tr align="center">
                                <td>{{$data->names}}</td>
                                <td>{{$data->des}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->sub_des}}</td>
                                <td><a href="{{url('delete_about',$data->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger">remove</a></td>
                                <td><a href="{{url('update_about',$data->id)}}"  class="btn btn-danger">edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </center>
        </div>
       
        @include('admin.footer')
      </div>
    </div>
   @include('admin.sc')
  </body>
</html>