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
            <a href="resume/resume_09_11_2017.pdf" download="Marshall Asch resume.pdf" class="btn-rounded-white">Download Resume</a>
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
                        I am a 3<sup>rd</sup> year computer science student at the <a href="https://www.uoguelph.ca/">University of Guelph</a>, working towards my Bachelor of Computing, Honours.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Experience</h2>
        <div id="experience-timeline">
            <div data-date="April 2017 – Present">
                <h3><a href="https://www.activintel.com/">Activintel</a></h3>
                <h4>Android Developer</h4>
                <p>
                    Working to build our app ArcherSee which is in the pre-alpha stage.
                </p>
            </div>

            <div data-date="September 2016 - April 2017">
                <h3><a href="http://ngtronix.ca/">NGTronix</a></h3>
                <h4>Web Developer</h4>
                <p>
                    Built our Internal tools.
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
                        <img src="images/download.png" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3>Solitaire</h3>
                        <p>
                            This is a program that I wrote in high school as a single player solitaire game in Java. It features scorring, customizable card backs, high scores and different user account profiles.
                        </p>
                        <a href="https://github.com/MarshallAsch/solitaire">View Project</a>
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
            <li>HTML</li>
            <li>PHP 5</li>
            <li>CSS</li>
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
                            <a href="https://www.linkedin.com/in/marshall-asch-58b09112b/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
