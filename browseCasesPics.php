<?php
	/* Template Name: 3 - Browse Cases (With Pictures)
	 */
	get_header();
?>



<div class = 'container'>
	<h3>CURRENTLY MISSING</h3><br>
	
	<ul class="breadcrumb">
		<li><a href="#">2017</a></li>
		<li><a href="#">2018</a></li>
		<li><a href="#">2019</a></li>
	</ul>
	<div id="caseFeed">
        <?php
            global $wpdb;
            $result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE status = 'unsolved'");
            for($i = 0; $i < 8; $i++){
        ?>
        <span class="casePreview"> 
            <a href="#Custom Case Page">
                <img class="alignleft" src="https://365psd.com/images/istock/previews/1012/101282869-white-blank-poster-mockup.jpg" alt="Poster" width="205" height="228">
            </a>
            <p class = "caseDescription">
                <strong><?php echo $result[$i]->fName;?> <?php echo $result[$i]->lName;?>, <?php echo $result[$i]->lastlocation;?></strong><br><br>
                Last seen: <?php echo $result[$i]->lastseen;?><br>
			</p>
        </span>
        <?php
            }
        ?>
	</div>
	<button id = 'loadMoreButton'>LOAD MORE</button>
</div>
<?php
	get_footer();
?>
