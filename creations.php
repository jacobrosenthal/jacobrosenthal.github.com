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
        <?php include("navigation.php"); ?>
        <article id="verbageContainer" class="descriptionContainer" onload="setIosOverlay(this.id)">
            <h3>Interactive Cacti Grove</h3>
			  <section class="imageContainer">
	                <img src="images/prickly.jpg" alt="Prickly Pear and Agave cactus" onclick="TINY.box.show({image:'images/prickly_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
	            </section>
			<p>Mesa Arts approached me to be Technical consultant on entire cactus grove concept for the Mesa Festival of Creativity 2012. In addition to consultation I personally designed circuits and sensors for 3 full cacti; Barrel of Laughs, Agave and Prickly Pear. The Prickly Pear consisted of Inductive flowers whose light would die when removed from petals, and return when brought near again.</p>
            <h3>Rose Petals</h3>
				<section class="imageContainer">
		                <img src="images/petals.jpg" alt="Prickly Pear and Agave cactus" onclick="TINY.box.show({image:'images/petals_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />	
            <p>The <a href="http://emerge.asu.edu/">ASU Emerge 2012 </a> conferences sought to bring scientists and artists together. I was invited and tasked with developing an artifact from the future and using it 'as a string to pull on a future.' Through three days my object became beautiful rose petal pollution. After all, why a grey goo scenario--Why not a rose petal scenario?</p>
							 <h3>Fakerbot</h3>
							 <section class="imageContainer">
								<img src="images/fakerbot.jpg" alt="Fakerbot" onclick="TINY.box.show({image:'images/fakerbot_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
	 <p>After building a Rep Rap Mendel as close to specifications as possible and finding the design lacking, Corey Renner and I set out to start a new design with the open source Makerbot Cupcake as our starting point. The Fakerbot was born in March of 2011. We still blog our progress with the Fakerbot and 3dprinting over at <a href="http://fab.heatsynclabs.org">fab.heatsynclabs.org</a></p>
            <script type="text/javascript">
                setIosOverlay('verbageContainer');
            </script>
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
