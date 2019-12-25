@extends('layouts.master')
@section('title', @trans('header.company_name'))
@section('content')

    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background: #000;ound-image:url({{asset("images/bg_1.jpg")}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Practice Areas</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Practice</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-1.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Family Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-2.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Business Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-3.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Employment Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-4.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Drug Control Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-5.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Criminal Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url({{asset("images/practice-6.jpg")}});"></a>
							<div class="info">
								<h3><a href="#">Insurance Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>

    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Request a Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
@endsection