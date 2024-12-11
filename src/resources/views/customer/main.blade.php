<!DOCTYPE html>
<html>
@include('customer.layout.head')
@include('customer.layout.customCss')
<link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/js/dropify/dropify.css') }}" />


<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('customer.layout.sidebar')
          
           
            <div class="layout-page">
                <!-- Navbar -->
                @include('customer.layout.header')
                <!-- / Navbar -->
               
  
                <!-- Content wrapper -->
                <div class="content-wrapper">
                  <div class="container-xxl flex-grow-1 container-p-y">
                    @include('customer.layout.error')
                    @yield('content')
                  </div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>
          </div>
            @include('customer.layout.footer')

            <!--Datatable External Js-->
            {{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}
            {{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}
            <script src="{{asset('assets/js/dataTable/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('assets/js/dataTable/dataTables.bootstrap4.min.js')}}"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--External Js-->
            <script src="{{ asset('assets/js/dropify/dropify.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('.dropify').dropify();
                });
            </script>
            <script src="{{asset('assets/sweetalert/sweetalert2.all.min.js')}}"></script>  
            <script src="{{asset('assets/sweetalert/sweetalert2.min.css')}}"></script>  
            @yield('javascript')
          
          <script src="{{ asset('assets/js/select2.min.js') }}" ></script>
          <script>
            $(".select2").select2({
           
              allowClear:true,
              placeholder: 'Position'
            });
            $(".select2").select2();

          </script>

</body>

</html>
