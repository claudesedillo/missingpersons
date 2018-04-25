<?php
	/* Template Name: 5 - Specific Case
	 */
    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
    require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-load.php');
	get_header();
?>

<div class = "container-fluid width-85 padding-20 border-black" id = "profile">
    <div id = "info" class = "row"> 
        <div class = "col-md-4">
            <img id = "mugshot" src = "../images/default-avatar.jpg">
        </div>
        <?php
            global $wpdb;
            $caseid = 1; //TODO: dynamically get caseID
            $result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE id='$caseid'");
            //$posterID = get poster id here
            foreach ( $result as $caseprofile )   {
            ?>       
        <div class = "col-md-4">
            <p id = "missing-person-name"><?php echo $caseprofile->fName;?>  <?php echo $caseprofile->lName;?></p>
            <p id = "missing-person-age">Age: <?php echo $caseprofile->age;?></p>
            <p id = "missing-person-lastseen">Last Seen: <?php echo $caseprofile->lastseen;?></p>
        </div>
        <div class = "col-md-4">
            <p id = "missing-person-weight">Weight: <?php echo $caseprofile->weight;?>KG</p>
            <p id = "missing-person-height">Height: <?php echo $caseprofile->height;?> ft</p>
        </div>
        <div class = "col-md-8">
            <p id = "description"><?php echo $caseprofile->details;?></p>
        </div>
        <?php }
        ?>   
        <div class = "col-md-8">
            <span>Share this post</span>
            <ul class = "list-inline color-white" id = "icons">
                <li class = "list-inline-item">
                    <a href = "#"><i class="fab fa-facebook-f iconLink"></i></a>
                </li>
                <li class = "list-inline-item">
                     <a href = "#"><i class="fab fa-google-plus iconLink"></i></a>
                </li>
                <li class = "list-inline-item">
                     <a href = "#"><i class="fab fa-twitter iconLink"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class = "container width-85 padding-20" id = "thread">
    <?php
        global $wpdb;
        $threadid = 1; //TODO: dynamically get caseID
        $result = $wpdb->get_results ( "SELECT * FROM thread WHERE id='$threadid'");
        foreach ( $result as $threaddetails )   {
    ?>
    <h3 id = "thread-title"><?php echo $threaddetails->title;?></h3>
    <?php }
    ?>
    <?php
    global $wpdb;
    $threadid = 1;
    $result = $wpdb->get_results ( "SELECT * FROM threadpost WHERE threadid='$threadid'");
    foreach ( $result as $threadpost )   {
    ?>
    <div class = "thread-post padding-10">
        <div class = "thread-post-message border-black">
            <div class = "thread-post-user-info padding-10">
                <span class = "user-poster"><?php echo $threadpost->username;?></span>
                <span class = "pull-right text-white"><?php echo $threadpost->postnumber;?></span>
                <span class = "date-time pull-right text-white"><?php echo $threadpost->dateposted;?></span>
            </div>
            <div class = "message-div">
                <p class = "message padding-10"><?php echo $threadpost->message;?></p>
            </div>
        </div>
    </div>
    <?php }
    ?>
</div>
<div class = "container width-85 padding-20" id = "reply-div">
    <div id = "reply-header" class = "padding-10">
        <p class = "text-white">Leave a reply</p>
    </div>
    <form>
        <div class = "form-group">
            <textarea type = "text" class = "form-control padding-10 border-black" id = "reply-field" rows = "5" placeholder = "Message"></textarea>
        </div>
        <button type="button" class="btn btn-primary float-right background-black">Reply</button>
        <button type="button" class="btn btn-primary float-right background-black">Preview</button>
        <button type="button" class="btn btn-primary float-right background-black">Cancel</button>
    </form>
</div>
<script type="text/javascript" src="../script/General.js"></script>
<?php
	get_footer();
?>