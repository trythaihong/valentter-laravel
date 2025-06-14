<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        input{
            width: 200px;
            color: black;
            padding: 10px
        }
        label{
            width: 200px;
            padding: 10px
        }
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
                    <h2 style="margin-bottom: 20px">Create offer post</h2>
                    <form action="{{url('create_offer_post')}}" method="POST">
                        @csrf
                        <div>
                            <label for="">title</label>
                            <input type="text" placeholder="name" name="title">
                        </div>
                        <div>
                            <label for="">des</label>
                            <input type="text" placeholder="des" name="des">
                        </div>
                        
                        <div>
                            <input type="submit" class="btn btn-primary">
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