<?php get_header(); ?>

		<main>

			<div class="container">
				<div class="row">
					<div class="contact-form-wrap wow wobble">

						<h3 class="contact-info-title">Закажите звонок</h3>

						
 							<?php echo do_shortcode('[contact-form-7 id="39" title="Контактная форма"]');?>

					</div>
				</div>
			</div>

			<div class="working-hours">
					
				<div class="container">
					<div class="row">
							
						<div class="col-md-3">
								<img class="working-icon" src="<?php echo get_template_directory_uri(); ?>/images/svg/day.svg" alt="working-hours">
						</div>

						<div class="col working-time">
								<h3 class="working-hours-title"> Мы работаем ежедневно! </h3>
							<p>Мы работаем с 9.00 - 19.00 </p>
						</div>

						<div class="col-md-3 contacts-button-section">
							<a href="#contacts">
								<button class="contacts-button"> узнать как проехать </button>
							</a>
						</div>
					</div>
				</div>
			</div>


			<div class="about-us-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12  ">
							<h2>Почему выбирают нас?</h2>
							<p class="about-us-text"><?php the_field('fb_about_us_text'); ?></p>

							<ul>
								<li class="about-us-items">
									<i class="about-us-icon icon-staff"></i>
									<span><?php the_field('fb_about_us_cause_1'); ?></span>
								</li>
								<li class="about-us-items">
									<i class="about-us-icon icon-quality"></i>
									<span><?php the_field('fb_about_us_cause_2'); ?></span>
								</li>
								<li class="about-us-items">
									<i class="about-us-icon icon-stopwatch"></i>
									<span><?php the_field('fb_about_us_cause_3'); ?></span>
								</li>
							</ul>
						</div>
						<div class="col-md-6 about-us-img"></div>
					</div>
				</div>
			</div>

			<div class="car-repair-section" id="car-repair-section">
				
				<div class="container">
					<div class="row">

						<div class="col-md-6 repair-description  ">
							<div class="description-wrap">

								<div class="description-text">
									<h3 class="description-title"><?php the_field('fb_repair_price_text_h'); ?></h3>
									<ul>
										<h5  class="description-title"><?php the_field('fb_repair_price_text_cause'); ?> </h5>
											
										

										<li class="description-items">
											- <?php the_field('fb_repair_price_text_cause_1'); ?>
											<p><?php the_field('fb_repair_price_text_cause_text_1'); ?></p>
										</li>

										<li class="description-items">
											- <?php the_field('fb_repair_price_text_cause_2'); ?>
											<p><?php the_field('fb_repair_price_text_cause_text_2'); ?></p>
										</li>
									</ul>
								</div>
									
							</div>
						</div>

						<div class="col-md-6  ">
								
							<?php
								$table = get_field( 'fb_table_price_repair' );

								if ( $table ) {
								
									echo '<table class="table table-hover table-repairs">';
								
										if ( $table['header'] ) {
								
											echo '<thead>';
								
												echo '<tr>';
								
													foreach ( $table['header'] as $th ) {
								
														echo '<th>';
															echo $th['c'];
														echo '</th>';
													}
								
												echo '</tr>';
								
											echo '</thead>';
										}
								
										echo '<tbody>';
								
											foreach ( $table['body'] as $tr ) {
								
												echo '<tr>';
								
													foreach ( $tr as $td ) {
								
														echo '<td>';
															echo $td['c'];
														echo '</td>';
													}
								
												echo '</tr>';
											}
								
										echo '</tbody>';
								
									echo '</table>';
								}
							?>

									<div class="mobile-show-price">
										<button class="mobile-show-price-button" id="mobile-show-price-button">
											Развернуть цены 
										</button>
									</div>

									<div class="show-more">
										<button class="show-more-button" id="show-more">
											показать больше <i class="show-more-button-icon icon-double-arrow-down"></i>
										</button>
									</div>
						</div>

					</div>
				</div>
			</div>


			<div class="welding-section" id="welding-section">
				
				<div class="container">
					<div class="row welding-section-row">

						

						<div class="col-md-6  ">
						<?php
								$table = get_field( 'fb_table_price_welding' );

								if ( $table ) {
								
									echo '<table class="table table-hover table-repairs">';
								
										if ( $table['header'] ) {
								
											echo '<thead>';
								
												echo '<tr>';
								
													foreach ( $table['header'] as $th ) {
								
														echo '<th>';
															echo $th['c'];
														echo '</th>';
													}
								
												echo '</tr>';
								
											echo '</thead>';
										}
								
										echo '<tbody>';
								
											foreach ( $table['body'] as $tr ) {
								
												echo '<tr>';
								
													foreach ( $tr as $td ) {
								
														echo '<td>';
															echo $td['c'];
														echo '</td>';
													}
								
												echo '</tr>';
											}
								
										echo '</tbody>';
								
									echo '</table>';
								}
							?>
							<div class="mobile-show-price">
										<button class="mobile-show-price-button" id="mobile-show-price-button">
											Развернуть цены 
										</button>
									</div>
						</div>

						<div class="col-md-6 welding-description ">
							<div class="description-wrap">

								<div class="description-text">
									<h3 class="description-title"><?php the_field('fb_welding_price_text_h'); ?></h3>
									<ul>

										<li class="description-items">
											- <?php the_field('fb_welding_price_text_cause'); ?>
											<p><?php the_field('fb_welding_price_text_cause_text'); ?></p>
												    
										</li>
									</ul>
								</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="oil-change-section" id="oil-change-section">
				
				<div class="container">
					<div class="row">

						<div class="col-md-6 oil-change-description  ">
							<div class="description-wrap">

								<div class="description-text">
									<h3 class="description-title"><?php the_field('fb_oil_change_price_text_h'); ?></h3>
									<ul>
	
										<li class="description-items">
											- <?php the_field('fb_oil_change_price_text_cause_1'); ?>
											<p><?php the_field('fb_oil_change_price_text_cause_text_1'); ?></p>
										</li>

										<li class="description-items">
											- <?php the_field('fb_oil_change_price_text_cause_2'); ?>
											<p><?php the_field('fb_oil_change_price_text_cause_text_2'); ?></p>
										</li>

									</ul>
								</div>
									
							</div>
						</div>

						<div class="col-md-6 ">
						<?php
								$table = get_field( 'fb_table_price_oil' );

								if ( $table ) {
								
									echo '<table class="table table-hover table-repairs">';
								
										if ( $table['header'] ) {
								
											echo '<thead>';
								
												echo '<tr>';
								
													foreach ( $table['header'] as $th ) {
								
														echo '<th>';
															echo $th['c'];
														echo '</th>';
													}
								
												echo '</tr>';
								
											echo '</thead>';
										}
								
										echo '<tbody>';
								
											foreach ( $table['body'] as $tr ) {
								
												echo '<tr>';
								
													foreach ( $tr as $td ) {
								
														echo '<td>';
															echo $td['c'];
														echo '</td>';
													}
								
												echo '</tr>';
											}
								
										echo '</tbody>';
								
									echo '</table>';
								}
							?>
							<div class="mobile-show-price">
										<button class="mobile-show-price-button" id="mobile-show-price-button">
											Развернуть цены 
										</button>
									</div>
						</div>

					</div>
				</div>
			</div>


			<div class="integrated-programs-wrap ">
				<div class="container ">
					<div class="row">

							<div class="col-lg-3 col-sm-6 programs-item">
								<div class="program-price"><?php the_field('fb_programs_presale_preparation_price'); ?> руб.</div>
								<h5 class="integrated-programs-title"><?php the_field('fb_programs_presale_preparation_h'); ?></h5>

								<ul class="programs-item-description">
									
									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_presale_preparation_type_of_work_1'); ?></span> 
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_presale_preparation_type_of_work_2'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_presale_preparation_type_of_work_3'); ?></span>
									</li>
								</ul>
								<a href="#footer-contacts"><button class="programs-button">Записаться</button></a>
							</div>

							<div class="col-lg-3 col-sm-6 programs-item">
									<div class="program-price"><?php the_field('fb_programs_technical_inspection_price'); ?> руб.</div>
								<h5 class="integrated-programs-title"><?php the_field('fb_programs_technical_inspection_h'); ?></h5>

								<ul class="programs-item-description">

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_technical_inspection_type_of_work_1'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_technical_inspection_type_of_work_2'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_technical_inspection_type_of_work_3'); ?></span>
									</li>

								</ul>
								<a href="#footer-contacts"><button class="programs-button">Записаться</button></a>
							</div>

							<div class="col-lg-3 col-sm-6 programs-item best-program">
									<div class="program-price"><?php the_field('fb_programs_planned_vehicle_maintenance_price'); ?> руб.</div>
								<h5 class="integrated-programs-title"><?php the_field('fb_programs_planned_vehicle_maintenance_h'); ?></h5>

								<ul class="programs-item-description">

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_planned_vehicle_maintenance_type_of_work_1'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_planned_vehicle_maintenance_type_of_work_2'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_planned_vehicle_maintenance_type_of_work_3'); ?></span>
									</li>
									<li>  

										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_planned_vehicle_maintenance_type_of_work_4'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_planned_vehicle_maintenance_type_of_work_5'); ?></span>
									</li>
								</ul>
								<a href="#footer-contacts"><button class="programs-button">Записаться</button></a>
							</div>

							<div class="col-lg-3 col-sm-6  programs-item">
									<div class="program-price"><?php the_field('fb_programs_was_it_worth_taking_price'); ?> руб.</div>
								<h5 class="integrated-programs-title"><?php the_field('fb_programs_was_it_worth_taking_h'); ?></h5>

								<ul class="programs-item-description">
									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_was_it_worth_taking_type_of_work_1'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_was_it_worth_taking_type_of_work_2'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_was_it_worth_taking_type_of_work_3'); ?></span>
									</li>

									<li>  
										<i class="program-icon icon-checked"></i>
										<span class="programs-description-text"><?php the_field('fb_programs_was_it_worth_taking_type_of_work_4'); ?></span>
									</li>
								</ul>
								<a href="#footer-contacts"><button class="programs-button">Записаться</button></a>
							</div>

						
					</div>
				</div>
			</div>
			
			<!-- FAQ Section -->

			<div class="faq " id="faq">
				<div class="container">
					<div class="row">

						<div class="col-md-5 faq-left-side">
								
						</div>

						<div class="col-md-7 faq-right-side">

							<div class="faq-title">
								<h2>Часто задаваемые вопросы</h2>
							</div>

							<div class="accordion" id="accordionExample">
								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
									  		<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											  <?php the_field('fb_accordion_question_1'); ?>
									  		</button>
										</h5>
										<i class="faq-card-icon icon-double-arrow-down"></i>
									</div>
									  
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
										<?php the_field('fb_accordion_answer _1'); ?> 
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<?php the_field('fb_accordion_question_2'); ?>
										    </button>
										</h5>
										<i class="faq-card-icon icon-double-arrow-down"></i>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
										<?php the_field('fb_accordion_answer _2'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<?php the_field('fb_accordion_question_3'); ?>
											</button>
										</h5>
										<i class="faq-card-icon icon-double-arrow-down"></i>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
										<?php the_field('fb_accordion_answer _3'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<?php the_field('fb_accordion_question_4'); ?>
											</button>
										</h5>
										<i class="faq-card-icon icon-double-arrow-down"></i>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
										<?php the_field('fb_accordion_answer _4'); ?>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>
			</div>


			 <div class="car-brands">
				 <div class="car-brands-slider">

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/audi.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/bmw.svg" alt="audi">
					</div>
					
					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/citroen.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/chevrolet.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/nissan.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/fiat.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/honda.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/mercedes-benz.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/ford.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/hyundai.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/kia.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/mazda.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/mitsubishi.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/mercedes-benz.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/opel.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/renault.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/volkswagen.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/toyota.svg" alt="audi">
					</div>

					<div class="car-brands-slider-item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/car-brands/volvo.svg" alt="audi">
					</div>

				 </div>
			 </div>
			<!-- Map -->
			
				<div class="container-fuild " id="contacts">
					<div class="row">
						
						
						<div class="yandexMap" >
							<script type="text/javascript" charset="utf-8"
							async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A471a9a7a660db9ffa314959d4d6e06ebca088f717d08e16a838192d6d5911e4c&amp;
							width=100%&amp;height=447&amp;lang=ru_RU&amp;scroll=false">
							</script>
						</div>
						
					</div>
				</div>
			
			<!-- End Map -->

		</main>

	<?php get_footer(); ?>