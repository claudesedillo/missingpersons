<?php
    //setcookie("logged", "claude");
	/* Template Name: 7A - Guidelines
	 */
	get_header();
?>

<div class="container-fluid feed" id="pic-feed">
    <div class="row">
        <h6>Submit a Report</h6>
        <h2 class="h4-color"><b>Guidelines</b></h2>
        <div class="col-md-12">
            <div class="well-block guideline_block">
                <!--<div class="well-title">-->
                    <!--&lt;!&ndash;<h1>QA</h1>&ndash;&gt;-->
                <!--</div>-->
                <div class="feature-block">
                    <div class="feature feature-blurb-text guideline_text">
                        <h4 class="feature-title"><b>1. You shall not be asdf?</b></h4>
                        <div class="feature-content">
                            <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text guideline_text">
                        <h4 class="feature-title"><b>2. You shall not be asdf?</b></h4>
                        <div class="feature-content">
                            <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text guideline_text">
                        <h4 class="feature-title"><b>3. You shall not be asdf?</b></h4>
                        <div class="feature-content">
                            <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id = "terms"> I agree to terms and condition.
                </label>
            </div>
        </div>

    </div>

    <div class="text-center">
        <?php
        if(!isset($_COOKIE["logged"])) { ?>
            <button name="singlebutton" id = "btn-proceed-signup" class="btn btn-default2">Proceed</button>
        <?php }
        else{ ?>
        
            <button name="singlebutton" id = "btn-proceed-submit" class="btn btn-default2">Proceed</button>
        <?php } ?>
    </div>
</div>

</body>
</html>