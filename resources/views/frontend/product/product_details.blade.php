@extends('frontend.main_master')
@section('content')

@section('title')
	@if(session('language') == 'english'){{ $product->product_name_en }} Product-Details Easy-Web Shop
	@else {{ $product->product_name_fr }} Product-Details Easy-Web Shop
	@endif
@endsection

<div class="breadcrumb">
<div class="container">
<div class="breadcrumb-inner">
	<ul class="list-inline list-unstyled">
		<li><a href="#">Home</a></li>
		<li class='active'>{{ $product->product_name_en }}</li>
	</ul>
</div>
</div>
</div>

<div class="body-content outer-top-xs">
<div class="container">
<div class="row single-product">


<!-- ================================= SIDEBAR ================================= -->
	<div class="col-md-3 sidebar">
	<div class="sidebar-module-container">

	<!-- ============================= SidePub ================================= -->
		<div class="home-banner"> 
			@include('frontend.common.sidepub')
		</div><br><br>
	<!-- ============================= SidePub : END =========================== -->

	<!-- ============================= HOT DEALS =============================== -->
		@include('frontend.common.hot_deals')
	<!-- ============================= HOT DEALS: END ========================== --> 

	<!-- ============================= NEWSLETTER ============================== -->
		@include('frontend.common.newsletter')
    <!-- ============================= NEWSLETTER: END ========================= -->

	<!-- ============================= FeedBack================================= -->
		@include('frontend.common.feedback')
    <!-- ============================= FeedBack: END =========================== -->

	</div>
	</div>
<!-- ================================= SIDEBAR : END =========================== -->
		
<!-- ================================= CONTENT ================================= -->
	<div class="col-md-9">

		<div class="detail-block">
		<div class="row  wow fadeInUp">

			<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">

				<div class="product-item-holder size-big single-product-gallery small-gallery">

					<div id="owl-single-product">

						<div class="single-product-gallery-item" id="product_thambnail">
							<a data-lightbox="image-1" data-title="Gallery" href="{{ asset($product->product_thambnail) }}">
								<img class="img-responsive" alt="" src="{{ asset('frontend/assets/images/blank.gif') }}" data-echo="{{ asset($product->product_thambnail) }}" />
							</a>
						</div><!-- /.single-product-gallery-item -->

						@foreach ($product->products as $image)
						<div class="single-product-gallery-item" id="{{ $image->id }}">
							<a data-lightbox="image-1" data-title="Gallery" href="{{ asset($image->photo) }}">
								<img class="img-responsive" alt="" src="{{ asset('frontend/assets/images/blank.gif') }}" data-echo="{{ asset($image->photo) }}" />
							</a>
						</div><!-- /.single-product-gallery-item -->
						@endforeach
						

						

					</div><!-- /.single-product-slider -->


					<div class="single-product-gallery-thumbs gallery-thumbs">

						<div id="owl-single-product-thumbnails">

							<div class="item">
								<a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#product_thambnail">
									<img class="img-responsive" width="85" alt="" src="{{ asset('frontend/assets/images/blank.gif') }}" data-echo="{{ asset($product->product_thambnail) }}" />
								</a>
							</div>

							@foreach ($product->products as $image)
							<div class="item">
								<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#{{ $image->id }}">
									<img class="img-responsive" width="85" alt="" src="{{ asset('frontend/assets/images/blank.gif') }}" data-echo="{{ asset($image->photo) }}"/>
								</a>
							</div>
							@endforeach
							
						</div><!-- /#owl-single-product-thumbnails -->



					</div><!-- /.gallery-thumbs -->

				</div><!-- /.single-product-gallery -->

			</div><!-- /.gallery-holder -->  
			
			
			<div class='col-sm-6 col-md-7 product-info-block'>
				<div class="product-info">

					<h1 class="name" id="pname">
						@if(session('language') == 'english'){{$product->product_name_en}}
						@else {{$product->product_name_fr}} 
						@endif
					</h1>

					<div class="rating-reviews m-t-20">
						<div class="row">
							<div class="col-sm-3">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									<a href="#" class="lnk">(13 Reviews)</a>
								</div>
							</div>
						</div><!-- /.row -->		
					</div><!-- /.rating-reviews -->

					<div class="stock-container info-container m-t-10">
						<div class="row">
							<div class="col-sm-2">
								<div class="stock-box">
									<span class="label">Availability :</span>
								</div>	
							</div>
							<div class="col-sm-9">
								<div class="stock-box">
									<span class="value">In Stock</span>
								</div>	
							</div>
						</div><!-- /.row -->	
					</div><!-- /.stock-container -->

					<div class="description-container m-t-20">
						@if(session('language') == 'english'){{$product->short_descp_en}}
						@else {{$product->short_descp_fr}} 
						@endif
					</div><!-- /.description-container -->

					<div class="price-container info-container m-t-20">
						<div class="row">

							@php
								$amount = $product->selling_price - $product->discount_price;
								$discount = ($amount/$product->selling_price) * 100;
							@endphp

							<div class="col-sm-6">
								<div class="price-box">
									@if($product->discount_price)
									<span class="price">${{$product->discount_price}}</span>
									<span class="price-strike">${{$product->selling_price}}</span>
									@else
									<span class="price">${{$product->selling_price}}</span>
									@endif
								</div>
							</div>

							<div class="col-sm-6">
								<div class="favorite-button m-t-10">
									<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
										<i class="fa fa-heart"></i>
									</a>
									<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
										<i class="fa fa-signal"></i>
									</a>
									<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
										<i class="fa fa-envelope"></i>
									</a>
								</div>
							</div>

						</div><!-- /.row -->
					</div><!-- /.price-container -->


					<div class="quantity-container info-container">
						
						
						<div class="row">
							<div class="col-sm-6">
								@if($product_color_en[0])
								<div class="form-group">
								
									<label class="info-title control-label">Choose Color <span> </span></label>
									<select class="form-control unicase-form-control selectpicker" style="display: none;" id="color">

									@if(session('language') == 'english')
										<option selected="" disabled="">--Choose Color--</option>
										@foreach($product_color_en as $color)
										<option value="{{ $color }}">{{ $color }}</option>
										@endforeach
									@else
										<option selected="" disabled="">--Choisissez une Couleur--</option>
										@foreach($product_color_fr as $color)
										<option value="{{ $color }}">{{ $color }}</option>
										@endforeach
									@endif
									</select> 
								
								</div>
								@endif
							</div> <!-- // end col 6 -->
								
							<div class="col-sm-6">
								@if($product_size_en[0])
								<div class="form-group">
								
									<label class="info-title control-label">Choose Size <span> </span></label>
									<select class="form-control unicase-form-control selectpicker" style="display: none;" id="size">
									@if(session('language') == 'english')
										<option selected="" disabled="">--Choose Size--</option>
										@foreach($product_size_en as $size)
										<option value="{{ $size }}">{{ $size }}</option>
										@endforeach
									@else
										<option selected="" disabled="">--Choisissez Une Taille--</option>
										@foreach($product_size_fr as $size)
										<option value="{{ $size }}">{{ $size }}</option>
										@endforeach
									@endif
									</select> 
								
								</div> 
								@endif
							</div> <!-- // end col 6 -->
								
						</div><!-- /.row -->
						<br>


						<div class="row">

							<div class="col-sm-2">
								<span class="label">Qty :</span>
							</div>

							<div class="col-sm-2">
								<div class="cart-quantity">
									<div class="quant-input">
										<div class="arrows">
											<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
											<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
										</div>
										<input type="text" id="qty" value="1" min="1">
									</div>
								</div>
							</div>
							<input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
							<div class="col-sm-7">
								<button type="submit" onclick="addToCart()" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
							</div>


						</div><!-- /.row -->

						

					</div><!-- /.quantity-container -->

					
				<!-- c'est le script pour pouvoir partager -->
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
				</div><!-- /.product-info -->
			</div><!-- /.col-sm-7 -->

						
		</div><!-- /.row -->
		</div>












		<div class="product-tabs inner-bottom-xs  wow fadeInUp">
			<div class="row">

				<div class="col-sm-3">
					<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
						<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
						<li><a data-toggle="tab" href="#review">REVIEW</a></li>
						<li><a data-toggle="tab" href="#tags">TAGS</a></li>
					</ul><!-- /.nav-tabs #product-tabs -->
				</div>

				<div class="col-sm-9">
					<div class="tab-content">

						<div id="description" class="tab-pane in active">
							<div class="product-tab">
								<p class="text">
									@if(session('language') == 'english'){!!$product->long_descp_en!!}
									@else {!!$product->long_descp_fr!!} 
									@endif
								</p>
							</div>	
						</div><!-- /.tab-pane -->

						<div id="review" class="tab-pane">
							<div class="product-tab">

							<div class="product-reviews">
								<h4 class="title">Customer Reviews</h4>
								@php
									$reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
								@endphp	

								<div class="reviews">
								@foreach($reviews as $item)
									@if($item->status == 0)

									@else

									<div class="review">
									<div class="row">
										<div class="col-md-3">
											<img style="border-radius: 50%" src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_image/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="40px;" height="40px;"><b> {{ $item->user->name }}</b>
										</div>
										<br><br><br>
										<div class="col-md-9">

										</div>			
									</div> <!-- // end row -->

									<div class="review-title">
										<span class="summary">{{ $item->summary }}</span>
										<span class="date">
											<i class="fa fa-calendar"></i>
											<span> 
												{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} 
											</span>
										</span>
									</div>
									<div class="text">"{{ $item->comment }}"</div>
									</div>

									@endif
								@endforeach
								</div><!-- /.reviews -->
								
								<div class="product-add-review">
									<h4 class="title">Write your own review</h4>
									@guest
									<p> <b> For Add Product Review. You Need to Login First <a href="{{ route('login') }}">Login Here</a> </b> </p>
									@else

									<div class="review-form">
										<div class="form-container">

										<form role="form" class="cnt-form" method="post" action="{{ route('review.store') }}">
											@csrf
											<input type="hidden" name="product_id" value="{{ $product->id }}">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
												<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
												<input type="text" name="summary" class="form-control txt" id="exampleInputSummary" placeholder="">
												</div><!-- /.form-group -->
											</div>

											<div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputReview">Review <span class="astk">*</span></label>
												<textarea class="form-control txt txt-review" id="exampleInputReview" name="comment" rows="4" placeholder=""></textarea>
												</div><!-- /.form-group -->
											</div>
										</div><!-- /.row -->

										<div class="action text-right">
											<button type="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
										</div><!-- /.action -->

										</form><!-- /.cnt-form -->
										
										</div><!-- /.form-container -->
									</div><!-- /.review-form -->

									@endguest
								</div><!-- /.product-add-review -->										
							</div>
							</div><!-- /.product-tab -->
						</div><!-- /.tab-pane -->

						<div id="tags" class="tab-pane">
							<div class="product-tag">
								<h4 class="title">Product Tags</h4>
								<form role="form" class="form-inline form-cnt">
									<div class="form-container">
										<div class="form-group">
											<label for="exampleInputTag">Add Your Tags: </label>
											<input type="email" id="exampleInputTag" class="form-control txt">
										</div>
										<button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
									</div><!-- /.form-container -->
								</form><!-- /.form-cnt -->
								<form role="form" class="form-inline form-cnt">
									<div class="form-group">
										<label>&nbsp;</label>
										<span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
									</div>
								</form><!-- /.form-cnt -->
							</div><!-- /.product-tab -->
						</div><!-- /.tab-pane -->

					</div><!-- /.tab-content -->
				</div><!-- /.col -->

			</div><!-- /.row -->
		</div><!-- /.product-tabs -->











		<!-- ============================= Releted products ========================= -->
			<section class="section featured-product wow fadeInUp">
				<h3 class="section-title">Releted products</h3>
				<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

				@forelse($relatedProduct as $product)
				<div class="item item-carousel">
						<div class="products">

					<div class="product">		
					<div class="product-image">
						<div class="image">
							<a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}"><img  src="{{ asset($product->product_thambnail) }}" alt=""></a>
						</div><!-- /.image -->			
						@php
                        $amount = $product->selling_price - $product->discount_price;
                        $discount = ($amount/$product->selling_price) * 100;
						@endphp
						<div>
							@if(!$product->discount_price)
								<div class="tag new"><span>new</span></div>
							@else
								<div class="tag hot"><span>{{ round($discount) }}%</span></div>
							@endif
						</div>
					</div><!-- /.product-image -->


					<div class="product-info text-left">
						<h3 class="name"><a href="{{ route('product.details',[$product->id,$product->product_slug_en]) }}">
							@if(session('language') == 'english'){{$product->product_name_en}}
                            @else {{$product->product_name_fr}} 
                            @endif
						</a></h3>
						<div class="rating rateit-small"></div>
						<div class="description"></div>

						<div class="product-price">
							@if($product->discount_price)
								<span class="price"> ${{$product->discount_price}} </span> 
								<span class="price-before-discount">$ {{$product->selling_price}}</span>
							@else
								<span class="price"> ${{$product->selling_price}} </span>
							@endif
						</div>

					</div><!-- /.product-info -->
								<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
											<i class="fa fa-shopping-cart"></i>													
										</button>
										<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

									</li>

									<li class="lnk wishlist">
										<a class="add-to-cart" href="detail.html" title="Wishlist">
											<i class="icon fa fa-heart"></i>
										</a>
									</li>

									<li class="lnk">
										<a class="add-to-cart" href="detail.html" title="Compare">
											<i class="fa fa-signal"></i>
										</a>
									</li>
								</ul>
							</div><!-- /.action -->
						</div><!-- /.cart -->
						</div><!-- /.product -->

						</div><!-- /.products -->
				</div><!-- /.item -->
				@empty <h5 class="text-danger">No Products Found</h5>
				@endforelse
					
				</div><!-- /.home-owl-carousel -->
			</section><!-- /.section -->
		<!-- ============================= Releted products : END =================== -->

	</div><!-- /.col -->
<!-- ================================= CONTENT : END =========================== -->

</div>

<!-- ================================= BRANDS CAROUSEL ======================== -->
	@include('frontend.body.brands')
<!-- ================================= BRANDS CAROUSEL : END ================== --> 

</div>
</div>

<!-- c'est le script pour pouvoir partager -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6396ee29dea12006"></script>


@endsection