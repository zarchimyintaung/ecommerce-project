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
              <div class="col-lg-6">
                <div class="block">

                  <div class="block-body">
                    <form action="{{url('edit_product',$data->id)}}" method="Post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label class="form-control-label">Product Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" required>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <textarea name="description"  class="form-control" required>{{$data->description}}</textarea>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Price</label>
                        <input type="text" name="price" value="{{$data->price}}" class="form-control">
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Quantity</label>
                        <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control">
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Product Category</label>
                        <select name="category" class="form-control" >

                            <option value="{{$data->category}}">{{$data->category}}</option>

                            @foreach ($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach

                        </select>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Current Image</label>
                        <img width="100" src="/products/{{$data->image}}" alt="">
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">New Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>

                      <div class="form-group">
                        <input type="submit" value="Update Product" class="btn btn-primary">
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



