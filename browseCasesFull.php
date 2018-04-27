	
<?php
	/* Template Name: 2 - Browse Cases (Full)
	 */
	get_header();
?>

        <?php
            global $wpdb; 
            global $type;
            $type = $_GET['type'];
            $result = $wpdb->get_results ( "SELECT * FROM casedetails");
            ?>   
        <div class="container-fluid"> 
            <div class="row maindivs" id="browsepics-div">
                <h4>UNSOLVED CASES</h4>
                <div class="col-sm-3">
                    <img class=" img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
                    <p>First Last, Taguig</p>
                    <p>Last seen: March 23, 2018</p>
                </div>
                <div class="col-sm-3">
                    <img class=" img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
                    <p>First Last, Taguig</p>
                    <p>Last seen: March 23, 2018</p>
                </div>
                <div class="col-sm-3">
                    <img class=" img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
                    <p>First Last, Taguig</p>
                    <p>Last seen: March 23, 2018</p>
                </div>
                <div class="col-sm-3">
                    <img class=" img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
                    <p>First Last, Taguig</p>
                    <p>Last seen: March 23, 2018</p>
                </div><br><br>
                <button class="btn btn-default" id="btn-viewallBP">VIEW ALL</button>
            </div>
            <div class="row maindivs" id="unsolved-div"> <!-- unsolved cases -->
                <div class="row headers">
                    <h4>UNSOLVED CASES</h4>
                </div>
                <div class="row" id="report-div">
                    <div class="col-sm-8">
                        <p>[ACTIVE] LOREM IPSUM</p>
                        <p>Date poster: March 23, 2018</p>
                        <p>Replies: 10</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Location <br> Taguig</p>
                    </div>
                </div><hr>
                <div class="row" id="report-div">
                    <div class="col-sm-8">
                        <p>[ACTIVE] LOREM IPSUM</p>
                        <p>Date poster: March 23, 2018</p>
                        <p>Replies: 10</p>
                    </div>
                    <div class="col-sm-4">
                        <p>Location <br> Taguig</p>
                    </div>
                </div><hr>
                <ul class="pagination">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
            </div> 
        </div>
<?php
	get_footer();
?>
