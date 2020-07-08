<!DOCTYPE html>
<!--[if IE 8]>        <html class='ie8'><![endif]-->
<!--[if IE 9]>        <html class='ie9'><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
    <head>
        <?php include('f-meta.php'); ?>
        <link rel='stylesheet' href='css/bootstrap.min.css'>        
        <link rel='stylesheet' href='css/flexslider.css'>        
        <link rel='stylesheet' href='css/styles-en.css'>        
        <link rel='stylesheet' href='css/queries-en.css'>                
        <!--[if IE 9]><link rel='stylesheet' href='css/bootstrap-ie9.min.css'><![endif]-->
    </head>
    <body> 
        <?php include('f-header.php'); ?>

        <!-- Main Banner -->
        <div class='main-banner'>
            <div class='flexslider'>
                <ul class='slides'>                    
                    <li>
                        <div class='photo'><img src='https://picsum.photos/1920/1080/?random' alt='' title=''></div>
                        <div class='holder'>
                            <div class='container'>
                                <div class='details'>
                                    <h2>Title</h2>
                                    <h3>SubTitle</h3>
                                    <p>Description</p>
                                    <a href='#' class='btn btn-primary px-5'>More</a>
                                </div>
                            </div>
                        </div>                        
                    </li>
                </ul>
            </div>
        </div>


        <div class='bg-white py-5'>
            <div class='container'>

                <!-- Listing -->
                <div class='row listing'>
                    <div class='col-md-4 mb-5'>
                        <a href='details.php' class='holder'>
                            <span class='photo'><img src='temp/16x9.jpg' alt='' title=''></span>
                            <span class='details'>
                                <span class='date'>date</span>
                                <span class='title'>title</span>
                                <span class='summary'>summary</span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>            
        </div>

        <?php include('f-footer.php'); ?>

        <!-- Script -->
        <script src='js/comlib/jquery.min.js'></script>
        <script src='js/comlib/bootstrap.min.js'></script>        
        <script src='js/comlib/imagesloaded.js'></script>
        <script src='js/comlib/jquery.flexslider.js'></script>         
        <script src='js/functions.js'></script>
        <script>    
            $(document).ready(function(){ 
                $('#mnuHome, #ftHome').addClass('selected');
                // fitMainBanner();
            });  
            $(window).on('load', function(){
                $('.main-banner .flexslider').flexslider({
                    /* start: function(slider) {
                    $(slider).addClass('loaded') ;
                    } */
                });
            });  
            $(window).resize(function() {
                // fitMainBanner();
            }); 
        </script> 
    </body>
</html>
