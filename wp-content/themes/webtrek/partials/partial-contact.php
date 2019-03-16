<?php 

function get_partial_contact($mb) { 
  
  $display_section = Webtrek::if_exists($mb, 'show_hide');
  if ($display_section == "yes") :
  
  $title = Webtrek::if_exists($mb, 'contact_title', 'h3');
  $subtitle = Webtrek::if_exists($mb, 'contact_subtitle', 'p');
  $address = Webtrek::if_exists($mb, 'contact_address');
  $phone = Webtrek::if_exists($mb, 'contact_phone');
  $email = Webtrek::if_exists($mb, 'contact_email');
  
  $a_display = $address ? '' : 'd-none';
  $p_display = $phone ? '' : 'd-none';
  $e_display = $email ? '' : 'd-none'; ?>
    
    <!-- Contact Section -->
    <section id="contact" class="wow fadeInUp">
      <div class="container-fluid">
        <div class="row">
			<div class="col-12 col-lg-6 align-items-center p-0">
				<div class="contact-form-inner-wrap position-relative z-one">
					<div class="overlay"></div><?php

				echo "<div class='section-header'>";
				echo $title;
				echo $subtitle;
				echo "</div>"; ?>

					<div class="form">
						<div id="sendmessage">Thank you for your submission!</div>
						<div id="errormessage"></div>
						<form action="<?php echo htmlspecialchars(get_template_directory_uri() . '/contactform/contactform.php'); ?>" method="post" role="form" class="contactForm">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation"></div>
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validation"></div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 4 characters for the subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please include a message" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="persontest" id="persontest" placeholder="Enter the sum of 4 + 3" data-rule="math" data-msg="Please enter the correct value" />
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit"><i class="ion-paper-airplane"></i> Submit</button></div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6 p-0 d-flex align-items-center w-100 order-first order-lg-last">
				<div class="contact-info-inner-wrap d-flex align-self-center justify-content-center w-100 position-relative z-one">
					<div class="overlay"></div>
					<div class="row contact-info">
						<div class="col-md-12 align-self-center <?php echo $a_display; ?>">
							<div class="contact-address">
							<i class="ion-ios-location-outline"></i>
							<h3>Address</h3>
							<address><?php echo $address; ?></address>
							</div>
						</div>

						<div class="col-md-12 align-self-center <?php echo $p_display; ?>">
							<div class="contact-phone">
							<i class="ion-ios-telephone-outline"></i>
							<h3>Phone Number</h3>
							<p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
							</div>
						</div>

						<div class="col-md-12 align-self-center <?php echo $e_display; ?>">
							<div class="contact-email">
							<i class="ion-ios-email-outline"></i>
							<h3>Email</h3>
							<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
							</div>
						</div>
					</div>
  				</div>
			</div>
        </div>
      </div>
    </section><!-- #contact -->
    <?php  
   endif;
  }