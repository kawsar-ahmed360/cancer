@extends('fontend.master')

@section('title')

{{@$contact_seo->meta_title}}

@endsection

@section('content')

<div class="page-title-area item-bg-7">
	<div class="container">
		<div class="page-title-content">
			<h2>Contact</h2>
			<ul>
				<li>
<a href="{{route('MainIndex')}}">
Home
<i class="fa fa-chevron-right"></i>
</a>
				</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</div>
<section class="contact-box ptb-100-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-box">
<i class="fa fa-map-marker"></i>
					<div class="contect-title">
						<h3>Address</h3>
						<p>{{@$contact->office_address}}</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-box">
<i class="fa fa-envelope"></i>
					<div class="contect-title">
						<h3>Email</h3>
						<a href="#"><span class="__cf_email__" data-cfemail="660e030a0a0926080f10094805090b">[{{@$contact->email_one}}]</span></a>
						<a href="#"><span class="__cf_email__" data-cfemail="5064646765656561626364103631287e333f3d">[{{@$contact->email_two}}]</span></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-contact-box">
<i class="fa fa-phone"></i>
					<div class="contect-title">
						<h3>Phone</h3>
						<a href="#">{{@$contact->mobile_one}}</a>
						{{-- <a href="#">+55 5555 14574</a> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-area pb-100">
	<div class="container">
		<div class="section-title">
			<h2>Drop us message for any query</h2>
			<p>If you have an idea, we would love to hear about it.</p>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="contact-form">
					<form id="" action="{{route('ContactStore')}}" method="POST">
                        @csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
							         @error('name')
                                      <span style="color:red" class="invalid-feedback">
                                         <strong>{{@$message}}</strong>
                                      </span>
                                     @enderror
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email">
                                    @error('email')
                                    <span style="color:red" class="invalid-feedback">
                                       <strong>{{@$message}}</strong>
                                    </span>
                                   @enderror
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="phone_number" id="phone_number"  class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone">
								
                                    @error('phone_number')
                                    <span style="color:red" class="invalid-feedback">
                                       <strong>{{@$message}}</strong>
                                    </span>
                                   @enderror
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="msg_subject" id="msg_subject" class="form-control @error('msg_subject') is-invalid @enderror"  placeholder="Subject">
                                    @error('msg_subject')
                                    <span style="color:red" class="invalid-feedback">
                                       <strong>{{@$message}}</strong>
                                    </span>
                                   @enderror
                                </div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="6"  placeholder="Your Message"></textarea>
                                    @error('message')
                                    <span style="color:red" class="invalid-feedback">
                                       <strong>{{@$message}}</strong>
                                    </span>
                                   @enderror
                                
                                </div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="default-btn">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="map-area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.701717783516!2d90.3905864213062!3d23.752697238352624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8983f79fa27%3A0xeddafd73d038bc2f!2sKarwan%20Bazar%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1616677143025!5m2!1sen!2sbd"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection