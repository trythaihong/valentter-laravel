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
                <h2>Eidt offer</h2>
                <form action="{{url('edit_title',$data->id)}}" method="POST">
                    @csrf
                    <div>
                        <label for="">title</label>
                        <input type="text" name="title" value="{{$data->titles}}">
                    </div>
                    <div>
                        <label for="">des</label>
                        <input type="text" name="des" value="{{$data->des}}">
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