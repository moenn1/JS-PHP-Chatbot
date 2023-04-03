<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css?v=1.0.2">

    <title>ChatBot</title>
  </head>
  <body>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto p-0">

                <div id="intro">
                    <div class="vh-100 d-grid justify-content-center align-items-center p-lg-5 p-3">
                        <div class="card shadow-sm">
                            <div class="card-body py-5 px-4 text-center">
                                
                                <h5>Welcome!</h5>
                                <div class="mb-3">Please, enter your email address below to start a chat.</div>

                                <form id="startform" action="" method="POST">
                                    
                                    <div class="d-grid mb-5">
                                        <input type="email" name="email"  id="useremail" class="form-control rounded-pill" placeholder="Email Address">
                                    </div>
                                    
                                    <div class="d-grid mb-3">
                                        <button type="submit" disabled="true" id="startbtn" class="btn btn-dark rounded-pill">Start Chat <i class="bi bi-send ms-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<script src="js/jquery.js"></script>
<script>
 
        $('#startbtn').click(function(){
           let useremail =  $('#useremail').val();
        
                $.post("insert.php",{
                    useremail:useremail

                },function(response){


               })
        })              
                
        

</script>


    <script src="js/jquery.js"></script>
                <div id="chat" style="display: none;">
                    <div class="position-relative">
                        <div class="d-flex justify-content-between align-items-center w-100" id="chathead">
                            <div class="d-flex justify-content-start align-items-center">
                                <button class="btn me-2 btn-circle rounded-circle" id="back"><i class="bi bi-arrow-left"></i></button>
                                <div class="avatar border me-1" id="support-avatar">
                                    <img src="img/sonic.png" class="img-fluid" alt="">
                                </div>
                                <div class="d-grid ms-2 lead text-white">                                    
                                    <span class="support-name"></span>
                                    <span id="status">Online</span>
                                </div>
                            </div>

                            <div class="dropdown">
                                <!-- <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical text-white"></i>
                                </button> -->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Download Transcript</a></li>
                                    <li><a class="dropdown-item" href="#">End Chat</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-100" id="chatbox">
                            
                        </div>

                        <div class="sticky-bottom">
                            <div id="suggestionBox"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="js/style.js?v=1.0.2" type="text/javascript"></script>
  </body>
</html>
