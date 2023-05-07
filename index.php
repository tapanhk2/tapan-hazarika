<?php
$description = "Tapan Hazarika, Bangalore Based Software Professional, Nodejs Developer, PHP Developer, Web, JavaScript, UI Developer, FullStack, Angular, HTML, CSS";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tapan Hazarika</title>
	<meta name="description" content="<?=$description?>">
	<meta name="author" content="Tapan Hazarika"><meta property="og:image" content="http://tapanhazarika.com/images/profilepic.jpg" />
	<meta property="og:title" content="Tapan Hazarika" />
	<meta property="og:description" content="<?=$description?>" />
	<meta property="og:site_name" content="Tapan Hazarika" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://tapanhazarika.com" />
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@tapanhazarika">
	<meta name="twitter:creator" content="@imtapanhazarika">
	<meta name="twitter:url" content="http://tapanhazarika.com">
	<meta name="twitter:title" content="Tapan Hazarika">
	<meta name="twitter:description" content="<?=$description?>">
	<meta name="twitter:image" content="http://tapanhazarika.com/iimages/profilepic.jpg">
		
    <link rel="shortcut icon" href="favicon.png" >
    <!-- Font Awesomehttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
        @media (min-width: 800px) {
            body{ font-size:16px }
        }
            
        .page-about {
            background-color: #1C2331; margin-top: -60px; padding-top: 60px; color: #cccccc; margin-bottom: 60px
        } 
        .h3.text-left {
            border-bottom: 3px solid #999999;
        }
        .fas.fa-terminal, #strengths .fas.fa-check-circle {
            padding-left: 20px;
        }
        .btn-info {
            background: #14799e!important   ;
        }
        .org-summary p {
            margin-bottom: .8rem;
        }
        .card {
            border-bottom: 1px solid #eeeeee;
        }
        .features-small  h4{
            font-size: 1.2rem;
        }
        #works h3 {
            font-size: 1.3rem;
        }
    </style>
</head>
<body>
<nav style="background: #1C2331; color: #ccc; padding: 20px 0">
    <div class="container">
    <!-- Brand -->
        <h1>Tapan Hazarika</h1>
        <div class="row">
            <div class="col-md-4">
            <i class="fas fa-phone-alt"></i> +91 78298 97087
            </div>
            <div class="col-md-4">
            <i class="fas fa-paper-plane"></i> tapanhk2@gmail.com
            </div>
            <div class="col-md-4">
            <i class="fas fa-map-marker-alt"></i> Bangalore, India
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->

<!--Main layout-->
<main class="mt-5 mb-5">
    <div class="container">
	    <section id="resume">
        <h3 class="h3 text-left mb-5">Professional Overview</h3>

            <div class="row features-small mb-5 mt-3 wow ">
                <!-- <div class="col-md-4">
                    <h2 class="my-5 h3 text-center">Professional Overview</h2>
                </div> -->
                <?php 
                    $aSummary = array(
                        "A Competent engineer with more than 10 years of expertise in client-side and server-side development.",
                        "Solid understanding of web technologies including Javascript, NodeJS, React, Angular          ",
                        "Experience with both SQL and No-SQL database..",
                        "Good understanding of developing Web Services, JSON, REST APIs micro services and consuming them in
            Web UI application.",
                        "Strong Organization and analytic skills, with strong problem solving ability and debugging skills.",
                        "Proven in ownership and delivery of a sizeable core product components on AWS cloud.",
                        "Like to work on challenging assignments in a high-energy, fast growing workplace.",
                    );
                
                ?> 
                <div class="col-md-12">
                <!--First row-->
                <?php foreach($aSummary as $sLine) { ?>
                
                <div class="row">
                    <div class="col-1">
                    <i class="fa fa-check-circle indigo-text"></i>
                    </div>
                    <div class="col-11">
                    <h6 class="feature-title"><?php echo $sLine ?></h6>
                    <div style="height:15px"></div>
                    </div>
                </div>
                <?php } ?>
                <!--/First row-->
                </div>
            </div>
        </section>	

        <!-- <hr class="my-5"> -->
        <div class="my-4"></div>
        <!--Section: Main features & Quick Start-->
        <section>

        <h3 class="h3 text-left mb-5">Technical Skills</h3>

        <!--Grid row-->
        <div class="row wow ">
            <style>
                .fab.fa-js-square:before {
                    color: #f0db4f;
                }
                .fab.fa-node-js:before, .fab.fa-node:before {
                    color: #3c873A
                }
                .fab.fa-react:before {
                    color: #61dbfb;
                }
                .fab.fa-angular:before {
                    color: #dd1b16;
                }
                .fas.fa-table:before {
                    color: #00758F;
                }
                .fas.fa-database:before {
                    color: #589636;
                }
                .fab.fa-php:before {
                    color: #474a8a;
                }
                
                .fab.fa-html5:before {
                    color: #f06529;
                }
                
                .fab.fa-css3:before {
                    color: #264de4;
                }
                
                .fab.fa-js-square.jq:before {
                    color: #0868AC;
                }
                .fab.fa-git-square:before{
                content: "\f092"; /* FontAwesome Unicode */
                color: #211F1F;
                }
                .fab.fa-jira:before{
                content: "\f7b1"; /* FontAwesome Unicode */
                color: #0052CC;
                }
                
            </style>

          <!--Grid column-->
            <?php
                
                $skillArray = array(
                    array(
                        'skillName' => 'JAVASCRIPT',
                        'percentage' => '(7+ years)',
                        'icon' => '<i class="fab fa-js-square"></i>'
                    ),
                    array(
                        'skillName' => 'NODEJS',
                        'percentage' => '(4+ years)',
                        'icon' => '<i class="fab fa-node-js"></i>'
                    ),
                    array(
                        'skillName' => 'EXPRESSJS',
                        'percentage' => '(4+ years)',
                        'icon' => '<i class="fab fa-node"></i>'
                    ),
                    array(
                        'skillName' => 'REACTJS',
                        'percentage' => '(2+ years)',
                        'icon' => '<i class="fab fa-react"></i>'
                    ),
                    array(
                        'skillName' => 'ANGULAR',
                        'percentage' => '(2+ years)',
                        'icon' => '<i class="fab fa-angular"></i>'
                    ),
                    array(
                        'skillName' => 'MYSQL',
                        'percentage' => '(5+ years)',
                        'icon' => '<i class="fas fa-table"></i>'
                    ),
                    array(
                        'skillName' => 'MONGODB',
                        'percentage' => '(2+ years)',
                        'icon' => '<i class="fas fa-database"></i>'
                    ),
                    array(
                        'skillName' => 'PHP',
                        'percentage' => '(5+ years)',
                        'icon' => '<i class="fab fa-php"></i>'
                    ),
                    array(
                        'skillName' => 'JQUERY',
                        'percentage' => '(5+ years)',
                        'icon' => '<i class="fab fa-js-square jq"></i>'
                    ),
                    array(
                        'skillName' => 'HTML',
                        'percentage' => '(7+ years)',
                        'icon' => '<i class="fab fa-html5"></i>'
                    ),
                    array(
                        'skillName' => 'CSS',
                        'percentage' => '(7+ years)',
                        'icon' => '<i class="fab fa-css3"></i>'
                    )
                
                );
            ?>
			<?php foreach($skillArray as $skill) { ?>
            <div class="col-md-4 ">
            <div class="card py-1 px-3 btn-info1">
            <!--First row-->
            <div class="row">
                <div class="col-1">
                <?php echo $skill['icon']?>
                </div>
                <div class="col-10 pl-2">
                <div class="feature-title"><?php echo $skill['skillName']?> <small><?php echo $skill['percentage']?></small></div>
                </div>
                </div> </div>
            <!--/First row-->

                <div style="height:30px"></div>
                </div>
                <?php } ?>

            </div>
            

        </section>

      <!-- <hr class="my-5"> -->
      <div class="my-4"></div>
      <section>

        <h3 class="h3 text-left mb-5">Other Skills & Tools</h3>

        <!--Grid row-->
        <div class="row wow ">

          <!--Grid column-->
          <?php
		  	
			$skillArray = array(
				array(
					'skillName' => 'GIT',
					'percentage' => '',
					'icon' => '<i class="fab fa-git-square"></i>'
				),
				array(
					'skillName' => 'JIRA',
					'percentage' => '',
					'icon' => '<i class="fab fa-jira"></i>'
				),
			
			);
		  ?>
            <?php foreach($skillArray as $skill) { ?>
            <div class="col-md-4 ">
            <div class="card py-1 px-3 btn-info1">
            <!--First row-->
            <div class="row">
                <div class="col-1">
                <?php echo $skill['icon']?>
                </div>
                <div class="col-10 pl-2">
                <div class="feature-title"><?php echo $skill['skillName']?> <small><?php echo $skill['percentage']?></small></div>
                </div>
                </div> </div>
            <!--/First row-->

            <div style="height:30px"></div>
            </div>
            <?php } ?>
          </div>
      </section>
	  
	  <section>

        <div class="row features-small mb-5 mt-3 wow ">
			<div class="col-md-12">
				<h2 class="my-5 h3 text-left">Education</h2>
			</div>
			
          

          <!--First column-->
            <div class="col-md-12">
                <!--First row-->
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-graduation-cap fa-2x indigo-text"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="feature-title">Master of Computer Application (MCA)</h6>
                        <p class="grey-text">Tezpur University</p>
                        <p class="small"><i class="fas fa-map-marker-alt"></i> Tezpur, Assam, India <em class="date pl-5"><i class="far fa-calendar-alt"></i> Aug 2006 - June 2009</em></p>
                        <div style="height:15px"></div>
                    </div>
                </div>
                <!--/First row-->
                <!-- <div class="row">
                    <div class="col-1">
                        <i class="fa fa-graduation-cap fa-2x indigo-text"></i>
                    </div>
                    <div class="col-11">
                        <h6 class="feature-title">B.Sc. Physics</h6>
                        <p class="grey-text">Chaiduar College, Gauhati University <span>&bull;</span> <em class="date">2006</em></p>
                        <div style="height:15px"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
	<!-- <hr class="my-5"> --><br><br><br>
	<div class="my-4"></div>  
	<section>
        <h2 class="my-5 h3 text-left">Professional Experience</h2>
			<?php 
				$aExp = array(
					array(
						'organisation' => "Sugoi Labs",
						'designation' => 'Product Development Engineer',
						'timeline' => 'April 2015 - Present',
						'location' => 'Bangalore, Karnataka, India',
						'summary' => array(
                            "Working as a Full-Stack developer",
                            "Taken the ownership of the projects.",
                            "Lead the team of 2 to 3 people.",
                            "Interacted with the clients for requirements of the project.                            ",
                        )
					),
					array(
						'organisation' => "RJ45 Technologies",
						'designation' => 'Software Developer',
                        'timeline' => 'June 2014 - April 2015',
						'location' => 'Guwahati, Assam, India',
                        'summary' => array(
                            "Working as a Full-Stack developer",
                            "Taken the ownership of the projects.",
                            "Lead the team of 2 to 3 people.",
                            "Interacted with the clients for requirements of the project.                            ",
                        )
					),
					array(
						'organisation' => "ClearWin Technologies",
						'designation' => 'Software Developer',
                        'timeline' => 'August 2010 - June 2014',
						'location' => 'Guwahati, Assam, India',
                        'summary' => array(
                            "Working as a Full-Stack developer",
                            "Taken the ownership of the projects.",
                            "Lead the team of 2 to 3 people.",
                            "Interacted with the clients for requirements of the project.                            ",
                        )
					),
				);
                ?>   
            <?php foreach($aExp as $aE) { ?>
            <div class="row features-small ">
            
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-1">
                            <i class="far fa-file-code indigo-text fa-2x"></i>
                        </div>
                        <div class="col-11">
                            <h4 class="feature-title mb-2"> <?php echo $aE['designation']?></h4>
                            <h4 class="grey-text-2 mb-4"><small>@</small> <i><?php echo $aE['organisation']?> </i>
                            </h4>
                            
                            <span class="grey-text small"><i class="fas fa-map-marker-alt"></i> <?php echo $aE['location']?></span>
                            <span class="grey-text-2 small pl-3"><i class="far fa-calendar-alt"></i> <?php echo $aE['timeline']?></span> 
                            
                        </div>
                    </div>
                
                </div>
            <!--First column-->
                <div class="col-md-7 org-summary">
                    <?php foreach($aE['summary'] as $summary) { ?>
                    <div class="row">
                        <div class="col-1">
                        <i class="fa fa-check-circle indigo-text"></i>
                        </div>
                        <div class="col-11">
                            <p><?php echo $summary?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <hr class="my-3 mb-5">   
            <?php } ?>
	</section>	
	
	
	<section id="works">
        <h2 class="my-5 h3 text-left">Latest Professional Projects</h2>
        	<?php 
			
				$aWorks = array(
					array(
						'projectName' => "MondayReady",
						'img' => 'ostays-min.jpg',
						'summary' => array(
                            "Worked as a Full-Stack developer. It is a product to Improve review system across the entire industry.",
                            "Worked on NodeJs, MongoDB and ExpressJS in building RESTful Web Services.",
                            "Worked on Reactjs in building frontend user interface(UI) with consuming APIs",
                            "Implemented search, aggregation using MongoDb as a database.",
                        )
                    ),
                    array(
						'projectName' => "Sita Guide and Placement",
						'img' => 'ostays-min.jpg',
						'summary' => array(
                            "Worked as a Frontend developer. ",
                            "Worked on Reactjs in building frontend user interface(UI) with consuming APIs"
                        )
					),
					
					array(
						'projectName' => "Sunny Food App",
						'img' => 'ostays-min.jpg',
						'summary' => array(
                            "Worked as a Full-Stack developer.",
                            "Worked on NodeJs, MongoDB and ExpressJS in building RESTful Web Services.",
                            "Worked on Angular 9 in building frontend user interface(UI) with consuming APIs"
                        )
                    ),
                    array(
						'projectName' => "Mystery Shopper",
						'img' => 'vidya-min.jpg',
						'summary' => array(
                            "Worked as a Full-Stack developer. ",
                            "Worked on NodeJs, MongoDB and ExpressJS in building RESTful Web Services.",
                            "Worked on Reactjs in building frontend user interface(UI) with consuming APIs"
                        )
					),
					array(
						'projectName' => "Toyota U Trust",
						'img' => 'ostays-min.jpg',
						'summary' => array(
                            "Worked as a frontend developer. It is the web application of Toyota U Trust for buying and selling old car. Basically worked on refurbishment and valuation process",
                            "Worked on angular 7 in building frontend user interface(UI) with consuming APIs",
                        )
					),
					
					array(
						'projectName' => "DailyNinja",
						'img' => 'ostays-min.jpg',
						'summary' => array(
                            "Worked on NodeJs, MySQL and ExpressJS in building RESTful Web Services.",
                            "Created Progressive Web App of dailyninja for the products like PhonePe and Paytm.",
                            "Worked on NodeJs and ExpressJS to integrate the DailyNinja app in PhonePe.",
                        )
					),
					
					array(
						'projectName' => "Aircarry",
						'img' => 'lima-min.jpg',
						'summary' => array(
                            "Worked on NodeJs and ExpressJS in building RESTful Web Services.",
                            "Worked on NodeJs, MySQL sequelize and ExpressJS in building RESTful Web Services.",
                            "Worked on JavaScript, jQuery in building frontend user interface(UI) with consuming APIs ",
                        )
					),
					
					array(
						'projectName' => "Brew69",
						'img' => 'regain-min.jpg',
						'summary' => array(
                            "Worked as a full stack developer on the product to easy to-use, powerful online store for manage, selling
                            and subscription of BREW coffee",
                            "Worked on NodeJs, MySQL sequelize and ExpressJS in building RESTful Web Services",
                            "Worked on Angular 6 in building frontend user interface(UI) with consuming APIs",
                        )
					),
					
					array(
						'projectName' => "SpringVerify",
						'img' => 'citimagic-min.jpg',
						'summary' => array(
                            "Worked as a full stack developer on the product to companies to verify their employees",
                            "Worked on PHP and MySQL in backend",
                            "Worked on JavaScript, jQuery in building frontend user interface(UI) with consuming APIs",
                        )
					),
					
					
				);
			?>
			<?php foreach($aWorks as $aWork) { ?>
			
			
			<div class="row wow ">
					<div class="col-lg-12">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong><i class="fas fa-code"></i> <?php echo $aWork['projectName'] ?></strong>
                        </h3>
					</div>	
                    <div class="col-lg-12 mb-4">
                    <?php foreach($aWork['summary'] as $summary) { ?>
                        <div class="row">
                        
                            <div class="col-12 org-summary">
                                <p><i class="fas fa-terminal indigo-text"></i> <?php echo $summary?></p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <!--Grid column-->
                </div>       
			
		<?php } ?>
    </section>
    
    <section id="strengths">
        <h2 class="my-5 h3 text-left">Strengths</h2>
        	<?php 
				$aStrengths = array(
                    "Hard worker, positive thinker, quick learner.",
                    "Good team player. Can work in team and also can ﬁnish a project as a single member.",
                    "Flexible to any working condition.",
                    "Can work under pressure to meet deadlines",
				);
			?>
			<?php foreach($aStrengths as $summary) { ?>
                <div class="row">
                
                    <div class="col-12">
                        <p><i class="fas fa-check-circle indigo-text"></i> <?php echo $summary?></p>
                    </div>
                </div>
			
		<?php } ?>
    </section>
    <section id="online">
        <h2 class="my-5 h3 text-left">Find Me Online</h2>
        <div class="row">
                
            <div class="col-12">
                <p class="pl-4"><i class="fab fa-linkedin indigo-text"></i> LinkedIn @ <span class="pl-4">https://www.linkedin.com/in/tapanhazarika</span></p>
            </div>
        </div>
    </section>    
    </div>
  </main>
  <!--Main layout-->

  
</body>
<script>
function init() {
    var name = 'Mozilla'; // name is a local variable created by init
    var cnt = 0; // name is a local variable created by init
    function displayName() { // displayName() is the inner function, a closure
        console.log(cnt); // use variable declared in the parent function
        cnt++
    }
    displayName();
    displayName();
}
init();
console.log('--------');
init();
</script>
</html>