<?php
	/* Template Name: 6 - User Dashboard
	 */
	get_header();
?>

<div class="container">
	<div class="col-sm-2 ">
		<nav class="nav-sidebar fill-height">
			<ul class="nav tabs">
				<li class=""><a href="#tab1" data-toggle="tab">My Case/s</a></li>
				<li class=""><a href="#tab2" data-toggle="tab">Pinned Cases</a></li>
				<li class="active"><a href="#tab3" data-toggle="tab">Inbox</a></li>
			</ul>
		</nav>
	</div>
	<!-- tab content -->
	<div class="tab-content">
		<div class="tab-pane active text-style" id="tab1">
			<h2>My Case/s</h2>
				<div class="row">
					<div class="col-lg-8 panel panel-default">
						<p><h3>Jordan Gana</h3><p>
						<a href="" class="underlined">Lorem lorem</a>
					</div>
					<div class="col-lg-8 panel panel-default">
						<h3>Jess Gano</h3>
						<a href="" class="underlined">Lorem lorem</a>
					</div>
					<div class="col-lg-8 panel panel-default">
						<p><h3>Claude Sedillo</h3><p>
						<a href="" class="underlined">Lorem lorem</a>
					</div>
					<div class="col-lg-8 panel panel-default">
						<h3>Harvey Lallave</h3>
						<a href="" class="underlined">Lorem lorem</a>
					</div>
				</div>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab2">
			<h2>Pinned Cases</h2>
			<div class="row">
				<div class="col-lg-8 panel panel-default">
					<p><h3>Jordan Gana</h3><p>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
				<div class="col-lg-8 panel panel-default">
					<h3>Claude Sedillo</h3>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
			</div>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab3">
			<h2>Inbox</h2>
			<div class="row">
				<div class="col-lg-8 panel panel-default ">
					<p><h3>Subject: Lorem Ipusum</h3><p>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
				<div class="col-lg-8 panel panel-default ">
					<h3>Subject: Lorem Ipusum</h3>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
				<div class="col-lg-8 panel panel-default read-background">
					<p><h3>Subject: Lorem Ipusum</h3><p>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
				<div class="col-lg-8 panel panel-default read-background">
					<h3>Subject: Lorem Ipusum</h3>
					<a href="" class="underlined">Lorem lorem</a>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div>


<?php
	get_footer();
?>
