<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft_bg4.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft_bg3.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft_bg4.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft-fashion1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft-fashion2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd/images') }}/soft-fashion3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{ asset('frontEnd/images') }}/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{ asset('frontEnd/images') }}/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{ asset('frontEnd/images') }}/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{ asset('frontEnd/images') }}/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{ asset('frontEnd/js') }}/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>