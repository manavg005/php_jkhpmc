<?php
include('./database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>J&K HOTICULTURAL PRODUCE MARKETING & PROCESSING CORPORATION LTD.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/resp.css" rel="stylesheet">
    <!-- External Stylesheet -->
    <link href="css/logotext.css" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid  px-5 d-none d-lg-block" style="background-color: #2a660e;">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>Government of Jammu and Kashmir</small>
                    
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    
                    <small class="me-3 text-light"></i>حکومت جموں و کشمی</small>
                    
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="logo-container">
                <img src="img/emblem-dark.png" alt="Logo" class="logo-img">
                <h4 class="logo-text">J&K HOTICULTURAL PRODUCE MARKETING & PROCESSING CORPORATION LTD.</h>
    </div>
    
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg px-5 py-3 py-lg-0" id="nav" style="background-color:white">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="true">
            <span class="fa fa-bars"></span>
        </button>
            
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Organization</a>
                        <div class="dropdown-menu m-0">
                            <a href="aboutus.php" class="dropdown-item">About Us</a>
                            <a href="mission.php" class="dropdown-item">Mission</a>
                            <a href="objectives.php" class="dropdown-item">Objectives</a>
                            <a href="activities.php" class="dropdown-item">Activities</a>
                            <a href="directors.php" class="dropdown-item">Board of Directors</a>
                            <a href="committee.php" class="dropdown-item">Committee JKHMPC</a>
                            <a href="telephone.php" class="dropdown-item">Telephone Directory</a>
                            

                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Notifications</a>
                        <div class="dropdown-menu m-0">
                            <a href="tenders.php" class="dropdown-item">Tenders</a>
                            <a href="expp.php" class="dropdown-item">Expression of Interest</a>
                            <a href="public.php" class="dropdown-item">Public Notices</a>
                            
                        </div>
                    </div>

                    <a href="products.php" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                        <div class="dropdown-menu m-0">
                            <a href="photos.php" class="dropdown-item">Photos</a>
                            <a href="videos.php" class="dropdown-item">Videos</a>
                           
                        </div>
                    </div>
                    <a href="work.php" class="nav-item nav-link">Work Plan</a>

                    <a href="right.php" class="nav-item nav-link">Right To Information</a>

                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                </div>

               
            </div>
        </nav>
        <div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Committee JKHPMC</h1>
                    <a href="" class="h5 text-white">Organization</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Committee JKHPMC</a>
                </div>
            </div>

        </div>
        
    </div>
    <!-- Navbar End -->


    

    <!-- Table Start -->
    
    <!-- <div class="t1head">
         
            Vide Order No. 43 PER of 2021 Dated 26.06.21, 
            following are the members for SCPC (Standing Central Purchase Committee) 
            and DPC (Departmental Promotion Committee):-
    </div> -->
    <table class="ui table">
        
       

        <thead class="">
            <th class="">S.No</th>
            <th class="">Designation</th>
            <th class="">Name</th>
            <th class="">Position</th>
        </thead>
        <?php
        $sno=0;
        $sql='SELECT * FROM committe';
    
        
       
        $runCq=mysqli_query($db,$sql);
        while($post=mysqli_fetch_assoc($runCq))
        {
            $sno++;
            ?>
        
        <tbody class="">
            <tr class="">
               
                <td class=""><?=$sno;?></td>
                <td class=""><?=$post['designation']?></td>
                <td class=""><?=$post['name']?></td>
                <td class=""><?=$post['position']?></td>
            </tr>
            
        </tbody>
        <?php
        }
        ?>
    </table>
    
    
    <!-- Table End -->


   


    

    <!-- Footer Start -->
    <div class="container-fluid " id="footer" data-wow-delay="0.1s" >
        <div class="container" style="background-color:#34AD54;">
            <div class="row gx-5" >
                <div class="col-lg-8 col-md-6" style="color:white; ">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt  me-2" style="color:brown"></i>
                                <p class="mb-0">Head Office, Rajbagh Srinagar</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open me-2" style="color:brown"></i>
                                <p class="mb-0">
                                    jkhpmcltd@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone me-2" style="color:brown"></i>
                                
                                <p class="mb-0">
                                    0194- 2311312 </p>
                            </div>
                           
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Navigations</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right " 
                                    style="color:brown">
                                </i>Home</a>
                                <a class="text-light mb-2" href="aboutus.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>About</a>
                                <a class="text-light mb-2" href="mission.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Mission</a>
                                <a class="text-light mb-2" href="objectives.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Objectives</a>
                                <a class="text-light" href="activities.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Activities</a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Notifications</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="tenders.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Tenders</a>
                                <a class="text-light mb-2" href="public.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Public Notices</a>
                               
                                <a class="text-light mb-2" href="expp.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Expression of Interest</a>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Important Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            
                            <a class="text-light mb-2" href="https://jkgad.nic.in/"><i class="bi bi-arrow-right " 
                                style="color:brown">
                            </i>General Administartion Department</a>
                            <a class="text-light mb-2" href="http://www.hortijmu.jk.gov.in/"><i class="bi bi-arrow-right " style="color:brown">
                            </i>Directorate of Horticulture Jammu</a>
                            <a class="text-light mb-2" href="https://hortikashmir.gov.in/"><i class="bi bi-arrow-right "style="color:brown">
                            </i>Directorate of Horticulture Kashmir</a>
                            <a class="text-light mb-2" href="http://jkdhpm.in/index.aspx"><i class="bi bi-arrow-right "style="color:brown">
                            </i>Directorate of Horticulture(P&M) J&K</a>
                            <a class="text-light" href="https://nhb.gov.in/default.aspx"><i class="bi bi-arrow-right "style="color:brown">
                            </i>National Horticulture Board</a>
                        </div>
                    </div>
                    
                    
                       
                    

            
                
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background-color:rgba(11,12,11,.8627450980392157);">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100px;">
                         
                            Website Designed and Developed by Jammu and Kashmir e-Governance Agency (JaKeGA), ITD
						
					
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded back-to-top" style="color:red; background-color: yellowgreen;" ><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>