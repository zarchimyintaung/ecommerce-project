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
            <h2 class="h5 no-margin-bottom">All Product</h2>
          </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title">
                    <form action="{{ url('product_search') }}" method="get">
                      @csrf
                        <input type="search" class="p-2" name="search">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </form>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach ($product  as $products)

                        <tr>
                            <td>{{ $products->id }}</td>

                            <td>{{ $products->title }}</td>

                            <td>{!!Str::limit( $products->description ,50)!!}</td>

                            <td>{{ $products->category }}</td>

                            <td>{{ $products->price }}</td>

                            <td>{{ $products->quantity }}</td>

                            <td>
                                <img height="100" src="/products/{{$products->image}}" alt="">
                            </td>

                            <td>
                                <a href="{{url('update_product',$products->id)}}" class="btn btn-success">Edit</a>
                            </td>

                            <td>
                                <a href="{{url('delete_product',$products->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                            </td>

                        </tr>

                        @endforeach

                      </tbody>
                    </table>

                  </div>

                </div>
              </div>
            </div>
            {{$product->links()}}
        </div>





      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.foot')
  </body>
</html>


