<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style>
        th{
            padding: 10px;
            color: white
        }
        td{
            padding: 10px
        }
        label{
            width: 200px
        }
        input{
            width: 200px;
            color: black
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
                <h2>Eidt user</h2>
                <form action="{{url('edit_user',$data->id)}}" method="POST">
                    @csrf
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$data->name}}">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$data->email}}">
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input type="number" name="phone" value="{{$data->phone}}">
                    </div>
                    <div>
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{$data->address}}">
                    </div>
                    <div>
                        <label for="">Usertype</label>
                        <input type="text" name="usertype" value="{{$data->usertype}}">
                    </div>
                    <div>
                        <input type="submit"  class="btn btn-primary" value="update">
                    </div>
                </form>
            </center>
          </div>
        </div>
        @include('admin.footer')
      </div>
    </div>
   @include('admin.sc')
  </body>
</html>