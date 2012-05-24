<!DOCTYPE html>
<html>
<!--
    copyright (c) 2011 David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
	<?php include("head.php"); ?>
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