@extends('frontend.main_master')
@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
    <!-- Sign-in -->			
    <div class="col-md-6 col-sm-6 sign-in">
        <h4 class="">Forgot-Password</h4>
        <p class="">Hello, You forgot your password ?? No probleme .</p>
        



            <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('password.email') }}">@csrf

                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                    <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" >
                </div>

                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Email Password Reset Link</button>
            </form>	
        
        
    </div>
    <!-- Sign-in -->

    </div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('frontend.body.brands')
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection