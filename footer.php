<footer class="main-footer" id="footer-contacts">
		<div class="container-fuild">
			<div class="row no-gutters">
				<div class="col-md-4 footer-contacts">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="logo">
					<ul class="footer-contact-list">
						<li class="footer-contact-list-item">г. Минск улю Слоодская 2</li>
						<li class="footer-contact-list-item">+375 29 603-61-60 </li>
						<li class="footer-contact-list-item">Пн - Вс с 9 до 19 00</li>
					</ul>
				</div>

				<div class="col-md-4 footer-contact-form">

				<h3 class="contact-info-title">Закажите звонок</h3>
				
				<?php echo do_shortcode('[contact-form-7 id="39" title="Контактная форма"]');?>
				</div>

				<div class="col-md-4">
					<h3 class="contact-info-title">Услуги</h3>
						<ul>
							<li class="footer-menu-item"><a href="#">Ремонт</a></li>
							<li class="footer-menu-item"><a href="#">Диагностика</a></li>
							<li class="footer-menu-item"><a href="#">Сварочные раоты</a></li>
						</ul>
				</div>

				

			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
