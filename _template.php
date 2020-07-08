<!DOCTYPE html>
<!--[if IE 8]>        <html class='ie8'><![endif]-->
<!--[if IE 9]>        <html class='ie9'><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
    <head>
        <?php include('f-meta.php'); ?> 
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/bootstrap-datepicker.min.css'>
        <link rel='stylesheet' href='css/jquery.fancybox.css'>
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
                        <div class='photo'><img src='https://picsum.photos/1920/960/?random' alt='' title=''></div>
                        <div class='holder'>
                            <div class='container'>
                                <div class='details text-center'>
                                    <h2>Title</h2>
                                    <h3>SubTitle</h3>
                                    <p>Description</p>
                                    <a href='#' class='btn btn-primary px-5 mt-4'>More</a>
                                </div>
                            </div>
                        </div>                        
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sub Banner -->
        <div class='main-banner'>
            <div class='photo'><img src='https://picsum.photos/1920/480/?random' alt='' title=''></div>
            <div class='holder'>
                <div class='container'>
                    <div class='details text-center'>
                        <h2>Title</h2>
                        <h3>SubTitle</h3>
                    </div>
                </div>
            </div>                        
        </div>

        <!-- Forms -->
        <div class='bg-light py-5'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-6 mb-2'>
                        <label for='txtName'>Name<sup>*</sup></label>
                        <input type='text' name='txtName' id='txtName' maxlength='40' class='form-control' placeholder='Name'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtFirstName'>First Name<sup>*</sup></label>
                        <input type='text' name='txtFirstName' id='txtFirstName' maxlength='40' class='form-control' placeholder='First Name'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtLastName'>Last Name<sup>*</sup></label>
                        <input type='text' name='txtLastName' id='txtLastName' maxlength='40' class='form-control' placeholder='Last Name'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtPhone'>Phone<sup>*</sup></label>
                        <input type='tel' name='txtPhone' id='txtPhone' maxlength='20' class='form-control' placeholder='Phone'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtDob'>Date of Birth<sup>*</sup></label>
                        <input type='text' name='txtDob' id='txtDob' maxlength='20' class='form-control' placeholder='Date of Birth'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtEmail'>Email<sup>*</sup></label>
                        <input type='email' name='txtEmail' id='txtEmail' maxlength='40' class='form-control' placeholder='Email'>
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='cmbCountry'>Country<sup>*</sup></label>
                        <select name='cmbCountry' id='cmbCountry' class='form-control'>
                            <option value='0'>Country</option>
                        </select>
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtCity'>City</label>
                        <input type='text' name='txtCity' id='txtCity' maxlength='40' class='form-control' placeholder='City'>            
                    </div>

                    <div class='col-sm-6 mb-2'>
                        <label for='txtUploadCv'>Upload CV<sup>*</sup></label>
                        <div class='custom-upload'>
                            <input type='file' name='txtUploadCv' id='txtUploadCv' maxlength='100' accept='.doc, .docx, .odt, .oxt, .pages, .pdf' data-required='1'>
                            <input disabled='disabled' placeholder='Upload CV*' class='form-control'>
                        </div>
                    </div> 

                    <div class='col-sm-6 mb-2'>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1'>
                            <label class='form-check-label' for='inlineRadio1'>1</label>                                
                        </div>
                        <div class='form-check form-check-inline'>                                                                
                            <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
                            <label class='form-check-label' for='inlineRadio2'>2</label>
                        </div>                            
                    </div> 

                    <div class='col-12'>
                        <label for='txtMessage'>Message<sup>*</sup></label>
                        <textarea class='form-control' rows='5' id='txtMessage' name='txtMessage' maxlength='255' placeholder='Message'></textarea>
                    </div>  
                    <div class='col-12'>
                        <button class='btn btn-primary px-5'>Update</button>
                        <button class='btn btn-secondary px-5'>Cancel</button>                                                     
                    </div>
                </div>
            </div>   
        </div>

        <div class='bg-white py-5'>
            <div class='container my-5'>
                <div class='row justify-content-center'>
                    <div class='col-md-6'>
                        <div class='card'>
                            <div class='card-body clearfix'>
                                <div class='alert alert-success alert-dismissible fade show'>
                                    <button type='button' class='close' data-dismiss='alert'>x</button>
                                    <strong>Success!</strong> Alert.
                                </div>

                                <div class='alert alert-danger'>
                                    <strong>Danger!</strong> Alert.
                                </div>

                                <div class='form-group'>
                                    <label for='txtUsername'>Username<sup>*</sup></label>
                                    <input type='text' name='txtUsername' id='txtUsername' maxlength='40' class='form-control'>            
                                </div>

                                <div class='form-group'>  
                                    <label for='txtEmail'>Email<sup>*</sup></label>
                                    <input type='email' name='txtEmail' id='txtEmail' maxlength='40' class='form-control'>            
                                </div>

                                <div class='form-group'>
                                    <label for='txtPassword'>Password<sup>*</sup></label>
                                    <input type='password' name='txtPassword' id='txtPassword' maxlength='40' class='form-control'>
                                </div>

                                <div class='form-check mb-2'>
                                    <input class='form-check-input' type='checkbox' name='chkRemember' id='chkRemember'>
                                    <label for='chkRemember' class='form-check-label'>Remember me</label>
                                </div>

                                <button class='btn btn-primary px-5 float-right'>Submit</button>
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>

        <div class='bg-light py-5'>
            <div class='container'>
                <div class='form-group row'>
                    <label for='txtFirstName' class='col-2 col-form-label'>Fisrt Name<sup>*</sup></label>
                    <div class='col-4'>
                        <input type='text' name='txtFirstName' id='txtFirstName' class='form-control'>
                    </div>

                    <label for='txtLastName' class='col-2 col-form-label'>Last Name<sup>*</sup></label>
                    <div class='col-4'>
                        <input type='text' name='txtLastName' id='txtLastName' class='form-control'>
                    </div>
                </div>
                <div class='form-group row'>
                    <label for='txtEmail' class='col-2 col-form-label'>Email<sup>*</sup></label>
                    <div class='col-10'>
                        <input type='email' name='txtEmail' id='txtEmail' class='form-control' >
                    </div>
                </div>
                <div class='form-group row clearfix'>  
                    <div class='col-12'>
                        <button class='btn btn-primary px-5  float-right'>Sign Up</button>
                    </div>
                </div>
            </div>  
        </div>  

        <!-- Listing  -->
        <div class='bg-white py-5'>  
            <div class='container'>  
                <div class='listing'>
                    <div class='row'>                
                        <div class='col-md-4 col-sm-6 mb-4'>
                            <a href='details.php' class='holder'>
                                <span class='photo'><img src='temp/16x9.jpg' alt='' title=''></span>
                                <span class='details'>
                                    <span class='date'>date</span>
                                    <span class='title'>title</span>
                                    <span class='summary'>summary</span>
                                </span>
                            </a>
                        </div>
                        <div class='col-md-4 col-sm-6 mb-4'>
                            <a href='details.php' class='holder'>
                                <span class='photo'><img src='temp/16x9.jpg' alt='' title=''></span>
                                <span class='details'>
                                    <span class='date'>date</span>
                                    <span class='title'>title</span>
                                    <span class='summary'>summary</span>
                                </span>
                            </a>
                        </div>
                        <div class='col-md-4 col-sm-6 mb-4'>
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
                    <div class='page-numbering'> 
                        <ul> 
                            <li><a href='javascript:;' title='First'><i class='fas fa-angle-double-left'></i></a></li> 
                            <li><a href='javascript:;' title='Previous'><i class='fas fa-angle-left'></i></a></li> 
                            <li><a href='javascript:;' class='selected'>1</a></li> 
                            <li><a href='javascript:;'>2</a></li> 
                            <li><a href='javascript:;'>3</a></li> 
                            <li><a href='javascript:;' title='Next'><i class='fas fa-angle-right'></i></a></li> 
                            <li><a href='javascript:;' title='Last'><i class='fas fa-angle-double-right'></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article -->
        <div class='bg-light py-5'>  
            <div class='container'>
                <article>
                    <div class='row'>
                        <div class='col-md-6 mb-4'>
                            <div class='carousel slide' data-ride='carousel' id='photosCarousel'>
                                <div class='carousel-inner'>
                                    <div class='carousel-item active'>
                                        <div class='photo'><img src='temp/1x1.jpg' alt='' title=''></div>
                                    </div>
                                    <div class='carousel-item'>
                                        <div class='photo'><img src='temp/1x1.jpg' alt='' title=''></div>
                                    </div>
                                    <div class='carousel-item'>
                                        <div class='photo'><img src='temp/1x1.jpg' alt='' title=''></div>
                                    </div>                        
                                </div>
                                <a href='#photosCarousel' role='button' data-slide='prev' class='carousel-control-prev'>
                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                </a>
                                <a href='#photosCarousel' role='button' data-slide='next' class='carousel-control-next'>
                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                </a>
                            </div>  
                        </div>  
                        <div class='col-md-6'>
                            <div class='content'>
                                <div class='date'>Date goes here</div>
                                <h4 class='category'>Date goes here</h4>
                                <h1 class='title'>Title goes here</h1>
                                <div class='details'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac felis eget quam aliquet congue non molestie enim. 
                                    Aenean sed risus accumsan libero convallis dapibus. Integer viverra ornare mi quis finibus. In gravida velit vel lectus blandit aliquet. 
                                    Curabitur posuere est ac placerat condimentum. Vivamus ipsum magna, porttitor ac mi vel, sollicitudin congue lorem. Maecenas a orci odio. 
                                    Nam sapien ante, cursus at tempus quis, mollis id tortor.
                                </div>                
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Simple Banner -->
        <div class='bg-white py-5'>
            <div class='container'>
                <div class='banner'>
                    <a href='#' target='_blank'>
                        <span class='photo'><img src='https://picsum.photos/1100/180/?random' alt='' title=''></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Simple Banner -->
        <div class='bg-light py-4'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 my-2'>
                        <div class='banner'>
                            <a href='#' target='_blank'>
                                <span class='photo'><img src='https://picsum.photos/540/200/?random' alt='' title=''></span>
                            </a>
                        </div>
                    </div>    
                    <div class='col-md-6 my-2'>
                        <div class='banner'>
                            <a href='#' target='_blank'>
                                <span class='photo'><img src='https://picsum.photos/540/200/?random' alt='' title=''></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='map'>
            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.0218870637036!2d35.6051484155995!3d33.96627692970209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17d2e4730e1d%3A0x292b6a19e85071b3!2sQUAKEVISION+Digital+Agency!5e0!3m2!1sen!2slb!4v1565591950738!5m2!1sen!2slb' frameborder='0' allowfullscreen></iframe>
        </div>

        <?php include('f-footer.php'); ?>

        <!-- Script -->
        <script src='js/comlib/jquery.min.js'></script>
        <script src='js/comlib/bootstrap.min.js'></script>         
        <script src='js/comlib/imagesloaded.js'></script>
        <script src='js/comlib/jquery.flexslider.js'></script>         
        <script src='js/comlib/jquery.fancybox.min.js'></script>  
        <script src='js/comlib/bootstrap-datepicker.min.js'></script>       
        <script src='js/functions.js'></script>
        <script>    
            $(document).ready(function(){ 
                $('#mnuHome, #ftHome').addClass('selected');

                // fitMainBanner();

                $('#txtDob').datepicker({
                    'format': 'dd-mm-yyyy',
                    'startDate': '-90y',
                    'endDate': '-18y',
                    'keyboardNavigation': false
                }); 
            });  
            $(window).on('load', function(){
                $('.flexslider').flexslider({
                    controlNav: true,
                    directionNav: false
                });
            });  
            $(window).resize(function() {
                // fitMainBanner();
            });
            $('.fake-upload').on('change', function() {
                $(this).next('input').val($(this).val());
            }); 
        </script> 
    </body>
</html>
