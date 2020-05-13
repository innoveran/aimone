<div class="contactus-area">
		<div class="container">
		    <div class="row">
				<div class="col-xl-12">
					<div class="contact-form-area">
						<!--contact left bg-->
						<div class="contact-left-bg">
							<img src="img/contact-p-2.png" alt="">
						</div>
						<div class="contact-form-heading">
							<h3>Leave a Message</h3>
						</div>
						<div class="contact-form">
							<form action="/formrequest" method="post">
								@csrf
								<input type="text" placeholder="First Name" name="firstname" required>
								<input class="margin-top-lb-30 margin-top-sb-30" type="text" placeholder="Last Name" name="lastname" required>
                                <input type="text" placeholder="Company Name" name="company">
								<input class="margin-top-lb-30 margin-top-sb-30" type="text" placeholder="Position in Company" name="position">
								<input type="email" placeholder="Enter your email" name="email">
								<textarea placeholder="Write your message" name="message"></textarea>
								<input type="hidden" name="qoutetype"  id="qoutetype" value="sales">
								<div class="send-btn">
									<input type="submit" value="send me" id="formsend">
								</div>
							</form>
						</div>
						<!--contact right bg-->
						<div class="contact-right-bg">
							<img src="img/contact-p-1.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<!--contact form area-->
			<div class="single-contact-area">
				<div class="row">
					<!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
						<div class="single-contact-info">
							<div class="info-icon">
								<i class="fa fa-mobile"></i>
							</div>
							<div class="info-content">
								<h6>Our Phone</h6>
								<span>+234 909 999 9961</span>
							</div>
						</div>
					</div>
                    <!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="single-contact-info">
							<div class="info-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-content">
								<h6>Mail address</h6>
								<span>sales@buffer.media</span><br>
                                <span>support@buffer.media</span><br>
                                <span>devops@buffer.media</span>
							</div>
						</div>
					</div>
					<!--single contact-->
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
						<div class="single-contact-info large-mb-d">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="info-content">
								<h6>Our Location</h6>
								<span>Lagos, Nigeria</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>