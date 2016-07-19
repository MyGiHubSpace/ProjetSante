<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="assurance ci Mutuell Centre de Sante Officine">
        <meta name="author" content="Allouka Jean romaric">
       <!--Solution + ALL IN ONE -mutuelle|assurances|centre hospitalier  -->
        <title><?php if(isset($mllemut)) echo $mllemut;else echo 'kaka';  ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        
        <!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                           <img src="images/logoSolution.jpg" alt"=logo Solution +" class="logoSolution"/></br>
                           <span ><h1> Solution +<h1> </span>
                                                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        
                                               
                        
                        
                    </div>
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red ">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Preinscription</p>
                            </a>
                        </div>
                        
                                               
                    </div>
                    
                                       
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#section-modal" data-toggle="modal"  >
                                <i class="fa fa-user"></i>
                                <p>Gestion des Utulisateurs</p>
                            </a>
                        </div>
                                              
                    </div>
                    <div class="col-md-3">
                        
                                               
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Design & Developed by <a href="https://www.facebook.com/jeanromaric.allouka" target="_blank">A.J.R</a> for <a href="http://graygrids.com">Happy</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container " >
                    <div class="row ">
                        <div class="section-title text-center">
                            <h3>Pré-Inscription</h3>
                            <p>Selectionner le type de compte a Preinscrit </p>
                            <br/>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">

                        </div>    

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa  fa-home icon" id="AS" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Assureur</h4>
                                   
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa  fa-wheelchair icon " id="MU" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Mutuelle</h4>
                                    
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa  fa-wheelchair icon " id="SP" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Societe Privée</h4>
                                  
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6 col-xs-12">

                        </div> 

                    </div>
                    
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-hospital-o icon" id="CS" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Centre de Santé</h4>
                                   
                                </div>
                            </div>

                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa  fa-medkit icon " id="OF" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Officine</h4>
                                   
                                </div>
                            </div>

                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-user-md icon" id="AG" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Agent de Sante</h4>
                                    
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-user icon" id="PA" data-toggle="modal" data-target="#myModal"></i>
                                <div class="feature-content">
                                    <h4>Particulier</h4>
                                    
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        
                   

                    <!--modal relatif aux diiferemnt formulaire d'inscription -->
                    
                        <!-- Modal Assureur-->

                        <?php echo $content; ?> 


                    </div><!-- /.row -->
               
                </div>
            </div>

        </div>    
        <!-- End Feature Section -->
    <script src="js/AjaxCode.js"></script>
    </body>
    
</html>