<a?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agricultural World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <style>
    .mySlides {display:none;}
    </style>
  <style>

body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f8f8; 
  color: #333; 
}
.navbar-inverse {
  background-color: #000; 
  border-color: #000; 
}
.navbar-inverse .navbar-brand {
  color: #fff; 
}
.navbar-inverse .navbar-nav>li>a {
  color: #fff;
}
.navbar-inverse .navbar-nav>li>a:hover,
.navbar-inverse .navbar-nav>li>a:focus {
  background-color: #007bff; 
}


blockquote {
  background-color: #fff; 
  padding: 20px;
  border-radius: 5px;
  margin-top: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.container-fluid h1 {
  font-size: 36px; 
  font-weight: bold;
  color: #444; 
  margin-top: 40px; 
}

.container-fluid p {
  font-size: 18px; 
  line-height: 1.6; 
}


#left-panel {
  background-color: #f8f8f8; 
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
.checkbox-label {
  margin-bottom: 10px;
}
.checkbox-label input[type="checkbox"] {
  margin-right: 5px;
}


@media (max-width: 768px) {
  #left-panel {
    display: none;
  }
}
h1{
  text-align: center;
}
.card-4 {
  position: relative;
  max-width: 400px;
  margin: auto;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: transform 0.3s ease;
}

.card-4:hover {
  transform: scale(1.05);
}

.card-4 img {
  width: 100%;
  height: auto;
}

.card-4 .container {
  padding: 2px 16px;
}


/* Style for product panel */
.thumbnail {
  border: 1px solid #ddd;
  padding: 10px;
  height: 400px; /* Set a fixed height */
  overflow: hidden;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensure the image covers the entire area */
}

.caption {
  text-align: center;
}

.caption h3 {
  margin-top: 10px;
}

.caption p {
  margin-bottom: 10px;
}

/* Style for quantity input */
.form-group {
  margin-bottom: 10px;
}

/* Style for buttons */
.btn {
  margin-bottom: 10px;
}

/* Ensure proper alignment */
.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.col-md-2 {
  flex-basis: calc(16.666% - 20px);
  margin-bottom: 20px; /* Adjust as needed */
}
.profile-img {
        float: right;
        margin-top: 6px;
        margin-right: 20px; /* Adjust the margin as needed */
    }
    .outer-panel {
  background-color: darksalmon; /* Reddish orange color for outer panel */
  padding: 80px;
  border-radius: 30px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Soft shadow effect */
}

.inner-panel {
  background-color:white; /* White background for inner panel */
  padding: 30px;
  border-radius: 15px;
}

.inner-panel h1, .inner-panel h4 {
  text-align: center;
  color: #333; /* Dark gray text color */
}

.inner-panel h4 {
  margin-top: 30px; /* Add space between steps */
}

.inner-panel p {
  text-align: left;
  color: #666; /* Medium gray text color */
  margin-bottom: 20px; /* Add some space below paragraphs */
}

/* Styling for the steps */
.inner-panel h4::before {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  background-color:white; /* Red color for step markers */
  border-radius: 50%;
  margin: auto; /* Center the marker */
  margin-bottom: 10px; /* Add space between marker and step title */
}

/* Styling for the step titles */
.inner-panel h4 {
  position: relative; /* Position marker relative to step title */
  padding-left: 50px; /* Add space for the marker */
}


  </style>
  
</head>
<body>
  
<nav class="navbar navbar-inverse">
  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="logoshetti.png" height="60px;" width="70px;"alt="Agri World Logo">
    
    </a>
    
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="main.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">products<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Fertilizers.html">Fertilizers</a></li>
          <li><a href="seeds.html">seeds</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="irrigation.html">Irrigation Systems</a></li>
          <li><a href="pestcontrol.html">Pest Control</a></li>
          <li><a href="organic.html">Organic Products</a></li>
        </ul>
      </li>
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Accessories<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="plantcare.html">Plant Care</a></li>
          <li><a href="gardening.html">Gardening Supplies</a></li>
        </ul>
      </li>

      <li><a href="aboutus.html"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
      <li><a href="contactus.html"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>

      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->

        <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="search.html"><span class="glyphicon glyphicon-search"></span> </a></li>
       
<li><a href="addToCart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>

<li><a href="profile.php"><img src="profile_icon.png" alt="Profile" style="width: 30px; height: 30px;"></a></li>



        
      </ul>
    </ul>
  </div>
</nav>
  



  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
    
        <div id="left-panel">
          <h4>Options</h4>
     
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Miracle-Grow</label>
          </div>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Scotts</label>
          </div>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Osmocote</label>
          </div>
        
          <h4>Quantity</h4>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">10 kg</label>
          </div>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">20 kg</label>
          </div>
       
          <h4>Fertilizers</h4>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Nitrogen</label>
          </div>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Phosphorus</label>
          </div>
     
          <h4>Seeds</h4>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Wheat Seeds</label>
          </div>
          <div class="checkbox-label">
            <label><input type="checkbox" value="">Corn Seeds</label>
          </div>
        
          <a href="products.html">
            <button id="okButton" class="btn btn-primary">OK</button>
        </a>
        
        </div>
      </div>

      <div class="col-sm-10">
        <blockquote>
          <div class="container-fluid">
            <h1>
              <img src="logoshetti.png"  height="70px;" width="100px;" alt="Agri World Logo">Shetii.com</h1>
            <h2 style="text-align: center; font-weight: bold;">Sprouting Love for Agricultural Treasures</h2>
            <p>"At Shetti.com, we believe in the magic of agriculture—the way it nurtures our souls and sustains our bodies."</p>
            <p>"Our platform is more than just a marketplace; it's a celebration of the lush abundance our Earth provides."</p>
            <p>"From the verdant fields to the fragrant orchards, we curate a selection of agricultural treasures that embody the essence of nature's love."</p>
            <p>"With each product, we aim to cultivate a deeper connection between growers and consumers, fostering a community rooted in appreciation and respect for the land."</p>
            <p>"Join us on this journey of growth and discovery, where every harvest tells a story of Shetti.com."</p>
          </div>
          <div class="slideshow-container">
            <div class="mySlides">
              <img src="agri1.jpg" style="width:100%" alt="Agriculture Image 1">
            </div>
            <div class="mySlides">
              <img src="background.jpg" style="width:100%" alt="Agriculture Image 2">
            </div>
            <div class="mySlides">
              <img src="agri3.jpg" style="width:100%" alt="Agriculture Image 3">
            </div>
          </div>
          <script>
            var slideIndex = 0;
            carousel();
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > x.length) {slideIndex = 1}    
              x[slideIndex-1].style.display = "block";  
              setTimeout(carousel, 2000); 
            }
          </script>
        </blockquote>
          
        <div class="outer-panel">
  <div class="inner-panel">
    <h1>Steps for Growing Agricultural Crops</h1>
   
    <h4>Step 1: Choose the Right Crop</h4>
    <p>Choose crops based on your climate, soil type, and market demand. Research local agricultural extension services for recommendations.</p>
    
    <h4>Step 2: Prepare the Soil</h4>
    <p>Test your soil to determine its pH and nutrient levels. Till the soil to break up compaction and add organic matter such as compost or manure.</p>
    
    <h4>Step 3: Planting</h4>
    <p>Follow recommended planting dates and spacing for your chosen crops. Ensure seeds are planted at the correct depth and water thoroughly after planting.</p>
    
    <h4>Step 4: Irrigation and Watering</h4>
    <p>Establish a reliable irrigation system to provide consistent moisture to your crops. Monitor soil moisture levels and adjust watering frequency accordingly.</p>
  </div>
</div>
 
        
        <div class="container-fluid padding-32 theme-d1">
          <h1>Places to Visit</h1>
        </div>
        
        <class="row-padding theme">
        <a href="agrisystem.html">
          <div class="col-sm-4 section">
            <div class="card-4">
            
              <img src="agri4.jpg" style="width:100%">
              <div class="container white">
                <h4>Strengthening the Indian</h4>
                <h4>Agriculture ecosystem</h4>
              </div>
            </div>
          </div>
          </a>
          <div class="col-sm-4 section">
            <a href="agrisystem.html">
            <div class="card-4">
              <img src="agri7.jpg" style="width:100%">
              <div class="container white">
                <h4>Modern Agricultural techniques</h4>
              </div>
            </div>
          </div>
          </a>
        
          <div class="col-sm-4 section">
            <a href="agrisystem.html">
            <div class="card-4">
              <img src="agri6.jpg" style="width:100%">
              <div class="container white">
                <h4>Agricultural Innovation</h4>
              </div>
            </div>
          </div>
          </a>
        </div>
      
        
      </div>
    </div>
  </div>
 
  <style>
    .thumbnail {
      height: auto;
      overflow: hidden;
    }

    .thumbnail img {
      height: 200px;
      width: auto;
      display: block;
      margin: 0 auto;
    }

    .caption {
      padding: 20px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Products</h2>
  <div class="row">

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="fertilizer1.jpg" alt="Product 1">
        <div class="caption">
          <h3>NPK 20:20:20</h3>
          <p>Description :</p>
          <p>Price: ₹400</p>
          <div class="form-group">
            <label for="quantityProduct1">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct1" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(1)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(1)">Buy Now</button>
        </div>
      </div>
    </div>

 
    <div class="col-md-2">
      <div class="thumbnail">
        <img src="fertilizer2.jpg" alt="Product 2">
        <div class="caption">
          <h3>Active 13:00</h3>
          <p>Description :p>
          <p>Price: ₹300</p>
          <div class="form-group">
            <label for="quantityProduct2">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct2" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(2)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(2)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="fertilizer3.jpg" alt="Product 3">
        <div class="caption">
          <h3>plantic flower</h3>
          <p>Description :p>
          <p>Price: ₹500</p>
          <div class="form-group">
            <label for="quantityProduct3">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct3" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(3)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(3)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="fertilizer4.jpg" alt="Product 4">
        <div class="caption">
          <h3>compo fert</h3>
          <p>Description:</p>
          <p>Price: ₹404</p>
          <div class="form-group">
            <label for="quantityProduct4">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct4" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(4)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(4)">Buy Now</button>
        </div>
      </div>
    </div>

  
    <div class="col-md-2">
      <div class="thumbnail">
        <img src="gardening1.jpg" alt="Product 5">
        <div class="caption">
          <h3>planting tools</h3>
          <p>Description :</p>
          <p>Price: ₹450</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(5)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(5)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="gardening2.jpg" alt="Product 5">
        <div class="caption">
          <h3>gardening tools</h3>
          <p>Description :p>
          <p>Price: ₹550</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(6)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(6)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="gardening3.jpg" alt="Product 5">
        <div class="caption">
          <h3>Agriculture tools</h3>
          <p>Description :</p>
          <p>Price: ₹460</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(7)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(7)">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="thumbnail">
        <img src="gardening4.jpg" alt="Product 5">
        <div class="caption">
          <h3>Agri tools</h3>
          <p>Description :</p>
          <p>Price: ₹460</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(7)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(7)">Buy Now</button>
        </div>
      </div>
    </div>
  
    <div class="col-md-2">
      <div class="thumbnail">
        <img src="irrigation1.jpg" alt="Product 5">
        <div class="caption">
          <h3>irrigation system</h3>
          <p>Description :</p>
          <p>Price: ₹560</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(8)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(8)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="irrigation2.jpg" alt="Product 5">
        <div class="caption">
          <h3>Flying irrigation</h3>
          <p>Description :</p>
          <p>Price: ₹700</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(9)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(9)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="irrigation3.jpg" alt="Product 5">
        <div class="caption">
          <h3>planting system</h3>
          <p>Description:</p>
          <p>Price: ₹470</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(10)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(10)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="irrigation4.jpg" alt="Product 5">
        <div class="caption">
          <h3>water spring</h3>
          <p>Description :p>
          <p>Price: ₹630</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(11)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(11)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="organic1.jpg" alt="Product 5">
        <div class="caption">
          <h3>vegetables seeds</h3>
          <p>Description </p>
          <p>Price: ₹300</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(12)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(12)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="organic2.jpg" alt="Product 5">
        <div class="caption">
          <h3>farm sokart</h3>
          <p>Description :</p>
          <p>Price: ₹580</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(13)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(13)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="organic3.jpg" alt="Product 5">
        <div class="caption">
          <h3>ugaoo organic</h3>
          <p>Description :</p>
          <p>Price: ₹490</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(14)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(14)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="organic4.jpg" alt="Product 5">
        <div class="caption">
          <h3>beetroot seeds</h3>
          <p>Description :p>
          <p>Price: ₹550</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(15)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(15)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="pestcontrol1.jpg" alt="Product 5">
        <div class="caption">
          <h3>pest control</h3>
          <p>Description:</p>
          <p>Price: ₹540</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(16)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(16)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="pestcontrol2.jpg" alt="Product 5">
        <div class="caption">
          <h3>miticide fert</h3>
          <p>Description :</p>
          <p>Price: ₹800</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(17)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(17)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="pestcontrol3.jpg" alt="Product 5">
        <div class="caption">
          <h3>insect pesticide</h3>
          <p>Description :</p>
          <p>Price: ₹670</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(18)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(18)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="pestcontrol4.jpg" alt="Product 5">
        <div class="caption">
          <h3>solemon seeds</h3>
          <p>Description :</p>
          <p>Price: ₹595</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(19)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(19)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="plantcare1.jpg" alt="Product 5">
        <div class="caption">
          <h3>plant caring </h3>
          <p>Description :</p>
          <p>Price: ₹5400</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(20)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(20)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="plantcare2.jpg" alt="Product 5">
        <div class="caption">
          <h3>vermicompost organic</h3>
          <p>Description :</p>
          <p>Price: ₹860</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(21)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(21)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="plantcare3.jpg" alt="Product 5">
        <div class="caption">
          <h3>plant care</h3>
          <p>Description :</p>
          <p>Price: ₹768</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(22)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(22)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="plantcare4.jpg" alt="Product 5">
        <div class="caption">
          <h3>plant tonic</h3>
          <p> good growth</p>
          <p>Price: ₹568</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(23)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(23)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="seed1.jpg" alt="Product 5">
        <div class="caption">
          <h3>corn seeds</h3>
          <p>best quality  </p>
          <p>Price: ₹567</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(24)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(24)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="seed2.jpg" alt="Product 5">
        <div class="caption">
          <h3>aadhya cotton</h3>
          <p>high quality cotton seeds</p>
          <p>Price: ₹786</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(25)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(25)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="seed3.jpg" alt="Product 5">
        <div class="caption">
          <h3>ellorn seed </h3>
          <p>seeds for good growth</p>
          <p>Price: ₹675</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(26)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(26)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="seed4.jpg" alt="Product 5">
        <div class="caption">
          <h3>ellorn chilly</h3>
          <p>green and good quality </p>
          <p>Price: ₹459</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(27)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(27)">Buy Now</button>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="thumbnail">
        <img src="fertilizer3.jpg" alt="Product 5">
        <div class="caption">
          <h3>organic flower </h3>
          <p>natural and organic flower</p>
          <p>Price: ₹754</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(28)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(28)">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="col-md-2">
      <div class="thumbnail">
        <img src="pestcontrol2.jpg" alt="Product 5">
        <div class="caption">
          <h3>miticide tonic</h3>
          <p>for best quality pesticides </p>
          <p>Price: ₹420</p>
          <div class="form-group">
            <label for="quantityProduct5">Quantity:</label>
            <input type="number" class="form-control" id="quantityProduct5" value="1">
          </div>
          <button class="btn btn-primary btn-block" onclick="submitForm(29)">Add to Cart</button>
          <button class="btn btn-success btn-block" onclick="redirectToCheckout(29)">Buy Now</button>
        </div>
      </div>
    </div>


   






<!-- Add the hidden form -->
<form id="addToCartForm" action="addToCart.php" method="post" style="display: none;">
  <input type="hidden" id="productIdField" name="productId" value="">
</form>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function submitForm(productId) {
    // Set the value of the hidden form field to the product ID
    document.getElementById("productIdField").value = productId;
    // Submit the form
    document.getElementById("addToCartForm").submit();
  }

  function redirectToCheckout(productId) {
    // Redirect to checkout page with product ID (if needed)
    window.location.href = 'checkout.html?productId=' + productId;
  }
</script>

<footer>
        <p style="text-align: center;">&copy; 2024 Gardening Supplies Store. All rights are reserved.</p>
    </footer>
</body>
</html>
