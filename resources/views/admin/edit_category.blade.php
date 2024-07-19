<!DOCTYPE html>
<html>
  <head>
    @include('admin.head')
  </head>
  <body>
    <!--Header Section Start -->
    @include('admin.header')
    <!--Header Section End -->

        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">

        <div class="page-header">
            <div class="container-fluid">

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="block-body">
                    <form action="{{url('update_category',$data->id)}}" method="post">

                        @csrf

                      <div class="form-group">
                        <label class="form-control-label">Category</label>
                        <input type="text" name="category" value="{{$data->category_name}}" class="form-control">
                      </div>

                      <div class="form-group">
                        <input type="submit" value="Update Category" class="btn btn-primary">
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>


      </div>

    <!-- JavaScript files-->
    @include('admin.foot')
  </body>
</html>




