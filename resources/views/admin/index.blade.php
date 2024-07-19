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
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>

        @include('admin.body')

      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.foot')
  </body>
</html>

