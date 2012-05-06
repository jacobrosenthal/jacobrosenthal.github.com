<!DOCTYPE html>
<html>
<!--
    copyright (c) 2011 David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
    <title>jacobrosenthal.com</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="description" content="Official website of Jacob Rosenthal: HeatSync Labs director, Starcraft addict, and general purveyor of good taste." />
    <meta name="keywords" content="jacob rosenthal augmentous citizen gadget ubiquitous computing body modification hardware engineer open source heatsync labs" />
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
            <h2>about</h2>
            <p>I'm Jacob Rosenthal, a hardware engineer from Tempe Arizona. I did research on <a href="http://en.wikipedia.org/wiki/Ubiquitous_computing">ubiquitous computing</a> and <a href="http://en.wikipedia.org/wiki/Haptics">haptic</a> interaction while at Arizona State University's <a href="http://cubic.asu.edu/index">CUbiC Lab</a>. I've spent the last 2 years helping to found <a href="http://www.heatsynclabs.org">HeatSync Labs</a>, a 501c3 nonprofit community workshop in order to facilitate my freelance work and hopefully yours too. I'm now freelance and working on my new company, Augmentous, where my partner and I plan to work with the <a href="http://www.bme.com/">body modification community</a> to deliver ubiquitous computing to the masses.</p>
        </article>
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