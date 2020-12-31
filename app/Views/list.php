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
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/util.css">
     <!-- <link rel="stylesheet" href="css/datatables.css"> -->
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
                    <a href="#" class="navbar-brand">A-Dictionary</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><button href="#home" class="dropbtn666">Home</button></li>
                         <li>
                              <div class="dropdown">
                                   <button class="dropbtn666">Glossarium</button>
                                   <div class="dropdown-content">
                                        <a href="#">Pharasal Verbs List</a>
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
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <div class="home-info">
                              <h3>Glossarium</h3>
                              <h1>Phrasal Verbs <br>(tergantung tombol yang ditekan)</h1>
                              <div class="table100 ver1 m-b-110">
                                   <table class="datatable">
                                   </table>
                                <table data-vertable="ver1">
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="column100 column1" data-column="column1" style="text-align: center;">Kategori</th>
                                            <th class="column100 column2" data-column="column2" style="text-align: center;">English</th>
                                            <th class="column100 column3" data-column="column3" style="text-align: center;">Meaning</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $key => $value) { ?>
                                        <tr class="row100">
                                            <td class="column100 column1" data-column="column1"><?php echo $value['id']; ?></td>
                                            <td class="column100 column2" data-column="column2"><?php echo $value['inggris']; ?></td>
                                            <td class="column100 column3" data-column="column3"><?php echo $value['indonesia']; ?></td>
                                        </tr>
                                   <?php } ?>
            
                                        
                                    </tbody>
                                </table>
                            </div>
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
     <!-- <script src="js/datatables.js"></script> -->

</body>
</html>