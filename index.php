
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <h1>Marshall Asch</h1>
            <h2>Full Stack Developer</h2>
            <a href="resume" download="Marshall Asch resume.pdf" class="btn-rounded-white">Download Resume</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">About Me</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        I am a 4<sup>th</sup> year computer science student at the <a href="https://www.uoguelph.ca/">University of Guelph</a>, working towards my Bachelor of Computing, Honours.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experience</h2>
        <div id="experience-timeline">
            <div data-date="May 2018 – August 2018">
                <h3><a href="https://left.io">Left of the Dot Media</a></h3>
                <h4>Android Developer</h4>
                <p>
                    Worked on a mobile application for Android using the <a href="https://rightmesh.io">RightMesh</a>
                    Mesh networking platform. Worked on a small team and provided weekly updates to the project manager.

                </p>
            </div>
        	<div data-date="July 2017 – August 2017">
                <h3><a href="https://www.lakeridgehealth.on.ca">Lakeridge Health</a></h3>
                <h4>IT Student</h4>
                <p>
                	Designed and built internal web tools for auditing and incident reporting.
                    Assisted with the configuration and deployment of an out of band network to monitor
                    the network around the hospital. Performed the migration of Windows SCCM and SQL servers
                    in an enterprise environment.

                </p>
            </div>
            <div data-date="April 2017 – Present">
                <h3><a href="https://www.activntel.com/">ActivNtel</a></h3>
                <h4>Android Developer</h4>
                <p>
                    Worked as the lead Android developer designing and building an application for
                    the Canadian National Archery team to perform real time data recording and analysis.
                    Developed application layer network protocol to communicate with a server. Cooperated
                    with different departments to design and build different components for the app
                    (i.e. hardware engineering to design communication protocols).
                </p>
            </div>

            <div data-date="September 2016 - April 2017">
                <h3><a href="http://ngtronix.ca/">NGTronix</a></h3>
                <h4>Web Developer</h4>
                <p>
                    Worked with the human resources and financing team to build a variety of
                    internal web tools to help with project time tracking and careers pages.
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->

    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>University of Guelph</h3>
            <span class="education-date">Sept 2015 - Sept 2019</span>
            <h4>Bachelor of Science in Computer Science Honours</h4>
            <p>
                <ul>
                    <li>
                        Member of SOCIS (Society of Computing and Information Science)
                    </li>
                    <li>
                        Executive of SOCIS for the Fall 2018 and Winter 2019 Semesters
                    </li>
                    <li>
                        Maintained Dean's Honours List Fall 2015 – Winter 2018 as a result of having a 3.82 GPA
                    </li>
                    <li>
                        Received the University of Guelph Entrance Scholarship for obtaining a minimum average of 85% at a registered Ontario secondary school.
                    </li>
                </ul>
            </p>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Projects</h2>
        <div class="container">
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/veil.png"  height="225" width="225"/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Veil</h3>
                        <p>
                            This is the mesh networking app that I built with <a href="https://github.com/weihanli101">Weihan Li</a>
                            while working for <a href="https://left.io">Left</a>. The app is a basic forum platform where users are able
                            to create posts (with a title, message and tags) that other users are able to then see and reply to. The basis
                            for the app is to create a platform that is somewhat similar to <a href="https://stackoverflow.com/">Stack Overflow</a>
                            that does not rely on an internet connection or centralized data storage.

                        </p>
                        <a href="https://github.com/MarshallAsch/veil-droid">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/myIR.png"  height="225" width="225"/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>MyIR</h3>
                        <p>
                            This is an app that was built for Interventional Radiologists as a helpful resource
                            for different types of medical conditions. The app was created in partnership with Dr. Justin Shafa
                            for both Android and Apple.

                        </p>
                        <a href="https://github.com/MarshallAsch/myIR_ios">View Project (iOS)</a> <br>
                        <a href="https://github.com/MarshallAsch/myIR_android">View Project (Android)</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/cards.png"  height="225" width="225"/>
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Solitaire</h3>
                        <p>
                           	This is a program that I wrote in high school as a single player solitaire game.
                            It features scoring, customizable card backs, high scores and different user account profiles.
                            It is written by hand in Java and uses XML to store the data.

                        </p>
                        <a href="https://github.com/MarshallAsch/solitaire">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/webhooks.svg" height="225" width="225" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Continuous Integration Server</h3>
                        <p>
                           	A configurable <a href="https://nodejs.org/">Node.js</a> server that will receive GitHub or Gitlab
                            <a href="https://developer.github.com/webhooks/">webhooks</a> to automatically run a script for a specific
                            repository and branch.
                        </p>
                        <a href="https://github.com/MarshallAsch/CI_server">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/project.jpg" height="225" width="225" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Dragon Collar</h3>
                        <p>
                        	A wireless Bluetooth dog collar that was developed as the ECHacks 2017 project.
                            It utilizes an <a href="https://store.arduino.cc/genuino-101">Arduino 101</a> board and an Android mobile application.
                        </p>
                        <a href="https://github.com/MarshallAsch/echacks2017">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="images/project.jpg" height="225" width="225" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>CIS3750 Community Engaged Scholarship</h3>
                        <p>
                        	A web API that was build for a software design course with to address a social
                        	challenge in our community. It is a Node.js backend with a MySQL database.
                        </p>
                        <a href="https://cis3750.marshallasch.ca">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Skills</h2>
        <ul>
            <li>Android SDK</li>
            <li>MySQL</li>
            <li>BASH</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>Java</li>
            <li>C</li>
            <li>HTML5</li>
            <li>PHP5</li>
            <li>CSS3</li>
            <li>Bootstrap</li>
        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Get in Touch</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/maasch@rogers.com">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Your email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; <?php echo date("Y");?> Marshall Asch
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/MarshallAsch" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/users/4816497/marshall-asch" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/marshall.asch" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/MarshallAsch/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105152641-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-105152641-1');
</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
