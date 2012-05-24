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
    <article id="verbageContainer" class="descriptionContainer" onload="setIosOverlay(this.id)">
      <h3>Heddatron</h3>
			 <section class="imageContainer">
	        <img src="images/heddatron.jpg" alt="Robot Invasion" onclick="TINY.box.show({image:'images/heddatron_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
	      </section>
			<p>I worked under my partner Tim Gerrits and with the assistance of HeatSync Labs to create five robots in under five weeks for the Arizona Premier of Heddatron by Elizabeth Meriwether. The director Ron May informed us we were the 10th attempt at Heddatron, but only the 4th to successfully open specifically because of the complexities in utilizing robotics and technology in a theater setting and schedule.</p>
			 <h3>Interactive Cacti Grove</h3>
			 <section class="imageContainer">
	        <img src="images/prickly.jpg" alt="Prickly Pear and Agave cactus" onclick="TINY.box.show({image:'images/prickly_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
	      </section>
			<p>Mesa Arts approached me to be technical consultant on entire cactus grove concept for the Mesa Festival of Creativity 2012. In addition to consultation I personally designed circuits and sensors for three full cacti; Barrel of Laughs, Agave and Prickly Pear. The Prickly Pear consisted of Inductive coils hidden in the petals and a custom arduino shield to drive them. Flowers, art designed by the <a href="http://swscrapexchange.org/">SW Scrap Exchange</a>, had similar coils tuned to light internal leds when the flowers were brought near the petals they would 'live', but when removed would slowly 'die.'</p>
      <h3>Rose Petals</h3>
				<section class="imageContainer">
		        <img src="images/petals.jpg" alt="3D printed rose petals" onclick="TINY.box.show({image:'images/petals_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
		  </section>	
      <p>The <a href="http://emerge.asu.edu/">ASU Emerge 2012 </a> conferences sought to bring scientists and artists together. I was invited and tasked with developing an artifact from the future and using it 'as a string to pull on a future.' Through three days my object became beautiful rose petal pollution. After all, why a grey goo scenario--Why not a rose petal scenario?</p>
			 <h3>Widget Tags</h3>
					<section class="imageContainer">
			        <img src="images/widgettag.png" alt="Widget Tag" onclick="TINY.box.show({image:'images/widgettag.png',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
			  </section>
	      <p>In setting up the microcontroller workshop area at HeatSync Labs I had a need for tags to describe all the components, even the littleist ones. Inspired by the <a href="http://www.thingiverse.com/thing:8195">thingitag</a> I created the WidgetTag. It was designed specifically against Sparkfun.com as they include other informational metadata like Fritzing, Eagle, OSHW and ROHS, but it will work on any site, really. It uses plain javascript and hosted jquery to scrape the current page and send the data to google for qr-coding. Create a new bookmark and replace the url with the code at <a href="https://github.com/jacobrosenthal/widgettag">github</a>	</p>.
							 <h3>Fakerbot</h3>
							 <section class="imageContainer">
								<img src="images/fakerbot.jpg" alt="Fakerbot" onclick="TINY.box.show({image:'images/fakerbot_large.jpg',boxid:'frameless',animate:true,openjs:function(){openJS()}})" />
								  </section>
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
