<?php
    setcookie("logged", "claude");
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
                <?php
                    global $wpdb;
                    global $userid; //get from cookie
                    global $username;
                    $username = $wpdb->get_results ( "SELECT * FROM users WHERE userID=1");
            echo $wpdb->last_query;
                    $result = $wpdb->get_results ( "SELECT * FROM mp_casedetails WHERE userid=1");
                    
                    foreach ( $result as $mycase )   {
                ?>
				<div class="row">
					<div class="col-lg-8 panel panel-default">   
						<p><h3><?php echo $mycase->threadtitle; ?></h3><p>
						<a href="" class="underlined"><?php echo $username->username; ?></a>

					</div>
				</div>
                <?php
                } 
                ?>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab2">
			<h2>Pinned Cases</h2>
            <?php
                    global $wpdb;
                    global $userid; //get from cookie
                    $result = $wpdb->get_results ( "SELECT * FROM mp_pinnedcases WHERE userid=1");
                    foreach ( $result as $pinnedcase )   {
                ?>
				<div class="row">
					<div class="col-lg-8 panel panel-default">
                        <?php 
                            $caseid = $pinnedcase->caseid;
                            $casedetails = $wpdb->get_results ( "SELECT * FROM mp_casedetails WHERE id='$caseid'");
                            foreach ( $casedetails as $casedetails )   {
                        ?>    
						<p><h3><?php echo $casedetails->threadtitle; ?></h3><p>
                        <?php
                                $userid = $casedetails->userID;
                            }
                            $threadposter = $wpdb->get_results ( "SELECT * FROM users WHERE userID=$userid");
                            foreach ( $threadposter as $threadposter )   {
                        ?>
						<a href="" class="underlined"><?php echo $threadposter->username; ?></a>
                        <?php
                        } 
                    ?>
					</div>
                    <?php
                            }
                        ?>
				</div>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab3">
			<h2>Inbox</h2>
			<div class="row">
                <?php
            
                ?>
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
