
<script>
    function confirmation(ev)
    {
        ev.preventDefault();

        var UrlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(UrlToRedirect);

        swal({

            title: "Are You Sure To Delete This",
            text: "This delete will be permanent",
            icon : "warning",
            buttons : true,
            dangerMode : true,

        })

        .then((willCancel)=>{

            if(willCancel)
            {
                window.location.href = UrlToRedirect;
            }
        });
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/popper.js/umd/popper.min.js') }}"> </script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
<script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/charts-home.js') }}"></script>
<script src="{{ asset('backend/js/front.js') }}"></script>
