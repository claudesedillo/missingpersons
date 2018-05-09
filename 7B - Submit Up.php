	
<?php
	/* Template Name: 7 - Sign Up
	 */
	get_header();
?>

<div class="container-fluid feed" id="pic-feed">
    <div class="row">
        <div class="col-md-12">
            <div class="well-block">
                <h6>Submit a Report</h6>
                <div class="well-title">
                    <!--<h1><b>SUBMIT A REPORT</b></h1>-->
                    <h2 class="h4-color"><b>Create an Account</b></h2>
                </div>
                <form id = "signUpForm" type = "post">
                    <!-- Form start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="first_name">First Name</label>
                                <input id="first_name" name="first_name" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="last_name">Last Name</label>
                                <input id="last_name" name="last_name" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="email">Email Address</label>
                                <input id="email" name="email" type="email" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input id="username" name="username" type="text" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" name="confirm_password" type="password" class="form-control input-md">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group pull-right">
                                <button id="singlebutton" name="singlebutton" class="btn btn-default2">Submit</button>
                            </div>
                        </div>


                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>

<?php
	get_footer();
?>
