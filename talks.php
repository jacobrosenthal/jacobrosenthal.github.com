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
            <h2>speaking</h2>
			<h3>3D Printing, UAT; Tempe, Arizona - (Dec 2011)</h3>
			<p>UAT asked HeatSync to talk about the state of Additive Manufacturing and our Fakerbot.</p>
			<ul>
				<li><a href="presentations/3dprinting-uat.pdf">Slides (PDF)</a></li>
				<li><a href="http://www.youtube.com/watch?feature=player_embedded&v=WJ02eSfGmMQ">Video</a></li>
			</ul>
			<h2>publications</h2>
            <h3>A Pragmatic Approach to the Design and Implementation of a Vibrotactile Belt and its Applications, IEEE International Workshop on Haptic Audio Visual Environments and Games - (2009)</h3>
            <p>Workshop paper on preliminary progress of our Haptic Belt interface designed at ASU's CUbiC lab. We developed a wired tactor system utilizing the i2c interface to send vibration patterns, rhythm and magnitude, which when combined with location also allows for spatiotemporal rhythms, to up to 16 tactors.</p>
            <ul>
                <li><a href="presentations/HAVE_2009.pdf">Final Paper (PDF)</a></li>
            </ul>
            <h3>Design, Implementation, and Case Study of a Pragmatic Vibrotactile Belt, IEEE Transactions On Instrumentation and Measurement, Vol. 60, No. 1 - (Jan 2011)</h3>
            <p>After our initial paper we were invited to expand our work into a full journal article.</p>
            <ul>
                <li><a href="presentations/Rosenthal_TIM_2011.pdf">Final Paper (PDF)</a></li>
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
