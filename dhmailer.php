<!DOCTYPE html>
<html>
<!--
    copyright (c) 2011 David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
    <title>jacobrosenthal.com</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <link rel="StyleSheet" href="default.css" type="text/css" />
    <link rel="StyleSheet" href="overflow-touch.css" type="text/css" />
    <script type="text/javascript" src="overflow-touch.js"></script>
	<script src="js/patternizer.min.js"></script>
	<script src="js/jquery.ba-throttle-debounce.min.js"></script>

</head>
    <body>
	
		<canvas id="bgCanvas"></canvas>

		<div class="wrapper">
		    <div class="content-wrapper">
        <?php include("header.php"); ?>
        <div class="contentContainer">
<?php
    if (isset($_POST['txtContactName'])
        && isset($_POST['txtContactEmail'])
        && isset($_POST['txtContactMessage'])
        && isset($_POST['txtContactMeatPopsicle']))
    {
        // These be CONSTANT
        $ROBOT_CHECK = 'I am a meat popsicle';
        $TO_ADDRESS = 'jakerosenthal' . '@gmail.com';
        
        // No need to escape for bobby tables, but we do need to think of the newlines
        $sanitizedName = stripslashes(trim(htmlentities($_POST['txtContactName'])));
        $sanitizedEmail = trim(htmlentities($_POST['txtContactEmail']));
        $sanitizedMessage = stripslashes(trim(htmlentities($_POST['txtContactMessage'])));
        $sanitizedMeatPopsicle = trim(htmlentities($_POST['txtContactMeatPopsicle']));
        
        $isHooman = $sanitizedMeatPopsicle == $ROBOT_CHECK;
        $isNameValid = !empty($sanitizedName);
        $isMessageValid = !empty($sanitizedMessage);
        $isEmailValid = eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$', $sanitizedEmail);
        
        if ($isHooman
            && $isNameValid
            && $isMessageValid
            && $isEmailValid)
        {
            // Maybe eventually make this a drop-down selection?
            $subject = 'Message from ' . $sanitizedName . ' via jacobrosenthal.com';
            $headers = 'From: ' . $sanitizedEmail . "\r\n"
                . 'Reply-To: ' . $sanitizedEmail . "\r\n"
                . 'X-Mailer: PHP/' . phpversion();
            // gogogo
            @mail($TO_ADDRESS, $subject, $sanitizedMessage, $headers);
?>
            <div class="grandNotification">
                <h1>Message delivered!</h1>
                <p>Redirecting to main page...</p>
            </div>
            <script type="text/javascript">
                setTimeout('window.location = "index.php"', 3000);
            </script>
<?php
        }
        else
        {
            echo '<div class="grandFailNotification"><h1>You done goofed, kid.</h1>';
            
            // As much as I rant about ASP.NET, ValidationSummary was quite handy...            
            $failList = '<p>';
            
            if (!$isHooman)
                $failList .= 'Go see the Fifth Element. ';
                
            if (!$isNameValid)
                $failList .= 'Blank name is blank. ';
                
            if (!$isMessageValid)
                $failList .= 'Blank message is blank. ';
                
            if (!$isEmailValid)
                $failList .= 'E-mail address is invalid. ';
            
            //$failList .= '</p>';
            $failList .= '<br />Please go <a href="#" onclick="history.go(-1);return false;">back</a> and try again.</p></div>';
            
            echo $failList;
?>
            <!--<section class="grandFailNotification">
                <h1>You done goofed, kid.</h1>
                <?php echo $failList ?>
                <p>Please go <a href="#" onclick="history.go(-1);return false;">back</a> and try again.</p>
            </section>-->
<?php
        }
    }
?>
        </div>
        <?php include("footer.php"); ?>
   </div>
   </div>
<script>

var bgCanvas = document.getElementById('bgCanvas');

function render() {

    bgCanvas.patternizer({
	stripes : [ 
	    {
	        color: '#230423',
	        rotation: 5,
	        opacity: 60,
	        mode: 'normal',
	        width: 48,
	        gap: 44,
	        offset: 7
	    },
	    {
	        color: '#444444',
	        rotation: 200,
	        opacity: 50,
	        mode: 'normal',
	        width: 20,
	        gap: 16,
	        offset: 0
	    }
	],
	bg : '#000000'
	});

}

// resize the canvas to the window size
function onResize() {

    // number of pixels of extra canvas drawn
    var buffer = 100;

    // if extra canvas size is less than the buffer amount
    if (bgCanvas.width - window.innerWidth < buffer ||
        bgCanvas.height - window.innerHeight < buffer) {

        // resize the canvas to window plus double the buffer
        bgCanvas.width = window.innerWidth + (buffer * 2);
    	bgCanvas.height = window.innerHeight + (buffer * 2);

    	render();
    }	

}

function init() {
    onResize();
    // create a listener for resize
    // cowboy's throttle plugin keeps this event from running hog wild
    window.addEventListener('resize', Cowboy.throttle(200, onResize), false);
}

init();

</script>
    </body>
</html>