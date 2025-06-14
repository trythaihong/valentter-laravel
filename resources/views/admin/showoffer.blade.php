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
            <h2>show offer</h2>
                <table>
                    <tr style="background-color: tomato" align="center">
                        <th>Name</th>
                        
                        <th>des</th>
                        <th>delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $data)
                        <tr align="ceenter">
                            <td>{{$data->titles}}</td>
                            <td>{{$data->des}}</td>
                            
                            <td><a href="{{url('delete_offer',$data->id)}}" onclick="return confirm('are you sure')" class="btn btn-danger">remove</a></td>
                            <td><a href="{{url('update_offer',$data->id)}}"  class="btn btn-danger">edit</a></td>
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