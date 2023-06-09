
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    
    <script>
        alertify.set('notifier','position', 'top-right');
        <?php if(isset($_SESSION['message'])) 
        { 
         
         ?>
         alertify.success('<?= $_SESSION['message'];?>');
        <?php 
                    unset($_SESSION['message']);
        } 
        ?>
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<footer class="text-white text-center text-lg-start bg-primary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>
  
          <p>
          We help people to discover our beautiful country by different culture of travel ( Hiking and Camp )
          </p>
  
          <p>
          Choisissez parmi nos programmes une destination pour découvrir de nouveaux horizons et revenir
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <form class="form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
                <h5 class="text-uppercase mb-4 pb-1">Search something</h5>
        
                            <div class="form-outline  mb-4">
                            <input name="search" value="<?php echo $search ?>" type="search" class="form-control bg-white w-75" />
                                <label class="form-label text-black" for="search">Search</label>
                            
                         
          </div>
          </form>
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">ANNABA,23000,ALG</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">randosolidaire.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+213660316628</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">038591111</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </footer>
</body>
</html>