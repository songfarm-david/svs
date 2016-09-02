<?php include('includes/header.php') ?>

<!-- PHP Dynamic Breadcrumbs -->
<div id="breadcrumbs" class="container-fluid">
	<ol class="breadcrumb container breadcrumb-container" style="background-color: transparent;">
		<li><a href="index.php">Home</a></li>
		<li class="active"><a href="#">Parts &amp; Service</a></li>
	</ol>
</div>
<!-- end of Breadcrumbs -->

<main>
	<section id="services" class="container">
		<h1>Parts &amp; Services</h1>
		<h3>We are fully licensed and fully insured professionals...</h3>
		<section class="row">
			<div class="col-xs-12">
				<div class="panel-group" id="services-panel">

				  <div class="panel panel-default">
				    <div class="panel-heading">
			        <a class="panel-title" data-parent="#services-panel" data-toggle="collapse" href="#collapse1"><h2>Residential Service</h2></a>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse in">
				      <div class="panel-body">
								<p>
									What we fix
								</p>
								<ul>
									<li>Garage Doors</li>
									<li>Operators</li>
								</ul>
							</div>
				      <div class="panel-footer">Panel Footer</div>
				    </div>
				  </div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a class="panel-title" data-parent="#services-panel" data-toggle="collapse" href="#collapse2"><h2>Commercial Service</h2></a>
						</div>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<p>
								What we fix
							</p>
							<ul>
								<li>Garage Doors</li>
								<li>Operators</li>
							</ul>
						</div>
						<div class="panel-footer">Panel Footer</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="row">
			<div class="col-xs-12">
				<h2>Residential Service</h2>
				<p>
					Introductory paragraph here summarizes what they are being presented here.
				</p>
				<a href="#"><button class="btn btn-default">CTA here</button></a>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12">
				<h2>Commercial Service</h2>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12">
				<h2>Regular Maintenance Plans</h2>
			</div>
		</section> -->
	</section>

</main>



<?php include('includes/footer.php') ?>
