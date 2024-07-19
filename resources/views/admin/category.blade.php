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
                    <form action="{{url('add_category')}}" method="post">

                        @csrf

                      <div class="form-group">
                        <label class="form-control-label">Category</label>
                        <input type="text" name="category" class="form-control">
                      </div>

                      <div class="form-group">
                        <input type="submit" value="Add Category" class="btn btn-primary">
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Category Table</strong></div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>

                          <th>ID</th>
                          <th>Category Name</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->category_name}}</td>
                            <td>
                                <a href="{{url('edit_category',$data->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('delete_category',$data->id)}}" onclick="confirmation(event)"  class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
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




