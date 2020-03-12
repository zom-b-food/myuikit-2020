<div class="pad">
	<h2 class="section-title font-black text-uppercase">DOM/AJAX Widgets</h2>
	<p>&nbsp;</p>
	<div class="page-header" filter-color="green">
		<div class="page-header-image" data-parallax="true"
			style="background-image: url('/pages-bs/assets-bs/images/bg-parallax.jpg');"></div>
		<!-- First Parallax Section -->
		<div class="container">
			<div class="pt100">
				<div class="col-md-12 mt50">
					<ul id="tabsJustified" class="nav nav-tabs">
						<li class="nav-item"><a href="#" data-target="#sb1" data-toggle="tab"
								class="nav-link small text-uppercase active square">Load AJAX
								Data</a></li>
						<li class="nav-item"><a href="#" data-target="#sb2" data-toggle="tab"
								class="nav-link small text-uppercase square">Loop Through JSON
								Array</a></li>
						<li class="nav-item"><a href="#" data-target="#sb3" data-toggle="tab"
								class="nav-link small text-uppercase square">My Fantasy
								Garage</a></li>
						<li class="nav-item"><a href="#" data-target="#sb4" data-toggle="tab"
								class="nav-link small text-uppercase square">Get Textbox Hint</a>
						</li>
						<!-- <li class="nav-item"><a href="#" data-target="#sb5" data-toggle="tab" -->
						<!-- class="nav-link small text-uppercase square">JSON Array -->
						<!-- Slider</a></li> -->
					</ul>
					<div class="tab-wrapper">
						<div id="tabsJustifiedContent" class="tab-content">
							<div id="sb1" class="tab-pane fade active show">
								<h3 class="subtitle"> ~ Fetching JSON</h3>
								<?php include 'widgets/ajax/assemble.html'; ?>
							</div>
							<div id="sb2" class="tab-pane fade">
								<h3 class="subtitle"> ~ Loop Through JSON Array</h3>
								<?php include 'widgets/ajax/getdogs.php'; ?>
							</div>
							<div id="sb3" class="tab-pane fade">
								<h3 class="subtitle"> ~ My Fantasy Garage</h3>
								<?php include 'widgets/ajax/load-cars.html'; ?>
							</div>
							<div id="sb4" class="tab-pane fade">
								<h3 class="subtitle"> ~ PHP/AJAX Form Hints</h3>
								<?php include 'widgets/ajax/getphp.html'; ?>
							</div>
							<!-- <div id="wid3" class="tab-pane fade"> -->
							<!-- <h3 class="subtitle"> ~ JSON Array Slider</h3> -->
							<!--  'widgets/jsonslider/jsonslider.html'; -->
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add More Parallax Sections Here -->
	</div>
	<hr />
</div>