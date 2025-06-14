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
                <table>
                    <tr style="background-color: tomato" align="center">
                        <th>Name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr align="ceenter">
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->password}}</td>
                            <td>{{$data->message}}</td>
                            <td><a href="{{url('delete_message',$data->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger">remove</a></td>
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