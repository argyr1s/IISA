<? 
error_reporting(0);
require("Adminpanel/include/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>IISA 2014</title>
<meta name="description" content="PSD to HTML5+CSS3 conversion.">
<meta name="keywords" content="PSD, HTML5, CSS3">
<meta name="author" content="Erwin Kaddy">
<link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/style.css" id="mainstyle" type="text/css" media="all" />

<!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="index">
<!-- Preloader -->
<div id="mask">
  <div id="loader"><img src="assets/img/preloader.gif" alt="preloader" /></div>
</div>
<header id="mobileheader" class="navigation-bar-header light visible-xs"></header>
<!-- Hero Section -->
<!-- connection with the db so that the banner could change dinamically -->
<? $getBaneer=mysql_fetch_array(mysql_query("SELECT banner From tbl_banner")); ?> 
<section id="hero" class="light" style="background: url('assets/img/<?=$getBaneer['banner'];?>') center center no-repeat;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-attachment: fixed; min-height: 500px; position: relative; overflow:hidden;">

  <div class="container">
    <div class="home-bg">
      <nav class="navigation navigation-social">
        <ul class="navigation-bar">
          <li><a href="#"><span class="fa fa-twitter"></span></a>
          <li><a href="#"><span class="fa fa-facebook"></span></a>
          <li><a href="#"><span class="fa fa-github"></span></a>
          <li><a href="#"><span class="fa fa-vimeo-square"></span></a>
          <li><a href="#"><span class="fa fa-google-plus"></span></a>
          <li><a href="#"><span class="fa fa-instagram"></span></a>
        </ul>
      </nav>
      <div class="hero-content text-center ">
        <div class="hero-small">
       	  <!--Connection with the db so that the text in the main area could change dinamically-->
          <? $getHomeText=mysql_fetch_array(mysql_query("SELECT * From tbl_home_text")); ?>
          <hr />
          <span><span class="fa fa-calendar"></span>
          <!--Retrieve small home text-->
          <?=$getHomeText['date_text'];?>
          <div class="sep"></div>
          <span class="fa fa-map-marker"></span>
          <!-- Retrieve venue of the seminar -->
          <?=$getHomeText['location'];?>
          </span>
          <hr />
        </div>
        <div class="hero-big">
        	<!-- Retrieve heading-->
          <?=$getHomeText['heading'];?>
        </div>
        <div class="hero-normal">The Fifth International Conference on Information, 
          
          Intelligence, Systems and Applications </div>
        <a href="register.html" class="btn btn-lg btn-3d"><i class="fa fa-play-circle fa-2x"></i> <span>Get Tickets</span></a> <a href="#schedule" class="btn btn-sm btn-default">View Schedule</a> </div>
    </div>
  </div>
</section>
<!-- End Hero Section --> 
<!-- Header -->
<header id="header" class="navigation-bar-header light hidden-xs">
  <div class="container">
    <nav class="navigation">
      <div class="navigation-txt visible-xs" data-toggle="dropdown">Home</div>
      <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <ul class="navigation-bar navigation-bar-left">
        <li><a href="#about">About</a></li>
        <li><a href="#stat">Number Facts</a></li>
        <li><a href="#schedule">Schedule</a></li>
        <li><a href="#speakers">Speakers</a></li>
        <li><a href="#price">Prices</a></li>
        <li><a href="#elements">Mission</a></li>
        <li><a href="#sponsors">Sponsors</a></li>
        <li><a href="#map">Contacts</a></li>
        <li class="featured"><a href="register.html"><i class="fa fa-ticket fa-1x"></i>Buy Tickets</a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- End Header --> 
<!-- About Section -->
<section id="about" class="section dark">
  <div class="container">
    <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
    <h3>Business meets Innovation</h3>
    <div class="sub-title">Starting your own IT business and picking right niche in less then <span class="highlight">30 days</span></div>
    <br />
    <br />
    <section class="nav-tabs-simple"> 
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#htmlcss" data-toggle="tab"><i class="icon icon-chat-messages-01"></i> Topics</a></li>
        <li><a href="#jquery" data-toggle="tab"><i class="icon icon-education-science-11"></i> Workshops</a></li>
        <li><a href="#php" data-toggle="tab"><i class="icon icon-documents-bookmarks-12"></i> About us</a></li>
      </ul>
      
      <!-- Tab panes -->
      <!-- Connect to the db table Topic Content with id=1 (Topics) -->
      <? $getTopicContent1=mysql_fetch_array(mysql_query("SELECT * From tbl_topic_content Where `id`=1")); ?>
      <div class="tab-content">
        <div class="tab-pane fade in active" id="htmlcss">
          <article class="row">
            <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInLeft" data-delay="500"> <img src="TopicsImages/<?=$getTopicContent1['image'];?>" class="img-responsive" alt="starbuck" > </div>
            <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInRight" data-delay="500">
              <!-- retrieve topic content 1(Topics) -->
              <?=$getTopicContent1['content'];?>
            </div>
          </article>
        </div>
        <!-- Connect to the db table Topic Content with id=2 (Workshops)-->
        <? $getTopicContent2=mysql_fetch_array(mysql_query("SELECT * From tbl_topic_content Where `id`=2")); ?>
        <div class="tab-pane fade" id="jquery">
          <article class="row">
            <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInLeft" data-delay="500">
              <!-- retrieve topic content 2(Workshops)-->
              <?=$getTopicContent2['content'];?>
            </div>
            <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInRight" data-delay="500"> <img src="TopicsImages/<?=$getTopicContent2['image'];?>" class="img-responsive" alt="starbuck" > </div>
          </article>
        </div>
        <!-- Connect to the db table Topic Content with id=3 (About US)-->
        <? $getTopicContent3=mysql_fetch_array(mysql_query("SELECT * From tbl_topic_content Where `id`=3")); ?>
        <div class="tab-pane fade" id="php">
          <article class="row">
            <div class="col-md-5 col-sm-5 animated hiding" data-animation="fadeInLeft" data-delay="500"> <img src="TopicsImages/<?=$getTopicContent3['image'];?>" class="img-responsive" alt="starbuck" > </div>
            <div class="col-md-6 col-sm-6 text-left animated hiding" data-animation="fadeInRight" data-delay="500">
              <!--Retrieve Topic content 3(About US)-->
              <?=$getTopicContent3['content'];?>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>
</section>
<!-- End About Section --> 
<!-- Stat Section -->
<section id="stat" class="section light">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="0">
          <div class="stat"><span class="value" data-from="0" data-to="72">72</span>+</div>
          <div class="stat-info">hours</div>
          <hr />
          <p class="small">Discussions and Presentations<br>between different topics.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="500">
          <div class="stat"><span class="value" data-from="0" data-to="10">10</span></div>
          <div class="stat-info">speakers</div>
          <hr />
          <p class="small">Top on their sectors, ready to commute with you</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1000">
          <div class="stat"><span class="value" data-from="0" data-to="20">4</span>+</div>
          <div class="stat-info">different technologies sectors</div>
          <hr />
          <p class="small">Versatility of themes</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="counter animated hiding" data-animation="fadeInDown" data-delay="1500">
          <div class="stat"><span class="value" data-from="0" data-to="3">3</span></div>
          <div class="stat-info">halls</div>
          <hr />
          <p class="small">Three different auditoriums,<br>every moment you can find something<br>that interests you.l d</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Stat Section --> 
<!-- Schedule Section -->
<section id="schedule" class="section dark">
  <div class="container">
    <div class="icon-wrap"><span class="icon icon-active icon-text-hierarchy-07"></span></div>
    <h3>Full schedule</h3>
    <div class="sub-title">Shortest way to explore what will happen on IISA 2014</div>
    <br />
    <br />
    <section class="nav-tabs-default hidden-xs"> 
      <!-- Parent Nav Tabs -->
      <ul class="nav nav-tabs">
        <!--Connect to the db table schedule day for id=1 meaning day1-->
        <? $getScheduleDay1=mysql_fetch_array(mysql_query("SELECT * From tbl_schedule_day Where `id`=1")); ?>
        <li class="active"><a href="#DayOne" data-toggle="tab">
          <div class="title">Day 1</div>
          <div class="subtitle">
          	<!--Retrieve data for date 1-->
            <?=$getScheduleDay1['date'];?>
          </div>
          </a></li>
          <!--Connect to the db table schedule day for id=2 meaning day2-->
        <? $getScheduleDay2=mysql_fetch_array(mysql_query("SELECT * From tbl_schedule_day Where `id`=2")); ?>
        <li><a href="#DayTwo" data-toggle="tab">
          <div class="title">Day 2</div>
          <div class="subtitle">
          <!--Retrieve data for day 2-->
            <?=$getScheduleDay2['date'];?>
          </div>
          </a></li>
                    <!--Connect to the db table schedule day for id=3 meaning day3-->
        <? $getScheduleDay3=mysql_fetch_array(mysql_query("SELECT * From tbl_schedule_day Where `id`=3")); ?>
        <li><a href="#DayThree" data-toggle="tab">
          <div class="title">Day 3</div>
          <div class="subtitle">
            <!--Retrieve data for day3-->
            <?=$getScheduleDay3['date'];?>			<!-- Via mysql we can add more days-->
          </div>
          </a></li>
      </ul>
      
      <!-- Parent Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="DayOne"> 
          
          <!-- Child 1 Nav Tabs -->
          <ul class="nav nav-tabs">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=1");
				  	 $cnt1=0;
					 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
					 {
						 $cnt1++;
						 	if($cnt1==1)
							{
						 	?>
            <li class="active"><a href="#DayOne-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							else
							{
							?>
            <li><a href="#DayOne-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							?>
            <?
				  	
					 }
				  ?>
          </ul>
          
          <!-- Child 1 Tab panes -->
          <div class="tab-content">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=1");
		 $cnt1=0;
		 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
		 {
		 $cnt1++;
		 ?>
            <div <? if($cnt1==1){?>class="tab-pane fade in active"<? }else{ ?> class="tab-pane fade" <? } ?> id="DayOne-<?=$cnt1;?>">
              <div class="panel-group timeline-schedule" id="panelTimelineOne">
                <? $getRecords=mysql_query("SELECT * FROM `tbl_records` WHERE `day`=1 AND `auditorium_id`=".$getAuditoriumForDayOneRow['id'].""); 
		  while($row=mysql_fetch_array($getRecords))
		  {
			  ?>
                <div class="panel panel-default">
                  <div class="speaker-wrapper"> <img src="assets/img/speaker/speaker-1.jpg" class="img-responsive img-circle" alt="speaker-1" /> </div>
                  <div class="panel-heading">
                    <div class="panel-title">
                      <div class="time"><i class="fa fa-clock-o"></i>
                        <?=$row['time'];?>
                      </div>
                      <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemOne">
                      <?=$row['title'];?>
                      <div class="pull-right fa fa-angle-up"></div>
                      <div class="pull-right fa fa-angle-down"></div>
                      </a> </div>
                  </div>
                  <div id="itemOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <article>
                        <p>
                          <?=$row['desc'];?>
                        </p>
                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>
                          <?=$row['created_by'];?>
                          </strong></a></p>
                      </article>
                    </div>
                  </div>
                </div>
                <?
		  }
		  ?>
              </div>
            </div>
            <?
					 }
					 ?>
   
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="tab-pane fade" id="DayTwo"> 
          
          <!-- Child 2 Nav Tabs -->
          <ul class="nav nav-tabs">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=2");
				  	 $cnt1=0;
					 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
					 {
						 $cnt1++;
						 	if($cnt1==1)
							{
						 	?>
            <li class="active"><a href="#DayTwo-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							else
							{
							?>
            <li><a href="#DayTwo-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							?>
            <?
				  	
					 }
				  ?>
          </ul>
          
          <!-- Child 2 Tab panes -->
          <div class="tab-content">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=2");
				  	 $cnt1=0;
					 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
					 {
						 $cnt1++;
						 ?>
            <div <? if($cnt1==1){?>class="tab-pane fade in active"<? }else{ ?> class="tab-pane fade" <? } ?> id="DayTwo-<?=$cnt1;?>">
              <div class="panel-group timeline-schedule" id="panelTimelineOne">
                <? $getRecords=mysql_query("SELECT * FROM `tbl_records` WHERE `day`=2 AND `auditorium_id`=".$getAuditoriumForDayOneRow['id'].""); 
		  while($row=mysql_fetch_array($getRecords))
		  {
			  ?>
                <div class="panel panel-default">
                  <div class="speaker-wrapper"> <img src="assets/img/speaker/speaker-1.jpg" class="img-responsive img-circle" alt="speaker-1" /> </div>
                  <div class="panel-heading">
                    <div class="panel-title">
                      <div class="time"><i class="fa fa-clock-o"></i>
                        <?=$row['time'];?>
                      </div>
                      <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemOne">
                      <?=$row['title'];?>
                      <div class="pull-right fa fa-angle-up"></div>
                      <div class="pull-right fa fa-angle-down"></div>
                      </a> </div>
                  </div>
                  <div id="itemOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <article>
                        <p>
                          <?=$row['desc'];?>
                        </p>
                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>
                          <?=$row['created_by'];?>
                          </strong></a></p>
                      </article>
                    </div>
                  </div>
                </div>
                <?
		  }
		  ?>
              </div>
            </div>
            <?
					 }
					 ?>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="tab-pane fade" id="DayThree"> 
          
          <!-- Child 3 Nav Tabs -->
          <ul class="nav nav-tabs">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=3");
				  	 $cnt1=0;
					 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
					 {
						 $cnt1++;
						 	if($cnt1==1)
							{
						 	?>
            <li class="active"><a href="#DayThree-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							else
							{
							?>
            <li><a href="#DayThree-<?=$cnt1;?>" data-toggle="tab">
              <?=$getAuditoriumForDayOneRow['auditorium'];?>
              </a></li>
            <?
							}
							?>
            <?
				  	
					 }
				  ?>
          </ul>
          
          <!-- Child 3 Tab panes -->
          <div class="tab-content">
            <? $getAuditoriumForDayOne=mysql_query("SELECT * FROM `tbl_auditorium` WHERE `shedule_id`=3");
				  	 $cnt1=0;
					 while($getAuditoriumForDayOneRow=mysql_fetch_array($getAuditoriumForDayOne))
					 {
						 $cnt1++;
						 ?>
            <div <? if($cnt1==1){?>class="tab-pane fade in active"<? }else{ ?> class="tab-pane fade" <? } ?> id="DayThree-<?=$cnt1;?>">
              <div class="panel-group timeline-schedule" id="panelTimelineOne">
                <? $getRecords=mysql_query("SELECT * FROM `tbl_records` WHERE `day`=3 AND `auditorium_id`=".$getAuditoriumForDayOneRow['id'].""); 
		  while($row=mysql_fetch_array($getRecords))
		  {
			  ?>
                <div class="panel panel-default">
                  <div class="speaker-wrapper"> <img src="assets/img/speaker/speaker-1.jpg" class="img-responsive img-circle" alt="speaker-1" /> </div>
                  <div class="panel-heading">
                    <div class="panel-title">
                      <div class="time"><i class="fa fa-clock-o"></i>
                        <?=$row['time'];?>
                      </div>
                      <a data-toggle="collapse" data-parent="#panelTimelineOne" href="#itemOne">
                      <?=$row['title'];?>
                      <div class="pull-right fa fa-angle-up"></div>
                      <div class="pull-right fa fa-angle-down"></div>
                      </a> </div>
                  </div>
                  <div id="itemOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <article>
                        <p>
                          <?=$row['desc'];?>
                        </p>
                        <p class="author"><a href="#"><strong><i class="fa fa-user"></i>
                          <?=$row['created_by'];?>
                          </strong></a></p>
                      </article>
                    </div>
                  </div>
                </div>
                <?
		  }
		  ?>
              </div>
            </div>
            <?
					 }
					 ?>
          </div>
        </div>
      </div>
    </section>
    <div class="btn-wrapper"> <a href="#" class="btn btn-xs"><span class="icon icon-filetypes-11 icon-active"></span> <span class="btn-txt">Download schedule</span></a> </div>
  </div>
</section>
<!-- End Schedule Section --> 
<!-- Speakers Section -->
<section id="speakers" class="section light">
  <div class="overlay"></div>
  <div class="container">
    <div class="icon-wrap"><span class="icon icon-active icon-multimedia-12"></span></div>
    <h3>Top speakers</h3>
    <div class="sub-title"></div>
    <br />
    <br />
    <section class="row">
    	<!-- Connect to the table speakers list in order to retrieve speakers-->
      <?php
    	$speakers_list_query = mysql_query("SELECT * FROM `tbl_speakers_list` WHERE  `s_status` = 1 ORDER BY `tbl_speakers_list`.`id` DESC  LIMIT 4");
		while($speakers_list_Data=mysql_fetch_assoc($speakers_list_query))
		{
		?>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="speaker-item animated hiding" data-animation="fadeInUp" data-delay="0">
        							<!-- retrieve photo from speakers list data -->
          <div class="img-wrapper"> <img src="upload/speakers-images/<? echo $speakers_list_Data['s_photo']; ?>" alt="speaker-1" width="90" height="90" class="img-responsive img-circle" /> </div>
         					<!-- retrieve speakers name from speakers list data -->
         <div class="name"><? echo $speakers_list_Data['s_name']; ?></div>
         					<!-- retrieve small header from speakers list data-->
          <div class="sub"><? echo $speakers_list_Data['s_designation']; ?></div>
          					<!-- retrieve small text from speakers list data-->
          <p class="small"><? echo $speakers_list_Data['s_text']; ?></p>
        </div>
      </div>
      <?
	  
		}
		?>
    </section>
    <div class="btn-wrapper"> <a href="#" class="btn btn-sm btn-default">See all speakers</a> </div>
  </div>
</section>
<!-- End Speakers Section --> 
<!-- Price Section -->
<section id="price" class="section dark">
  <div class="container">
    <div class="icon-wrap"><span class="icon icon-active icon-shopping-02"></span></div>
    <h3>Pricetable</h3>
    <div class="sub-title">Shortest way to explore what will happen on IISA</div>
    <br/>
    <br/>
    <div class="pricing-cols pricing-3-cols">
      <div class="pricing-col animated hiding" data-animation="fadeInLeft" data-delay="0">
        <div class="pricing-col-header">
          <h3 class="pricing-col-header-title">1 day</h3>
          <h4 class="pricing-col-header-amount"> <span class="pricing-col-amount">$100</span></h4>
        </div>
        <div class="pricing-col-content">
          <ul>
            <li>Four speakers</li>
            <li>Two auditoriums</li>
            <li>Endless Networking</li>
          </ul>
          <a class="pricing-col-button" href="register.html">Buy Now</a> </div>
      </div>
      <div class="pricing-col pricing-col-featured">
        <div class="pricing-ribbon">-20%</div>
        <div class="pricing-col-header">
          <h3 class="pricing-col-header-title">3 days</h3>
          <h4 class="pricing-col-header-amount"><span class="pricing-col-amount">$150</span></h4>
        </div>
        <div class="pricing-col-content">
          <ul>
            <li>20% off if you book all days</li>
            <li>72+ hours of conference</li>
            <li>Workshops included in the final price</li>
          </ul>
          <a class="pricing-col-button" href="register.html">Buy Now</a> </div>
      </div>
      <div class="pricing-col animated hiding" data-animation="fadeInRight" data-delay="0">
        <div class="pricing-col-header">
          <h3 class="pricing-col-header-title">2 days</h3>
          <h4 class="pricing-col-header-amount"><span class="pricing-col-amount">$200</span></h4>
        </div>
        <div class="pricing-col-content">
          <ul>
            <li>Seven speakers</li>
            <li>Over 10 different topics are examined</li>
            <li>Expand your knowledge</li>
          </ul>
          <a class="pricing-col-button" href="register.html">Buy Now</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- End Price Section --> 
<!-- Newsletter Section -->
<section id="newsletter" class="section light">
  <div class="overlay"></div>
  <div class="container">
    <article class="article-big animated hiding" data-animation="fadeInDown" data-delay="0">
      <h5>Newsletter <span class="highlight">Signup</span></h5>
      <p>No Spam - only <span class="highlight">latest news</span>, price and activity updates!</p>
      <form id="subscribe" class="form" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group form-inline">
          <input type="email" class="form-control required" id="NewsletterEmail" name="NewsletterEmail" placeholder="your@email.com" />
          <input type="submit" class="btn btn-xs btn-default" value="Submit" />
          <span id="response">
          <? require_once('assets/mailchimp/inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
          </span> </div>
      </form>
    </article>
  </div>
</section>
<!-- End Newsletter Section --> 
<!-- Elements Section -->
<section id="elements" class="section dark">
  <div class="container"> 
  <!--Connect to the db table big paragraph to retrieve text-->
    <?
       $Big_Paragrapgh_query= mysql_fetch_assoc(mysql_query("SELECT `p_desc` FROM `tbl_big_paragraph` WHERE 1"));
	   echo $Big_Paragrapgh_query['p_desc'];
	   ?>
  
    <section class="vc-example">
      <div class="h7"><span class="highlight">Gallery</span></div>
      <div class="row">
       <!--Connect to the db table gallery to retrieve uploaded photos-->
       <? $getGallery=mysql_query("SELECT * FROM `tbl_gallery`");
	  	while($rowGallery=mysql_fetch_array($getGallery))
		{
		?>
            <div class="col-md-3 col-sm-3 col-xs-6">
            	<!-- Retrieve images sorted by id number, small text included on the photo-->
              <a href="gallery/<?=$rowGallery['image'];?>" class="thumb-wrapper fancybox" data-fancybox-group="gallery">
                <div class="overlay"><?=$rowGallery['title'];?></div>
                <img src="gallery/<?=$rowGallery['image'];?>" class="img-responsive" alt="thumb-1" />
              </a>
            </div>
       
        <?
		}
		?>
        </div>
      </div>
    </section>

<!-- End Elements Section --> 
<!-- Register Section -->
<section id="register" class="section light">
  <div class="overlay"></div>
  <div class="container">
    <article class="article-big animated hiding" data-animation="fadeInUp" data-delay="0">
      <h5>Register to IISA 2014 right now</h5>
      <br/>
      <a href="register.html" class="btn btn-sm btn-tertiary">Register</a> 
  </div>
</section>
<!-- End Register Section --> 
<!-- Sponsors Section -->
<section id="sponsors" class="section dark">
  <div class="container">
    <div class="icon-wrap"><span class="icon icon-active icon-documents-bookmarks-12"></span></div>
    <h3>Sponsors</h3>
    <div class="sub-title">Thank you very much !! </div>
    <br/>
    <div class="row">
      <ul class="list-inline">
      <!--connect to the db table sponsors to retrieve sponsor image-->
      <? $getSponsers=mysql_query("SELECT * FROM `tbl_sponsors`");
	  	while($rowSponsors=mysql_fetch_array($getSponsers))
		{
			?>
        <li><a href="#" target="_blank"><img src="sponsors/<?=$rowSponsors['image'];?>" alt="sponsor-1" /></a></li>
       <?
		}
		?>
         </ul>
      
    </div>
  </div>
</section>
<!-- End Price Section --> 
<!-- Map Section -->
<section id="map" class="dark">
  <div id="canvas-map"></div>
  <div class="container">
    <div class="row">
     <!-- map made dynamic using google code for logtitude latitude-->
      <div class="col-md-5 col-sm-7 animated hiding location" data-animation="fadeInLeft" data-delay="0">
        <? $contactData=mysql_fetch_array(mysql_query("SELECT * FROM `tbl_contact`"));
		echo html_entity_decode($contactData['address']);
		?>
		
      </div>
    </div>
  </div>
</section>
<!-- End Map Section -->
<footer id="footer"> </footer>
<div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
<? $getMap =mysql_fetch_array(mysql_query("SELECT * FROM `tbl_map`")); ?>
<!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]--> 
<!--[if (gte IE 9) | (!IE)]><!--> 
<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script> 
<!--<![endif]--> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.nav.js"></script> 
<script type="text/javascript" src="assets/js/jquery.appear.js"></script> 
<script type="text/javascript" src="assets/js/jquery.countTo.js"></script> 
<script type="text/javascript" src="assets/js/waypoints.min.js"></script> 
<script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.fancybox.js"></script> 
<script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script> 
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript">
(function(){

	// Init global DOM elements, functions and arrays
    window.app 			                   = {el : {}, fn : {}};
    app.el['window']                   = $(window);
    app.el['document']                 = $(document);
    app.el['back-to-top']              = $('.back-to-top');
    app.el['html-body']                = $('html,body');	
    app.el['loader']                   = $('#loader');
    app.el['mask']                     = $('#mask');

	app.fn.screenSize = function() {
		var size, width = app.el['window'].width();
		if(width < 320) size = "Not supported";
		else if(width < 480) size = "Mobile portrait";
		else if(width < 768) size = "Mobile landscape";
		else if(width < 960) size = "Tablet";
		else size = "Desktop";
		if (width < 768){$('.animated').removeClass('animated').removeClass('hiding');}
		// $('#screen').html( size + ' - ' + width );
		// console.log( size, width );
	};	

	
	
	$(function() {	
    //Preloader
    app.el['loader'].delay(700).fadeOut();
    app.el['mask'].delay(1200).fadeOut("slow");    

	// Resized based on screen size
	app.el['window'].resize(function() {
		app.fn.screenSize();
	});		

    // fade in .back-to-top
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        app.el['back-to-top'].fadeIn();
      } else {
        app.el['back-to-top'].fadeOut();
      }
    });

    // scroll body to 0px on click
    app.el['back-to-top'].click(function () {
      app.el['html-body'].animate({
        scrollTop: 0
      }, 1500);
      return false;
    });

    $('#mobileheader').html($('#header').html());

    function heroInit() {
        var hero        = jQuery('#hero'),
            winHeight   = jQuery(window).height(),
            heroHeight  = winHeight;
          
            hero.css({height: heroHeight+"px"});
      };
      
    jQuery(window).on("resize", heroInit);
    jQuery(document).on("ready", heroInit);
    
    $('.navigation-bar').onePageNav({
        currentClass: 'active',
        changeHash: true,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        easing: 'swing'
    });
    
    $('.animated').appear(function(){
      var element = $(this);
      var animation = element.data('animation');
      var animationDelay = element.data('delay');
      if (animationDelay) {
        setTimeout(function(){
          element.addClass( animation + " visible" );
          element.removeClass('hiding');
          if (element.hasClass('counter')) {
            element.find('.value').countTo();
          }
        }, animationDelay);
      }else {
        element.addClass( animation + " visible" );
        element.removeClass('hiding');
        if (element.hasClass('counter')) {
          element.find('.value').countTo();
        }
      }    
    },{accY: -150});
    
    $('#header').waypoint('sticky', {
        wrapper: '<div class="sticky-wrapper" />',
        stuckClass: 'sticky'
    }); 

    $('.fancybox').fancybox();
    
	});
	
	// ****** GOOGLE MAP *******
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
				
	var MY_MAPTYPE_ID = 'custom_style';
				
	function initialize() {
				
		var featureOpts = [
			{
				stylers: [
					{ saturation: -20 },
					{ lightness: 40 },
					{ visibility: 'simplified' },
					{ gamma: 0.8 },
					{ weight: 0.4 }
				]
			},
			{
				elementType: 'labels',
				stylers: [
					{ visibility: 'on' }
				]
			},
			{
				featureType: 'water',
				stylers: [
					{ color: '#dee8ff' }
				]
			}
		];
				
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			panControl: false,
			mapTypeControl: false,
  			streetViewControl: false,
			center: new google.maps.LatLng(<?=$getMap['lat'];?>, <?=$getMap['long'];?>),
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};
				
		map = new google.maps.Map(document.getElementById('canvas-map'),mapOptions);
		var image = 'assets/img/pmarker.png';
		var myLatLng = new google.maps.LatLng(40.7478373, -73.9870355);
		var beachMarker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: image
		});
		var styledMapOptions = {
			name: 'Custom Style'
		};
				
		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
				
		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	}
				
	google.maps.event.addDomListener(window, 'load', initialize); 
	
})();
</script>
</body>
</html>