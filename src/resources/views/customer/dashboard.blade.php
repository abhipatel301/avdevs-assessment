@extends('customer.main')



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        
        <div class="row text-center">

            <div class="col-lg-6 col-md-6 col-xs-6 col-6 mb-4">
                <div class="card bg-gold text-white">
                    <div class="card-body">

                        <a href="">
                            <h2 class="card-title mb-2 text-white">Welcome - {{Session::get('customer.name')}}</h2>
                        </a>
                        <span>You have successfully Logined</span>

                    </div>
                </div>

               
            </div>

           

          

        </div>

    </div>


    
   
    
@endsection
