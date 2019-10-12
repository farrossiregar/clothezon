<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


@extends('Layout-Front.app')

@section('title', 'Detail Product')

@section('content')
<div class="banner_bottom_agile_info">
	<div class="container">
		<div class="login-grids">
			<div class="login">
				<div class="login-bottom">
					<h3>Sign up for free</h3>
					<form>
						<div class="sign-up">
							<h4>Email :</h4>
							<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
						</div>
						<div class="sign-up">
							<h4>Password :</h4>
							<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							
						</div>
						<div class="sign-up">
							<h4>Re-type Password :</h4>
							<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							
						</div>
						<div class="sign-up">
							<input type="submit" value="REGISTER NOW" >
						</div>
						
					</form>
				</div>
			</div>
		</div>
		</div>
</div>


<!-- footer -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


	<!-- //cart-js --> 
	<!-- single -->
<script src="{{ asset('asset-front/js/imagezoom.js') }}"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="{{ asset('asset-front/js/easy-responsive-tabs.js') }}"></script>
<!-- FlexSlider -->
<script src="{{ asset('asset-front/js/jquery.flexslider.js') }}"></script>
<script>
// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
		});
	});
</script>
<!-- //FlexSlider-->

@endsection

