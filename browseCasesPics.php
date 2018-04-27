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
            global $currentIndex;
            for($currentIndex = 0; $currentIndex < 8; $currentIndex++){
        ?>
        <span class="casePreview"> 
            <a href="#Custom Case Page">
                <img class="alignleft" src="https://365psd.com/images/istock/previews/1012/101282869-white-blank-poster-mockup.jpg" alt="Poster" width="205" height="228">
            </a>
            <p class = "caseDescription">
                <strong><?php echo $result[$currentIndex]->fName;?> <?php echo $result[$currentIndex]->lName;?>, <?php echo $result[$currentIndex]->lastlocation;?></strong><br><br>
                Last seen: <?php echo $result[$currentIndex]->lastseen;?><br>
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
