<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linkOnline-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--linkOffline-->
  <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top clearHeader stroke" role="navigation">
  <div class="container">
    <div class="navbar-header" style="color:white;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="color:white;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#myPage"><img class="navbar-brand" src="image/logo-white.png" alt="logo" style="height:70px;margin-top:-10px;"></a>
    </div><br>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="sub-menu-parent" tab-index="0">
            <a href="#who">Who We Are</a>
              <ul class="sub-menu">
                <li><a href="#home">Mission & Values</a></li>
                <li><a href="#menu1">Our Technologies</a></li>
                <li><a href="#menu2">Management</a></li>
                <li><a href="#menu3">Board Of Directors</a></li>
              </ul>
        </li>
        <li class="sub-menu-parent" tab-index="0">
            <a href="#who">better DNA</a>
              <ul class="sub-menu">
                <li><a href="#home">Mission & Values</a></li>
                <li><a href="#menu1">Our Technologies</a></li>
                <li><a href="#menu2">Management</a></li>
                <li><a href="#menu3">Board Of Directors</a></li>
              </ul>
        </li>
        <li class="sub-menu-parent" tab-index="0">
            <a href="#who">Our Pipeline</a>
              <ul class="sub-menu">
                <li><a href="#home">Mission & Values</a></li>
                <li><a href="#menu1">Our Technologies</a></li>
                <li><a href="#menu2">Management</a></li>
                <li><a href="#menu3">Board Of Directors</a></li>
              </ul>
        </li>
        <li><a href="#portfolio">Media</a></li>
        <li><a href="#pricing">Careers</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="sub-menu-parent" tab-index="0">
            <a href="#contact">Investor Relations</a>
              <ul class="sub-menu">
                <li><a href="#">Sub Item 1</a></li>
                <li><a href="#">Sub Item 2</a></li>
              </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="bg-fade-carousel" class="carousel slide carousel-fade" data-ride="carousel">
<!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="slide1"></div>
        </div>
        <div class="item">
            <div class="slide2"></div>
        </div>
        <div class="item">
            <div class="slide3"></div>
        </div>
        <div class="item">
            <div class="slide4"></div>
        </div>
    </div><!-- .carousel-inner --> 
    <div class="container carousel-overlay text-center">
      
        <h2>Maggot Indonesia</h2>
        <p class="lead">
            intrexon designs and engineers living systems to address the world’s greatest<br>
            challenges in health, energy, food, and environmental sustainability.
        </p>
    </div>
</div><!-- .carousel --> 

<!-- Container (About Section) -->
<h1 class="text-center" id="who" style="margin-top:70px;font-family: Montserrat;color:#666;font-size:35px">WHO WE ARE</h1><br>
  <div class="row">
  <ul  class="nav nav-tabs" style="border:none; margin-bottom: 40px;font-size:16px;font-weight:bold;color:#666">
    <li class="col-md-3 col-sm-6 col-xs-12 active text-center"><a data-toggle="tab" href="#home">MISSION & VALUES</a></li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#menu1">OUR TECHNOLOGIES</a></li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#menu2">MANAGEMENT</a></li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#menu3">BOARD OF DIRECTORS</a></li>
  </ul>

  <div class="tab-content" style="font-family: Montserrat;font-size:16px">
    <div id="home" class="tab-pane fade in active">
      <div class="col-sm-7" style="padding:30px;margin-bottom: 55px;">
        <p>
            <h4 style="color:#203296;font-size:22px;line-height: 1.4;font-weight: 300;">We are a community of scientists and creative innovators working to build a safer, healthier planet, and a more promising future.</h4>
        </p>
        <p style="margin-top:20px;line-height: 1.875;color:#333">
            Our unique expertise is in the design and engineering of astonishing living systems, from T-cells that battle cancer to non-browning apples. Across our diverse portfolio of projects we apply a common philosophy: bring together the greatest minds in synthetic biology and empower them to solve big problems.
        </p>
      </div>
      <div class="col-sm-5 text-center">
          <center><img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/03/i.svg" alt="" width="74" height="260"></center>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <h2 style="font-size: 43px;margin-top: -20px;margin-left:5px;color: black;">Our Technologies</h2>
      <div class="col-sm-8" style="line-height: 1.875;margin-left:-4px;">
        <p>
            intrexon is addressing global challenges with precise control of biological systems across four major biology classes – Microbes, Plants, Animals, Human Cells – to protect our environment, promote health and feed the growing populations of humans and animals. We are driving innovation in new product development through the integration of our technologies and invite you to discover more in our most recent corporate presentation.
        </p>
        <p>
          Precise Control of Gene Expression. At its core, intrexon is a gene expression and regulation company focused on precise control of a wide collection of cells and organisms. To date, we’ve worked in more than 50 different expression host species. We program cells’ genetic code to drive specific biofunction. We utilize the UltraVector® DNA construction architecture to design and assemble genetic components into complex gene expression programs. Our RheoSwitch® technology for therapeutic applications, as well as, the Florian™ switch for use in plants are first-in-class proprietary molecular switches being used for regulation of gene expression and switching on and off traits (e.g. flowering control).
        </p>
        <p>
          Design and Engineering of Biosystems. intrexon’s comprehensive knowledge of a broad range of biology classes combined with our bioinformatics and computational biology tools and expertise enables the discovery, generation, and validation of multiple routes for innovative product development. The application of these tools is exemplified in the development of high value production cell lines and microbial strains, including our methane bioconversion platform that has enabled upgrading natural gas to a variety of petrochemical fuel replacements, lubricants, and specialty chemicals via fermentation. This program required elucidation of the complete metabolic networks of the methanotroph, a previously unmapped bacterium that naturally consumes methane, to construct bioinformatic models allowing us to convert natural gas feedstock to valuable products at very high efficiencies.
        </p>
        <p>
        Engineered Gene Function and Delivery. intrexon’s precision engineering capabilities are differentiated with respect to the controllable, multi-genic payload capacity of our gene programs. Our ability to control gene expression at specific cellular and subcellular locations can be modulated by both viral and non-viral methods depending on the requirements of the specific product. Our AdenoVerse™ platform includes a broad array of proprietary, adenovirus-based vectors for efficient gene delivery of therapeutics and molecular vaccines for human and animal health applications. We also employ non-viral gene delivery approaches in therapeutic programs like our chimeric antigen receptor (CAR) T cell immunotherapy for cancer treatment, which enables engineering of patient cells in the clinical point-of-care setting for a more rapid administration of therapy. For larger payloads, we leverage the AttSite™ recombinase platform that allows us to establish a landing pad in transcriptionally active genomic locations and integrate a gene program with high fidelity at that specified location, ensuring stability and functionality of engineered cells.
        </p>
      </div>
      <div class="col-sm-4" style="margin-left:0px">
        <img src="https://www.dna.com/wp-content/uploads/2018/05/joel-filipe-196735-unsplash.jpg" class="" style="max-width: 100%;">
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <div class="caption">
                <p style="margin-top:13px;">Name</p>
                <p style="margin-top:-10px;">Position</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <div class="caption">
                <p style="margin-top:13px;">Name</p>
                <p style="margin-top:-10px;">Position</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
          </div>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
    <div class="container text-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <div class="caption">
                <p style="margin-top:13px;">Name</p>
                <p style="margin-top:-10px;">Position</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <div class="caption">
                <p style="margin-top:13px;">Name</p>
                <p style="margin-top:-10px;">Position</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/04/intrexon-i-bw-1-275x275.png" alt="Rick L. Sterling">
              <p style="margin-top:13px;">Name</p>
              <p style="margin-top:-10px;">Position</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
<div class="container-fluid bg-grey" style="font-family: Montserrat;font-size:16px;margin-left:-26px;margin-right:-26px;color:#333;line-height: 1.875;">
<h1 class="text-center" style="margin-top:-10px">Maggot Indo</h1>
  <div class="row text-center">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <p>
        The random mutation of DNA has produced the amazing diversity of life on our planet. Through a variety of means, humanity has been influencing the biosphere for the last ten millennia in order to favor some outcomes over others – but we did this without an understanding of life’s underlying code. Today, we are able directly to apply human creativity to this code, endowing organisms with capabilities uniquely suited to global needs. Click below for more information on the four classes of organisms in which we are exploring the frontiers of better DNA.
        </p>
    </div>
    <div class="col-sm-2"></div>
  </div>
  <div class="row" id="gambar" style="margin-top:50px;">
            <div class="col-sm-1" style="margin-right:-50px"></div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3" style="margin-right:-30px;">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/05/18167_lores-380x310.jpg">
              <div class="bottom-left">MICROBES</div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3" style="margin-right:-30px">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/03/biosystem-design.png" alt="Rick L. Sterling">
              <div class="bottom-left">PLANTS</div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3" style="margin-right:-30px">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/03/biosystem-control.png" alt="Rick L. Sterling">
              <div class="bottom-left">ANIMALS</div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3" style="margin-right:-30px">
              <img class="img-responsive" src="https://www.dna.com/wp-content/uploads/2018/03/gene-delivery.png" alt="Rick L. Sterling">
              <div class="bottom-left">HUMAN<br> CELLS</div>
            </div>
          </div>
  </div>
</div>

<div id="about" class="container-fluid">
<h1 class="text-center" style="margin-top:0px;font-family: Montserrat;color:#666;font-size:35px">OUR PIPELINE</h1><br>
  <div class="row">
  <ul  class="nav nav-tabs" style="border:none; margin-bottom: 40px;font-size:16px;font-weight:bold;color:#666">
    <li class="col-md-3 col-sm-6 col-xs-12 active text-center"><a data-toggle="tab" href="#tab1">
      <img src="https://www.dna.com/wp-content/uploads/2018/03/logo_microbes_gray.png" width="140" class="inactive-img"></a>
    </li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#tab2">
      <img src="https://www.dna.com/wp-content/uploads/2018/03/logo_plants_gray.png" width="141" class="inactive-img"></a>
    </li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#tab3">
      <img src="https://www.dna.com/wp-content/uploads/2018/03/logo_animals_gray.png" width="141" class="inactive-img"></a>
    </li>
    <li class="col-md-3 col-sm-5 col-xs-12 text-center" ><a data-toggle="tab" href="#tab4">
      <img src="https://www.dna.com/wp-content/uploads/2018/03/logo_human_gray.png" width="140" class="inactive-img"></a>
    </li>
  </ul>

  <div class="tab-content" style="font-family: Montserrat">
    <div id="tab1" class="tab-pane fade in active">
        <button class="collapsible" style="font-size:14px">Methane bioconversion to generate high value fuels and chemicals from natural gas</button>
        <div class="content">
        <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody style="font-family: Montserrat;font-size:15px;">
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
        </table>
        </div>
        <button class="collapsible" style="font-size:14px">New class of microbe-based biopharmaceuticals to enable local delivery of disease-modifying human therapeutics</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible" style="font-size:14px">Microbe-based biotherapeutics to promote animal health</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div id="tab2" class="tab-pane fade">
    <button class="collapsible">Open Section 1</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 2</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 3</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div id="tab3" class="tab-pane fade">
    <button class="collapsible">Open Section 1</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 2</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 3</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div id="tab4" class="tab-pane fade">
    <button class="collapsible">Open Section 1</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 2</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Open Section 3</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
  </div>
  </div>
</div>
<!-- Container (Pricing Section) -->
<div class="container-fluid bg-grey" style="font-family: Montserrat;font-size:16px;margin-left:-26px;margin-right:-26px;color:#333;line-height: 1.875;">
  <div class="text-center">
    <h1 class="text-center" style="margin-top:0px;font-family: Montserrat;color:#666;font-size:35px;margin-bottom:50px">MEDIA</h1><br>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        <h3 class="text-center" style="font-size:16px;font-weight:100;">PRESS</h3>
        </div>
        <div class="panel-body"  runat="server" style="overflow-y: scroll; height: 400px">
        <ul class="list-group">
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
        </ul>
        </div>
        <a href="https://twitter.com/Intrexon" target="_blank" style="border-radius:0px;padding:15px;" class="btn btn-primary btn-block">Discover More</a>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
        <h3 class="text-center" style="font-size:16px;font-weight:100;">NEWS</h3>
        </div>
        <div class="panel-body"  runat="server" style="overflow-y: scroll; height: 400px">
        <ul class="list-group">
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
        </div>
        <a href="https://twitter.com/Intrexon" target="_blank" style="border-radius:0px;padding:15px;" class="btn btn-primary btn-block">Discover More</a>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h3 class="text-center" style="font-size:16px;font-weight:100;">TWITTER</h3>
        </div>
        <div class="panel-body"  runat="server" style="overflow-y: scroll; height: 400px">
        <ul class="list-group">
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
            <li class="list-group-item"><strong>Signature
                Accommodations</strong>(1480m)
            </li>
        </div>
        <a href="https://twitter.com/Intrexon" target="_blank" style="border-radius:0px;padding:15px;" class="btn btn-primary btn-block">Discover More</a>
      </div>      
    </div>    
  </div>
</div>

<div class="container-fluid bg-white" style="font-family: Montserrat;font-size:16px;margin-left:-26px;margin-right:-26px;color:#333;line-height: 1.875;">
  <div class="row">
    <div class="col-sm-7">
      <h2 style="font-size: 35px;color: #333;">CAREERS</h2>
      <p>At intrexon, our team is committed to building a better world through better DNA. We strive every day to improve the planet through the engineering of biology, and we invite the World’s most creative and talented individuals to join us in this mission.</p>
      <p>“The purpose of the organization of intrexon is to enable dedicated and imaginative people who want to see their contributions benefit our planet. The culture we have built, which includes a very flat organization and the absence of a HQ, unites one thousand people toward a common general object while inspiring each to contribute uniquely.” 
          -RJ Kirk, Chairman and CEO of intrexon</p>
      <p>If you are ready to join us in creating the code for a better, cleaner, and healthier planet, check out our current job openings.</p>
      <p>
        <a class="btn btn-default btn-primary" href="http://careers.dna.com/" style="min-width:250px;font-size:18px;border-radius:0px;">Join Us</a>
      </p>
    </div>
    <div class="col-sm-5">
    <img src="https://www.dna.com/wp-content/uploads/2018/03/careers.png" class="" style="max-width: 100%;">
    </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<section id="contact-us-section"style="font-family: Montserrat;font-size:16px;margin-left:-26px;margin-right:-26px;color:#333;line-height: 1.875;background-image: url(https://www.dna.com/wp-content/uploads/2018/03/bg-circles.png); background-repeat: no-repeat;background-size:cover;" class="section two-column">
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-5">
     
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      <h1 class="text-center" style="margin-top:0px;font-family: Montserrat;color:#666;font-size:35px;margin-left:50px">CONTACT US</h1><br>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="firstname" name="firstname" placeholder="First Name*" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="lastname" name="lastname" placeholder="Last Name*" type="text" required>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12 form-group"> 
          <input class="form-control" id="email" name="email" placeholder="Email*" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group"> 
          <input class="form-control" id="company" name="company" placeholder="Company*" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group"> 
          <input class="form-control" id="phone" name="phone" placeholder="Phone*" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group"> 
         <select class="form-control" name="health" id="health">
            <option value="">Select*</option>
         </select>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="How can we help you?" rows="5"></textarea><br>
      <textarea class="form-control" id="agree" name="agree" style="resize:none;background-color:white;margin-top:-10px;font-size:12px"rows="5" readonly>
          Privacy Disclaimer for website visitors from the European Economic Area: By submitting your personal data through this contact form, you acknowledge having read and understood our Privacy Policy, which you can find here, including the provisions regarding the transfer of your personal data to the United States (as this is where this website is hosted and operated). By requesting us to contact you via this contact form, you expressly agree to such transfer, even though U.S. legislation may not provide sufficient protection of your personal data. If you do not want your personal data to be sent directly to the U.S., please do not use this contact form but contact our European subsidiaries directly at the following e-mail addresses: ABT.info@actobio.com, info@ilh.com, info@oxitec.com. If you have any further questions about the way in which we treat your personal data please contact us as indicated in our Privacy Policy.”

          Disclaimer: Any communication or other material that you send to us through the internet or by electronic mail or otherwise, such as any questions, comments, suggestions, investment opportunities, inventions or the like, is and will be deemed to be non-confidential.  Intrexon shall have no obligation of any kind with respect to such information. Intrexon shall be free to use, anywhere in the world, any ideas, concepts, know-how or techniques contained in such communication for any purpose whatsoever, including but not limited to, public and/or third party disclosure, development, manufacture, marketing, and sales.

          Notes: If you need to verify employment please fax your request with the employee consent form to (540) 301-2226 attention Human Resources.

          If you are a member of the public seeking personal and/or legal DNA-type testing services, you have reached this website in error. Please do not contact Intrexon about such services or to request referrals.
      </textarea><br>
      <div class="row" style="padding-left:17px;margin-top:-10px;">
        <input type="checkbox"> I have read the disclaimer and agree to its terms.</input>    
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-left" type="submit" style="min-width:250px;font-size:18px;border-radius:0px;">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<footer class="bg-grey" style="margin-left:-26px;margin-right:-26px;background-color:#fafafa;margin-bottom:-26px">
<div class="container">
  <div class="row" style="margin-top:50px">
    <div class="col-sm-2" style="margin-right:50px">
    <a href="#myPage"><img src="https://www.dna.com/wp-content/themes/intrexon/images/logo.png" width="196" class="brand-logo"></a>
    </div>
    <div class="col-sm-3" style="font-family: Montserrat;font-size:12px;">
      <p>intrexon designs and engineers living </p>
      <p>systems to address the world’s </p>
      <p>greatest challenges in health, energy, </p>
      <p>food, and environmental </p>
      <p>sustainability.</p>
    </div>
    <div class="col-sm-2" style="font-family: Montserrat;font-size:12px;">
        <p><a href="">Home</a></p>
        <p><a href="">Who We Are</a></p>
        <p><a href="">better DNA</a></p>
        <p><a href="">OUr Pipeline</a></p>
        <p><a href="">Legal Notices</a></p>
    </div>
    <div class="col-sm-2" style="font-family: Montserrat;font-size:12px;">
        <p><a href="">Media</a></p>
        <p><a href="">Careers</a></p>
        <p><a href="">Contact Us</a></p>
        <p><a href="">Investor Relations</a></p>
        <p><a href="">Privacy Policy</a></p>
    </div>
    <div class="col-sm-2">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-linkedin"></i>
    </div>
  </div>
  <br><br><br>
</div>
</footer>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script>
$(window).scroll(function() {    

var scroll = $(window).scrollTop();

if (scroll >= 50) {
    $(".clearHeader").addClass("darkHeader");
} else {
    $(".clearHeader").removeClass("darkHeader")    
}
});
</script>
<script>
  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>
</body>
</html>
