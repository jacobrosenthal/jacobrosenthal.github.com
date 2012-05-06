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
            <h2>volunteer experience</h2>
            <h3>Workshops and meetups</h3>
            <ul>
				<li>Over the past two years I've run weekly and monthly workshops and meetups on 3d printing and microcontrollers. I've mainly focused around the Atmel platform and Arduino in both free monthly meet-ups at HeatSync Labs and for-fee at Urban Stew workshops.</li>
            </ul>
            <h3>Young Makers</h3>
            <ul>
                <li>Young Makers is our free form workshop night for passionate kids.  We work with driven young people to empower them to turn their ideas into reality.  No babysitting.  No lectures. This is discovery learning and creation.</li>
            </ul>
            <h3>FIRST Lego League</h3>
            <ul>
                <li>I Mentored FIRST Lego Robotics team applying discovery learning and agile methodology to teach STEM fundamentals to 9–14 year olds. I was Awarded Best Mentor award during 2010 Chandler Arizona Regional competition.
				</li>
            </ul>
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