<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    
 <!-- Start Login -->
<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="d-flex justify-content-center py-4">
                        <a href="login.php" class="logo d-flex align-items-center w-auto text-decoration-none">
                            <i class="bi bi-people h1"></i>
                            
                            <h4 class="d-none d-lg-block px-2 text-dark">Auth System</h4>
                        </a>
                    </div> 
                    <?php include_once 'msg.php';?>
                    <div class="card mb-3 mt-3">
                        
                        <div class="card-body">
                            
                            <div class="pt-2 pb-2">
                                <h4 class="card-title text-center pb-0 fs-4">Register Now</h4>
                                <p class="text-center small">Enter your Account Details</p>
                            </div>
                
                            <form method="POST" action="code.php" class="row g-3 needs-validation" novalidate>
                                <div class="col-12 mb-3">
                                    <label  class="form-label">NAME</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="name" class="form-control"  value="">
                                        <div class="invalid-feedback">Please enter your Name.</div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <label  class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="email" class="form-control"  value="">
                                        <div class="invalid-feedback">Please enter your Email.</div>
                                    </div>
                                </div>
               
                                    <div class="col-12 mb-3">
                                        
                                        <label>Password</label>
    
                                            <div class="input-group mb-3" id="show_hide_password">
                                                <input class="form-control" type="password" name="password">
                                                <a href="" class="input-group-text"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                            </div>

                                    </div>
    
        
                                
                                
                               
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit" name="register">Register</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have account?
                                        <a href="login.php">Login</a>
                                    </p>
                
                                </div>
                            </form>
                
                        </div>
                    </div>
                    <div class="credits d-flex justify-content-center"> Designed by 
                    <a href=" https://Ahmedabdelkader.com"> Ahmed Abdelkader Salim</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- custome js -->
 <script src="assets/main.js"></script>
</body>
</html>