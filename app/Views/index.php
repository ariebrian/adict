<php>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>A-Dictionary Homepage</title>
	
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/style.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?= base_url('/') ?>" class="navbar-brand">A-Dictionary</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="<?= base_url('/') ?>" class="dropbtn666">Home</a></li>
                         <li>
                              <div class="dropdown">
                                   <button class="dropbtn666">Glossarium</button>
                                   <div class="dropdown-content">
                                        <a href="<?= base_url('/list') ?>">Pharasal Verbs List</a>
                                        <a href="#">English Idioms and Terms List</a>
                                        <a href="#">Slang Words</a>
                                   </div>
                              </div>
                         </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><p class="dropbtn666">Enjoy! Have a good time!!</p></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>The Anti-Mainstream Dictionary</h3>
                              <h1>Expand Your Vocabulary <br>Be A Native Speaker!</h1>
                              <form action="<?= base_url('/search') ?>" method="post" class="online-form">
                              <?= csrf_field() ?>
                                   <input type="text" name="word" class="form-control" placeholder="Enter Keywords" style="width: 550px;" required>
                                   <h3></h3>
                                   <select name="category" id="category" class="form-control" style="width: 350px;">
                                        <option value="1">Pharasal Verbs</option>
                                        <option value="3">Engish Idioms & Terms</option>
                                        <option value="2">Slang Words</option>
                                   </select>
                                   <input type="submit" class="form-control" value="Search" />
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

      <!-- FOOTER -->
      <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2020 Fadhil Maulana Saphietra</p>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
</php>