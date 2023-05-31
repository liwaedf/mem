<?php
include("config/dbcon.php");
include_once("functions/myfunctions.php");

$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        // go to index.php and display the results of the search using the url 
       header("location: index.php?search=$search");
        
    }
}
function searchByName($products, $search)
{
    $search = strtolower($search);
    $products = array_filter($products, function ($product) use ($search) {
        return strpos(strtolower($product['name']), $search) !== false || strpos(strtolower($product['small_description']), $search) !== false;
    });
    return $products;
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-success" >




<div class="container">

<a aria-label="Home" href="index.php" class="block-abc tac mh__logo">
    <svg fill="#000000" height="80px" width="80px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 456.18 456.18" xml:space="preserve">
    <g>
	<circle cx="323.037" cy="54.949" r="29.994"/>
	<path d="M43.923,404.995l7.68-75.648c0.204-2.014,0.056-4.048-0.438-6.011L39.56,277.298l48.592,25.071l13.302-32.295
		l-16.537-8.532l1.327-4.413l-5.831-1.055c-12.697-2.298-20.696-12.729-21.954-19.768l-10.433-58.357l24.135,55.908h0
		c2.018,4.673,6.321,7.723,10.731,8.521l57.004,10.313c7.753,1.413,15.409-3.725,16.849-11.686
		c1.436-7.936-3.887-15.439-11.686-16.849l-49.354-8.93l-21.856-50.629l29.036,37.205l3.885-12.917l25.663,5.975l7.173-17.415
		c1.469-3.566,3.673-6.662,6.392-9.146l-37.215-8.664c-2.634-4.779-7.065-8.574-12.703-10.27L59.16,138.26
		c-11.434-3.439-23.491,3.042-26.93,14.476L2.486,251.635c-2.298,3.828-3.132,8.534-1.955,13.206l16.142,64.035l-7.371,72.604
		c-0.971,9.56,5.993,18.097,15.553,19.067C34.419,421.517,42.952,414.552,43.923,404.995z"/>
	<path d="M112.621,376.973c3.897,6.429,11.658,9.812,19.278,7.813c9.296-2.435,14.856-11.946,12.421-21.241l-10.175-38.829
		L112.621,376.973z"/>
	<circle cx="95.477" cy="103.698" r="32.003"/>
	<path d="M147.537,210.458c5.895,1.067,11.179,3.901,15.273,8.112l11.117-26.99c2.44-5.923-0.384-12.703-6.308-15.143
		c-5.924-2.442-12.704,0.385-15.143,6.307l-10.966,26.623L147.537,210.458z"/>
	<path d="M454.886,347.994c-0.21-0.161-0.437-0.293-0.673-0.398c0.736-3.525,0.405-7.305-1.224-10.824l-57.576-124.426
		L373.66,108.751l37.539-22.352c1.796-1.069,3.34-2.516,4.523-4.239l27.511-40.039c4.526-6.587,2.855-15.597-3.732-20.123
		c-6.586-4.526-15.596-2.856-20.123,3.732l-25.714,37.423l-43.707,26.025c-1.457,0.227,3.346-0.758-36.436,7.595
		c-6.184,1.298-11.11,5.291-13.815,10.491l-32.344,24.331l-52.504,6.498c-7.316,0.905-12.664,7.125-12.683,14.309
		c-1.513,0.211-3.019,0.655-4.462,1.375l-22.168,11.057c9.329,5.148,14.384,15.564,12.927,25.897l22.161-11.053
		c5.054-2.521,7.973-7.6,8.001-12.887l56.117-6.945c2.513-0.311,4.899-1.275,6.923-2.797l20.553-15.46l15.347,73.087l-26.176,43.227
		c-2.163,3.572-2.966,7.803-2.264,11.919l14.005,80.916c0.953,5.58,4.473,10.054,9.125,12.474l-24.901-1.897
		c-6.926-0.528-13.842,1.134-19.772,4.751l-32.721,19.961c-5.723,3.491-12.144,5.679-18.808,6.407l-91.618,10.018
		c-4.77,0.522-9.429,1.793-13.803,3.765L98.28,411.79l-17.256,4.821c0.376-0.584,0.712-1.204,0.986-1.869l60.924-147.916
		c-3.775,0.063-3.645-0.1-23.563-3.704L60.56,405.907c-2.349,5.702,0.189,12.186,5.665,14.839L37.83,428.68
		c-1.472,0.664-2.39,2.094-2.46,3.648c-0.114,2.512,1.885,4.4,4.191,4.4H456.18v-86.106
		C456.18,349.593,455.702,348.622,454.886,347.994z M379.938,366.519c-3.586,0.951-7.306,1.292-11.005,1.01l-43.109-3.285
		c7.956-2.686,13.01-10.813,11.552-19.353l-12.916-74.535l28.545-47.137l8.356-1.754l60.106,129.893
		c0.604,1.305,1.356,2.493,2.216,3.567L379.938,366.519z"/>
</g>
    </svg>
</a>

      
      
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-light active" aria-current="page" href="index.php">Accueil</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="categories.php?profit=1" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Programmes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            $profitCategories = getProfitCategories();
            while($category = mysqli_fetch_assoc($profitCategories)) {
                echo "<li><a class='dropdown-item' href='trips.php?category=".$category['slug']."'>".$category['name']."</a></li>";
            }
            ?>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="categories.php?profit=0" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Activité caritative
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            $nonProfitCategories = getNonProfitCategories();
            while($category = mysqli_fetch_assoc($nonProfitCategories)) {
                echo "<li><a class='dropdown-item' href='trips.php?category=".$category['slug']."'>".$category['name']."</a></li>";
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
                <a class="nav-link text-light" href="contact.php">F.A.Q</a>
              </li>
        <?php 
            if(isset($_SESSION['auth']))
            {
                ?>
               
                    <li class="nav-item">
                      <a class="nav-link text-light" href="logout.php">Logout</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-light" href="view-reservation.php"><span>Reservations </span><img src="uploads/shopping-cartsvg.svg" alt="reservation" width="22px" height ="20px"></a>
                    </li>
                
            <?php 
            }
            else{
               ?> 
              <li class="nav-item">
                <a class="nav-link text-light" href="login.php">connexion</a>
              </li>
              
              
            <?php
            }

            $search ='';
        ?>


      </ul>
    </div>
  </div>
</nav>