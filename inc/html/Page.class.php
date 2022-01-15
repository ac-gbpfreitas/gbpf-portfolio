<?php

  class Page{

    public static function pageHeader(){
      $header = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
            self::importCss().self::importScript()
            .'<link rel="stylesheet" href="css/style.css">
            <title>Gustavo Freitas - Portfolio</title>
        </head>
          <body>
      ';
      echo $header;
    }

    private static function importCss(){
      $bootStrapCss = '
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      ';
      $fontAwesome = '
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
      ';
      $w3SchoolCss = '
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      ';
      $css = '
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
      ';
      return $css."\n".$bootStrapCss;
    }

    private static function importScript(){
      $bootStrapScript = '
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      ';
      $jQuery = '
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      ';
      $script = '
      <script src="../../components/script/script.js"></script>';

      return $jQuery.$bootStrapScript;
    }

    private static function pageSideBar(){
      $sideBarResponsive = '
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="img/profile.jpg" alt="Portfolio">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">Portfolio</h3>
                                <p class="profile-description">PHP Web Software Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                        <li><a href="#projects"><i class="fa fa-paperclip"></i>My Projects</a></li>
                        <li><a href="#education"><i class="fa fa-book"></i>Education</a></li>
                        <li><a href="#references"><i class="fa fa-share-alt"></i>References</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
      ';
      $sideBar = '
      <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="img/profile.jpg" alt="Profile">
                </div>
                <h3 class="profile-title">Gustavo Freitas</h3>
                <p class="profile-description">PHP Web Software Developer</p>
            </div> <!-- top-section -->
            <div class="main-navigation" style="margin-top:0px;">
                <ul class="navigation">
                    <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
                    <li><a href="#about"><i class="fa fa-pencil"></i>About Me</a></li>
                    <li><a href="#projects"><i class="fa fa-paperclip"></i>My Projects</a></li>
                    <li><a href="#education"><i class="fa fa-book"></i>Education</a></li>
                    <li><a href="#references"><i class="fa fa-share-alt"></i>References</a></li>
                    <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <li><a href="mailto:ac.gbpf@gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://linkedin.com/in/gustavobpf"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/ac-gbpfreitas"><i class="fa fa-github"></i></a></li>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
      ';

      return $sideBarResponsive."\n".$sideBar."\n".self::pageBanner();
    }

    private static function pageBanner(){
      $banner = '
        <div class="banner-bg" id="top">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2>
                    Gustavo Freitas<br>
                    PHP Web Software Developer
                </h2>
            </div>
        </div>
      ';
      return $banner;
    }

    private static function pageAbout(){
      $about = '
      <!-- ABOUT -->
      <div class="page-section" id="about">
        <div class="row">
          <div class="col-md-12">
            <h4 class="widget-title">About Me</h4>
            <p class="custom-font-size">
                I am PHP software developer graduated in Computer and Information Systems at Douglas College.
                I am proactive, independent and an innovation enthusiast. 
                My best experience was in Brazil, where I was trained and worked with other PHP developers.
                During this experience, I was able to develop websites with database operations.    
            </p>
            <div style="float:left; width: 100%;">
              <div class="custom-skills">
                <ul class="list-group">
                  <li class="list-group-item active">
                      Backend
                      <span class="badge badge-primary badge-pill"><i class="fa fa-code"></i></span>
                  </li>
                  <li class="list-group-item">PHP</li>
                  <li class="list-group-item">Object Oriented Programming</li>
                  <li class="list-group-item">REST API</li>
                  <li class="list-group-item">Windows and Linux Apache</li>
                </ul>
              </div>
              <div class="custom-skills">
                <ul class="list-group">
                  <li class="list-group-item active">
                    Frontend
                    <span class="badge badge-primary badge-pill"><i class="fa fa-laptop"></i></span>
                  </li>
                  <li class="list-group-item">JavaScript and jQuery</li>
                  <li class="list-group-item">Bootstrap and Fontawesome</li>
                  <li class="list-group-item">HTML and CSS</li>
                </ul>
              </div>
              <div class="custom-skills">
                  <ul class="list-group">
                    <li class="list-group-item active">
                        Database
                        <span class="badge badge-primary badge-pill"><i class="fa fa-database"></i></span>
                    </li>
                    <li class="list-group-item">MySQL</li>
                    <li class="list-group-item">MongoDB</li>
                    <li class="list-group-item">PostgreSQL</li>
                  </ul>
              </div>
              <div class="custom-skills">
                  <ul class="list-group">
                    <li class="list-group-item active">
                      Source Control 
                      <span class="badge badge-primary badge-pill"><i class="fa fa-code-fork"></i></span>
                    </li>
                    <li class="list-group-item">SCRUM and Agile</li>
                    <li class="list-group-item">Jira</li>
                    <li class="list-group-item">Git and Github</li>
                  </ul>
              </div>
            </div>
          </div>
        </div> <!-- #about -->
      </div>
      <hr>
      ';
      return $about;
    }

    private static function pageProjects(){
      $projects = '
        <!-- PROJECTS -->
        <div class="page-section" id="projects">
        <div class="row">
          <div class="col-md-12">
            <h4 class="widget-title">Few Labs and Projects</h4>
          </div>
        </div>
        <div class="row projects-holder">
            <div class="col-md-4 col-sm-6">
              <div class="project-item">
                <img src="img/1.jpg" alt="">
                <div class="project-hover">
                  <div class="inside">
                    <h5>
                      <a href="https://github.com/ac-gbpfreitas/aioBusiness">
                        PHP Dashboard project
                      </a>
                    </h5>
                    <p>This is a project with full development from MongoDB until Frontend.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project-item">
                    <img src="img/2.jpg" alt="">
                    <div class="project-hover">
                        <div class="inside">
                            <h5>
                                <a href="https://github.com/ac-gbpfreitas/phpFileReaderDemo">
                                    PHP File Reader Demo
                                </a>
                            </h5>
                            <p>PHP Project that reads CSV files and display in a table.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project-item">
                    <img src="img/3.jpg" alt="">
                    <div class="project-hover">
                        <div class="inside">
                            <h5>
                                <a href="https://github.com/ac-gbpfreitas/phpFileReaderWriterDemo">
                                    PHP File Reader and Writer Demo
                                </a>
                            </h5>
                            <p>Demo code that reads, create, display in a table, and sort data from file.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project-item">
                    <img src="img/4.jpg" alt="">
                    <div class="project-hover">
                        <div class="inside">
                            <h5>
                                <a href="https://github.com/ac-gbpfreitas/phpLoginManager">
                                    PHP Login and Session Manager
                                </a>
                            </h5>
                            <p>PHP Demo code that Manage Sessions and User Login/Logout</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project-item">
                    <img src="img/5.jpg" alt="">
                    <div class="project-hover">
                        <div class="inside">
                            <h5>
                                <a href="https://github.com/ac-gbpfreitas/phpCalendarDemo">
                                    PHP Calendar Demo
                                </a>
                            </h5>
                            <p>Small Demo PHP Calendar code.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="project-item">
                    <img src="img/6.jpg" alt="">
                    <div class="project-hover">
                        <div class="inside">
                            <h5>
                                <a href="https://github.com/ac-gbpfreitas/androidRoomDatabase">
                                    Android Studio Room Database Demo
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .projects-holder -->
        </div>
        <hr>
      ';
      return $projects;
    }

    private static function pageEducation(){
      $education = '
        <!-- EDUCATION -->
        <div class="page-section" id="education">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="widget-title">EDUCATION</h4>
                    <div class="row"> <!-- EDUCATION #1 ROW START -->
                        <div class="col-sm-6"> <!-- DOUGLAS COLLEGE START -->
                          <div class="card">
                            <div class="card-body">
                                <h5 class="card-title h5">
                                    <a href="https://www.douglascollege.ca/program/dpcsti" target="_blank">
                                        <strong>Computer and Information Systems Post-Baccalaureate (Diploma)</strong>
                                    </a>
                                </h5>
                              <p class="card-text h6">Douglas College - New Westminster, BC - Canada</p>
                              <p class="h6">Sep/2019 - Sep/2021</p>
                              <button class="btn btn-primary custom-readmore" type="button" data-toggle="collapse" data-target="#douglasCollege" aria-expanded="false" aria-controls="douglasCollege">
                                Read More
                              </button>
                              <div class="collapse" id="douglasCollege">
                                <div class="content-education">
                                    <ul>
                                        <li>
                                            •	Software development methodologies with Agile and Scrum,
                                            software quality, metrics and requirements analysis.
                                            Software development and management working in teams,
                                            software version control (GitHub), software testing.
                                        </li>
                                        <li>
                                            •	Object oriented software engineering principals and design,
                                            implement and apply the unified modeling language (UML),
                                            database framework implementation.
                                        </li>
                                        <li>
                                            •	Creating structured and responsive websites scalable to mobile,
                                            tablet, and desktop devices using HTML and CSS.
                                            JavaScript: arrays, loops, conditional statements, basic client-side programming,
                                            DOM elements, and processing form data.
                                        </li>
                                        <li>
                                            •	PHP scripting language (data type, variables, syntax & development environments),
                                            working with forms, patterns, files and arrays, text processing and regular expression.
                                            Manage and set up apache web servers, extend web server functionality.
                                            Object-orientation, manipulating files and directories, extending server side functionality
                                            with additional email, FTP and other server technologies.
                                        </li>
                                        <li>
                                            •	Manipulating MySQL / MSSQL database server, implementing user authentication
                                            and secure transaction with MySQL or MSSQL,
                                            build database driven dynamic web content using server based DBMS technology.
                                        </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- DOUGLAS COLLEGE END -->
                        <div class="col-sm-6"> <!-- MASTER DEGREE START -->
                          <div class="card">
                            <div class="card-body">
                                <h5 class="card-title h5">
                                    <a href="http://www.ppgia.ufrpe.br/?q=en" target="_blank">
                                        <strong>Computer and Information Systems Master’s degree – Applied Computing</strong>
                                    </a>
                                </h5>
                                
                                <p class="card-text h6">Pernambuco Federal University (Recife – Brazil)</p>
                                <p class="h6">Mar/2017 - Apr/2019</p>
                              <button class="btn btn-primary custom-readmore" type="button" data-toggle="collapse" data-target="#masterDegree" aria-expanded="false" aria-controls="masterDegree">
                                Read More
                              </button>
                              <div class="collapse" id="masterDegree">
                                <div class="content-education">
                                    <ul>
                                        <li>
                                            •	Programming foundations applied: Computer programming techniques, object orientation.
                                            New programming models, implementation, and static analysis of programs.
                                            Python backend techniques and Kotlin introduction.
                                        </li>
                                        <li>
                                            •	Systems Analysis and Design: Object-oriented concepts; Software development process models;
                                            UML Overview. Layered Development: Interface (HMI) and Business Logic (LN), and Database (DB).
                                            Data Modeling: Model Relationship Entity (MER), Relational Model (MR), Object Oriented Model (MOO).
                                        </li>
                                        <li>
                                            •	Software Quality Models: Models and standards for process and software improvement.
                                            Approaches for process improvement: PDCA, IDEAL, and improvement cycle. 
                                            Software Testing: fundamental concepts of the testing area, their approaches and strategies of use.
                                            Testing techniques: concepts, patterns and structuring of test cases.
                                            Implementation of practices aimed at innovation for design, specification and prototyping.
                                        </li>
                                        <li>
                                            •	WordPress project development: using plugins, themes, backups, and providing clean websites layouts.
                                        </li>
                                    
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- MASTER DEGREE END -->
                    </div>
                    <br>
                    <div class="row"> <!-- ROW #2 -->
                        <div class="col-sm-6"> <!-- BUSINESS DEGREE START -->
                            <div class="card">
                              <div class="card-body">
                                  <h5 class="card-title h5">
                                        <a href="https://vestibular.uninassau.edu.br/PS_Nassau/curso/3/4659/1/administracao/Recife-PE" target="_blank">
                                            <strong>Business Administration Baccalaureate Degree</strong>
                                        </a>
                                  </h5>
                                <p class="card-text h6">Uninassau University (Recife – Brazil)</p>
                                <p class="h6">Ago/2006 - Jun/2010</p>
                                <!-- <button class="btn btn-primary custom-readmore" type="button" data-toggle="collapse" data-target="#businessDegree" aria-expanded="false" aria-controls="businessDegree">
                                  Read More
                                </button>
                                <div class="collapse" id="businessDegree">
                                  <div class="">
                                    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                  </div>
                                </div> -->
                              </div>
                            </div>
                          </div> <!-- BUSINESS DEGREE END -->
                    </div> 
                    <!-- EDUCATION #1 ROW END -->

                    <div class="row custom-space" style="height:2%;"> <!-- EDUCATION #2 ROW START -->
                      <div class="col-md-12"">
                        <h4 class="widget-title" style="margin-bottom:1%;">
                          <a href="https://lynda.com" target="_blank" style="margin-right:1%;">LinkedIn Learning</a>
                          <i class="fa fa-linkedin"></i>
                          </h4>
                      </div>
                    
                    </div>
                    <div class="row"> <!-- EDUCATION #2 ROW START -->
                        <div class="col-sm-6"> <!-- DOUGLAS COLLEGE START -->
                          <ul class="list-group">
                            <li class="list-group-item">
                                <strong class="h5">Apache, PHP, and Programming Foundations</strong>
                              <p style="margin-top:5%;">  
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target="#lyndaPHP" aria-expanded="false" aria-controls="lyndaPHP">
                                  Courses
                                </button>
                                <div class="collapse" id="lyndaPHP">
                                  <div class="">
                                    <ul style="margin-top:5%;">
                                      <li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Finstalling-apache-mysql-and-php-3%3Ftrk%3Dshare_ent_url%26shareId%3D52oamrouRnmmfIGWMvKJQg%253D%253D" target="_blank">• Installing Apache, MySQL, and PHP</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Ffirst-look-php-7-4%3Ftrk%3Dshare_ent_url%26shareId%3DtqfcPSzOQ9eWBqBLDAsouw%253D%253D" target="_blank">• First Look: PHP 7.4</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Ffunctional-programming-with-php%3Ftrk%3Dshare_ent_url%26shareId%3DlVd2mBV%252BQ7OJFLoA9RyIOg%253D%253D" target="_blank">• Functional Programming with PHP</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fphp-object-oriented-programming-with-databases%3Ftrk%3Dshare_ent_url%26shareId%3Dc0obENzoTeS%252FIqESYDkpgw%253D%253D" target="_blank">• PHP: Object-Oriented Programming with Databases</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fprogramming-foundations-object-oriented-design-3%3Ftrk%3Dshare_ent_url%26shareId%3DJJr9Yr%252BZRFK9NfYmQVYl8Q%253D%253D" target="_blank">• Programming Foundations: Object-Oriented Design</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fphp-design-patterns%3Ftrk%3Dshare_ent_url%26shareId%3DjPlseGh6TFaJ3SUxT54JHg%253D%253D" target="_blank">• PHP: Design Patterns</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </p>
                            </li>
                            <li class="list-group-item">
                                  <strong class="h5">Databases Foundations<br>(MySQL, MongoDB, PostgreSQL)</strong>
                                <p style="margin-top:5%;">
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target="#lyndaDatabase" aria-expanded="false" aria-controls="lyndaDatabase">
                                  Courses
                                </button>
                                <div class="collapse" id="lyndaDatabase">
                                  <div class="">
                                    <ul style="margin-top:5%;">
                                      <li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fphp-with-mysql-essential-training-2-build-a-cms%3Ftrk%3Dshare_ent_url%26shareId%3DJCvIAenWSnaVJhj8w6dlDw%253D%253D" target="_blank">• PHP with MySQL Essential Training: 2 Build a CMS</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fchoosing-a-data-platform-postgresql-mysql-mongo-and-cloud%3Ftrk%3Dshare_ent_url%26shareId%3DxkW8KCh1RvigJ44Uj%252F2bSg%253D%253D" target="_blank">• Choosing a Database: PostgreSQL, MySQL, Mongo, and Cloud</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fdatabase-foundations-application-development%3Ftrk%3Dshare_ent_url%26shareId%3Df9%252B%252Bl5L%252FRVidzwZqHgbB5A%253D%253D" target="_blank">• Database Foundations: Application Development</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Flearning-mongodb%3Ftrk%3Dshare_ent_url%26shareId%3DYpf%252Be4kFTS2cAu%252FV6Ut9Wg%253D%253D" target="_blank">• Learning MongoDB</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Flearning-relational-databases-2%3Ftrk%3Dshare_ent_url%26shareId%3D%252FpCJSXexQKCawPUfG8myVA%253D%253D" target="_blank">• Learning Relational Databases</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Flearning-phpmyadmin%3Ftrk%3Dshare_ent_url%26shareId%3DDS3nGr11TsGB2Hl7kbDCJA%253D%253D" target="_blank">• Learning phpMyAdmin</a></li>

                                    </ul>
                                  </div>
                                </div>
                              </p>
                            </li>
                          </ul>
                        </div> <!-- DOUGLAS COLLEGE START -->
                        <div class="col-sm-6"> <!-- MASTER DEGREE START -->
                          <ul class="list-group">
                            <li class="list-group-item">
                                <strong class="h5">Github, Project Management, and Source Control.</strong>
                              <p style="margin-top:5%;">
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target="#lyndaSourceControl" aria-expanded="false" aria-controls="lyndaSourceControl">
                                  Courses
                                </button>
                                <div class="collapse" id="lyndaSourceControl">
                                  <div class="">
                                    <ul style="margin-top:5%;">
                                      <li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fplanning-and-releasing-software-with-jira%3Ftrk%3Dshare_ent_url%26shareId%3DOm0lGmHVRSqCbbjJYHavMg%253D%253D" target="_blank">• Planning and Releasing Software with JIRA</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fscrum-the-basics%3Ftrk%3Dshare_ent_url%26shareId%3Dv%252B6xyitoRQeT0EjrLHje3g%253D%253D" target="_blank">• Scrum: The Basics</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fcharacteristics-of-a-great-scrum-master%3Ftrk%3Dshare_ent_url%26shareId%3DhiGnIWCdTZy0WUfqIwAdZQ%253D%253D" target="_blank">• Characteristics of a Great Scrum Master</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fsoftware-development-life-cycle-sdlc%3Ftrk%3Dshare_ent_url%26shareId%3DHKAOABHESwqS0DLYjRjSeg%253D%253D" target="_blank">• Software Development Life Cycle (SDLC)</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fdesign-thinking-customer-experience%3Ftrk%3Dshare_ent_url%26shareId%3DNrAdLDMVS3ekqL94GWn5BQ%253D%253D" target="_blank">• Design Thinking: Customer Experience</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fdesign-thinking-data-intelligence%3Ftrk%3Dshare_ent_url%26shareId%3DRnazAdmHQHC33ovWTzSjpw%253D%253D" target="_blank">• Design Thinking: Data Intelligence</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fgit-essential-training-the-basics%3Ftrk%3Dshare_ent_url%26shareId%3DuaZM1fCZT2mdaHhh0sgI2A%253D%253D" target="_blank">• Git Essential Training: The Basics</a></li>
<li><a href="https://www.linkedin.com/learning/learning-git-and-github/welcome?u=2105105" target="_blank">• Learning Git and GitHub (2015)</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </p>
                            </li>
                            <li class="list-group-item">
                                <strong class="h5">Rest API, Files import and export.</strong>
                              <p style="margin-top:5%;">
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-toggle="collapse" data-target="#lyndaRestAPI" aria-expanded="false" aria-controls="lyndaRestAPI">
                                  Courses
                                </button>
                                <div class="collapse" id="lyndaRestAPI">
                                  <div class="">
                                    <ul style="margin-top:5%;">
                                      <li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Flearn-api-documentation-with-json-and-xml%3Ftrk%3Dshare_ent_url%26shareId%3DmTOxUiVFToWXZzd2CkoFXA%253D%253D" target="_blank">• Learn API Documentation with JSON and XML</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Flearning-rest-apis%3Ftrk%3Dshare_ent_url%26shareId%3DaNI7GprPSlGwwq1lv55isQ%253D%253D" target="_blank">• Learning REST APIs</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fphp-choosing-a-php-editor-10209432%3Ftrk%3Dshare_ent_url%26shareId%3DZwBLGCjSSOeQY%252BH1bkmXjA%253D%253D" target="_blank">• PHP: Choosing a PHP Editor</a></li>
<li><a href="https://www.linkedin.com/learning-login/share?account=2105105&forceAccount=false&redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Fcss-layouts-from-float-to-flexbox-and-grid%3Ftrk%3Dshare_ent_url%26shareId%3D2h4GP%252FiyQ7W7bQ9QrvXaRw%253D%253D" target="_blank">• CSS Layouts: From Float to Flexbox and Grid</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </p>
                            </li>
                          </ul>
                        </div> <!-- MASTER DEGREE END -->
                    </div> <!-- EDUCATION #2 ROW END -->
                </div>
            </div>
            
        </div>
        <hr>
      ';
      return $education;
    }

    private static function pageReferences(){
      $references = '
      <!-- REFERENCES -->
      <div class="page-section" id="references">
          <div class="row">
              <div class="col-md-12">
                  <h4 class="widget-title" style="margin-bottom: 0px;">REFERENCES</h4>
                  <div class="custom-references">
                      <div class="list-group">
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                              <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1"><strong>Stephen Chiong (Douglas College, Department Chair)</strong></h5>
                              </div>
                              <h5 class="mb-1" style="margin-top: 1%;">
                                  <i class="fa fa-envelope"></i> chiongs@douglascollege.ca
                              </h5>
                              <small><i class="fa fa-phone"></i> (604) 527-5103</small>                                            
                          </a>
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><strong>Rahim Virani (Douglas College Teaching Faculty)</strong></h5>
                            </div>
                              <h5 class="mb-1" style="margin-top: 1%;">
                                <i class="fa fa-envelope"></i> rvirani1@douglascollege.ca
                              </h5>
                            <small class="text"><i class="fa fa-phone"></i> (604) 315-0376</small>
                          </a>
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><strong>Padmapriya Kandhadai (Douglas College Teaching Faculty)</strong></h5>
                            </div>
                              <h5 class="mb-1" style="margin-top: 1%;">
                                  <i class="fa fa-envelope"></i> kandhadaip@douglascollege.ca
                              </h5>
                          </a>
                      </div>
                  </div>
                  <div class="custom-references">
                      <div class="list-group">
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><strong>Roger Cunha (Global Feet Management, System Analyst)</strong></h5>
                            </div>
                            <h5 class="mb-1" style="margin-top: 1%;">
                              <i class="fa fa-envelope"></i> roger.petruki@gmail.com
                            </h5>
                            <small><i class="fa fa-phone"></i> (778) 512-5276</small>
                          </a>
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><strong>Guilherme Eckert (London Drugs, Apple Service Technician)</strong></h5>
                            </div>
                            <h5 class="mb-1" style="margin-top: 1%;">
                                <i class="fa fa-envelope"></i> guilhermeseckert1@gmail.com
                            </h5>
                            <small class="text"><i class="fa fa-phone"></i> (778) 689-5402</small>
                          </a>
                          <a href="#references" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="xs-0" style="font-size: 12.5px;">
                                  <strong>Francisco Falcao (Falcao Tecnologia, Senior Software Engineering)</strong>
                              </h5>
                            </div>
                            <small><i class="fa fa-envelope"></i> fcofalcao@falcaotecnologia.com.br</small>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          
      </div>
      <hr>
      ';
      return $references;
    }

    private static function pageContact(){
      $contact = '
        <!-- CONTACT -->
        <div class="page-section" id="contact">
        <div class="row">
            <div class="col-md-12">
                <h4 class="widget-title">MORE DETAILS ABOUT ME</h4>
                <p>
                    You can also find me on my social media and email:
                    <div class="">
                        <ul>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:ac.gbpf@gmail.com">ac.gbpf@gmail.com</a></li>
                            <li><i class="fa fa-linkedin"></i></a> <a href="https://linkedin.com/in/gustavobpf">linkedin.com/in/gustavobpf</a></li>
                            <li><i class="fa fa-github"></i> <a href="https://github.com/ac-gbpfreitas">github.com/ac-gbpfreitas</a></li>
                            <li><i class="fa fa-globe"></i>
                                <a href="https://github.com/ac-gbpfreitas">ac-gbpfreitas.github.io</a> / <a href="https://portfolio.gustavofreitas9.repl.co">portfolio.gustavofreitas9.repl.co</a>
                            </li>
                        </ul>
                    </div>
                </p>
            </div>
        </div>
        
        </div>
        <hr>
      ';
      return $contact;
    }

    private static function pageCopyRight(){
      $copyRight = '
        <div class="row" id="footer">
        <div class="col-md-12 text-center">
          <p class="copyright-text"></p>
        </div>
        </div>
      ';
      return $copyRight;
    }

    public static function pageContent(){
      $mainContent = '
        <div class="main-content">
          <div class="fluid-container">
            <div class="content-wrapper">'.
              self::pageAbout()."\n".
              self::pageProjects()."\n".
              self::pageEducation()."\n".
              self::pageReferences()."\n".
              self::pageContact()."\n".
              self::pageCopyRight()."\n"
            .'</div>
          </div>
        </div>
      ';

      echo self::pageSideBar()."\n".$mainContent;
    }

    private static function footerScript(){
      $script = '
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>
      ';
      return $script;
    }

    public static function pageFooter(){
      $footer = self::footerScript().'
        </body>
      </html>
      ';
      echo $footer;
    }
  }