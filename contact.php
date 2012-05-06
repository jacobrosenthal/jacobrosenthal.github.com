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
	<link href="http://fonts.googleapis.com/css?family=Jura&subset=latin" rel="stylesheet" type="text/css">
	</head>
<body>
	
	<canvas id="bgCanvas"></canvas>

	<div class="wrapper">
	    <div class="content-wrapper">
    <?php include("header.php"); ?>
    <div class="contentContainer">
        <?php include("navigation.php"); ?>
        <article id="verbageContainer" class="descriptionContainer">
            <h2>contact jacob</h2>
            <p>Looking for circuit design work, have questions on hackerspaces and community, or do you need advice on your starcraft II game? Contact me with the form below:</p>
            <form id="frmContactDavid" method="post" action="dhmailer.php">
                <label for="contactName">Name</label>
                <br />
                <input name="txtContactName" type="text" placeholder="Your Name" class="fancyTextBox" />
                <br />
                <label for="contactEmail">Email Address</label>
                <br />
                <input name="txtContactEmail" type="email" placeholder="Your Email Address" class="fancyTextBox" />
                <br />
                <label for="contactMessage">Your Message</label>
                <br />
                <textarea name="txtContactMessage" type="textarea" placeholder="i liek turtles" rows="4" cols="32" class="fancyTextBox"></textarea>
                <br />
                <label for="contactRobotCheck"><a href="http://www.youtube.com/watch?v=aZFH4wCLVXY">Are you classified as a human</a>? (Type: "I am a meat popsicle")</label>
                <br />
                <input name="txtContactMeatPopsicle" type="text" placeholder="No really, type &quot;I am a meat popsicle&quot;" class="fancyTextBox" />
                <br />
                <input id="btnContactSubmit" type="submit" value="Send" class="fancyButton" />
                <br />
            </form>
        </article>
        <script type="text/javascript">
            setIosOverlay('verbageContainer');
        </script>
        <?php include("props.php"); ?>
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
	        color: '#101010',
	        rotation: 2,
	        opacity: 75,
	        mode: 'normal',
	        width: 5,
	        gap: 63,
	        offset: 0
	    },
	    {
	        color: '#2b0821',
	        rotation: 5,
	        opacity: 76,
	        mode: 'normal',
	        width: 2,
	        gap: 31,
	        offset: 13
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