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
            <h2>work experience</h2>
            <h3>Director, HeatSync Labs; Mesa, Arizona (2009-Now)</h3>
            <ul>
							<li>
								Worked with team of passionate individuals to create a nonprofit company around the idea of building a community workshop with the goal of attracting the most intelligent and creative people together by providing them the space and access to tools to prototype and manufacture their designs.
							</li>
			  			<li>
							Led the 3d printing initiative developing and implementing exciting Open Source CNC robotics platforms to revolutionize manufacturing. Performed testing and analysis of stepper motor operation, motor noise, and thermal profiles. Experience with PID, linear motion, dc and stepper motors and drivers, and CAD design utilizing Sketchup and Openscad.
			  			</li>
              			<li>
              				Currently researching accessible Computer Systems Engineering, bringing the engineering tools to problem solve and prototype to the blind. First product to market is an extension of the open source Arduino platform modified with braille and haptics and screen reader friendly development environment.
              			</li>

            </ul>
            <h3>Research Assistant, CUbiC; Tempe, Arizona - (2009-2010)</h3>
            <ul>
                <li>
					Created a team to develop distributed actuation system for delivery of vibratory patterns to the body. Performed build vs buy calculations resulting in 50% build and 50% use of open source Atmel 8bit hardware designs to bring to market ASAP. Designed and Simulated schematic prior to Layout. Sourced, Prototyped and Tested design before handing off for professional manufacture. This work is still in use and has since been adopted and extended by multiple other teams, resulted in several publications and earned a Defense Department grant.
				</li>
                <li>
					Conceived next generation wireless sensing and actuation platform for body computing research. Faced novel challenges including power consumption of computation vs communication and the need for fully reconfigurable microcontroller profiles. Prototyped system utilizing Atmel 32bit microprocessors, Zigbee mesh wireless communication, 6DOF (accelerometers, magnetometers, and gyroscopes) for the TinyOS RTOS.
				</li>
            </ul>
            <h3>Application Systems Analyst, Arizona State University; Tempe, Arizona - (2005-2010)</h3>
            <ul>
                <li>
					Realized and Implemented client requirements to create innovative database driven web applications for a growing student population of over 69,000 students during a 5 year period which saw a 42% growth in the freshman class.
				</li>
				<li>
					Maintained, extended and improved existing products including the heavily trafficked Student Employment Search application. Transitioned existing codebase into single fault tolerant repository. Worked to modernize code around more secure, updatable, open source packages vs ‘roll your own’ solutions. Technologies included Java J2EE, Struts, Hibernate, XML, HTML, JavaScript, CSS, JSON, SQL, JQuery and AJAX.
					</li>
                <li>
					Leveraged Drupal PHP technology with an iterative agile approach to development to quickly deliver Scholarship Search Application allowing multiple departments to administer scholarships, students to search filter, sort and apply for scholarships, and administrators to search, sort and award recipients.
                </li>
				<li>
					Created FA-Net intranet platform to document and streamline internal processes and workflows among a department which quickly grew to locations on four campuses. Promoted user submission frameworks including wikis and forums allowing users to collaborate and archive their work.
				</li>
				</ul>
            <h2>tl;dr</h2>
            <p>From Open Source 3D Printing to Haptics and Ubiquitous Body Computing, I am passionate about making the future practical.</p>
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
