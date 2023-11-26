
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <title>Pet Care Treasury</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    body{
        background: #E3EADF ;
    }    

.navbar {
  width: 100%;
  background-color: #E3EADF;
  overflow: auto;
  position: relative;
  opacity: 0.7;
  
  
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 15px 165px;
  color: #000;
  text-decoration: none;
  font-size: 17px;
  transition: text-decoration 0.3s;
  
}

/* Navbar links on mouse-over */
.navbar a:hover {
  text-decoration: underline;
  background-color: transparent;
}

  
  .slideshow {
    position: relative;
    height: 600px;
    width: 100%;
    overflow: hidden;
    
  }

  .slideshow img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 800px;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  .slideshow img.active {
    opacity: 1;
  }
  
   .content {
            display: flex; /* Use flexbox to create a layout with two columns */
            position: relative;
            top: 10px;
            right: 10px;
            left: 80px;
            align-items: center; /* Vertically center content */
            justify-content: space-between; /* Create space between columns */
            padding: 20px; /* Add padding to the content */
        }

        .desc {
            align-items: center;
            border: 2px solid #7AB598;
            height: 375px;
            width: 95%; /* Adjust the width as needed */
            border-radius: 20px;
            background-color: #FFFFFF;
            display: flex; /* Use flexbox to align image and text vertically */
        }

        .desc-img {
            flex: 1; /* Let the image take up available space */
            padding: 0px; /* Add padding to the image container */
            
        }

        .desc-img img {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            max-width: 100%; /* Ensure the image doesn't exceed its container */
            max-height: 100%; /* Ensure the image doesn't exceed its container */
        }

        .desc-text {
            flex: 1; /* Let the text take up available space */
            padding: 20px; /* Add padding to the text container */
        }

        h3 {
            margin-top: 0; /* Remove margin from the heading */
        }
        
    .button {
            border-radius: 20px;
            background-color: #7AB598;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 150px;
            height:50px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: -670px;
            right: 370px;
            
}

    .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
}

    .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
}

    .button:hover span {
            padding-right: 25px;
}

    .button:hover span:after {
            opacity: 1;
            right: 0;
}

.button-location2 {
            border-radius: 20px;
            background-color: #7AB598;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 150px;
            height:50px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: -1100px;
            right: 370px;
            
}

    .button-location2 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
}

    .button-location2 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
}

    .button-location2:hover span {
            padding-right: 25px;
}

    .button-location2:hover span:after {
            opacity: 1;
            right: 0;
}
    .button-location3 {
            border-radius: 20px;
            background-color: #7AB598;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 150px;
            height:50px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: -1550px;
            right: 370px;
            
}

    .button-location3 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
}

    .button-location3 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
}

    .button-location3:hover span {
            padding-right: 25px;
}

    .button-location3:hover span:after {
            opacity: 1;
            right: 0;
            
}
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  display: flex; /* Use flexbox to align elements */
  align-items: center; /* Center items vertically */
  justify-content: center; /* Center items horizontally */
  border: 1px solid #ccc;
  padding: 10px;
  margin: 10px;
  background-color:#94B395;
  
}

  .avatar {
    display: flex; /* Use flexbox to align avatar and text vertically */
    align-items: center; /* Center items vertically */
    margin-right: 10px; /* Adjust spacing between avatars */
  }

  /* Style for the image */
  .avatar img {
    width: 50px; /* Adjust the width of the avatars */
    height: auto; /* Maintain the aspect ratio */
    margin-right: 5px; 

}
  
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
  flex:1;

}

.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #7AB598;
   color: white;

}

.fa {
  
  padding: 25px;
  font-size: 20px;
  text-decoration: none;
  margin:10px;
 
  }

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.footer .social-icon{
    margin-left:80px;
    
}

/* Add modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 10px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}


</style>

 </head>


<body>

<center>
        <img src="logo4.png" width="800" height="200">
</center>
    
<div class="navbar">
    
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#" id="contactBtn"><i class="fa fa-fw fa-envelope"></i>Contact</a>
  <a href="userloginpage.php"><i class="fa fa-fw fa-user"></i> Log in</a>
</div>

    
    <div class="slideshow">
            <img src="dog9.jpg" class="active">
            <img src="dog2.jpg">
            <img src="dog6.jpg">
    </div>
    <br>
     <br>
      <br>
       <br>
       
<marquee width="100%" direction="right" height="50px" style="font-family: Lucida Handwriting, sans-serif; color: #7AB598; font-size: 30px;">
    Purchase Now
</marquee>

    <div class="content">
        <center>
        <div class="desc">
            <div class="desc-img">
                <img src="dogfood1.jpg" width="600" height="375">
                
            </div>
            <div class="desc-text">
                <h3>Dog Food</h3>
                <p>Delicious and nutritious dog food crafted with love to keep your furry friend happy,</p>
                <p>healthy, and tail-waggingly satisfied.<p>
            </div>
            
        </div>
    <br>
     <br>
      <br>
      
        <div class="desc">
            <div class="desc-img">
                <img src="dogtoy1.jpg" width="600" height="375">
        
            </div>
            <div class="desc-text">
                 <h3>Dog Toys</h3>
                 <p>Inspire playtime joy for your canine companion with our diverse range of durable and</p>
                 <p>entertaining dog toys designed to keep them active, engaged, and endlessly delighted.</p>
            </div>
            
        </div>
    <br>
     <br>
      <br>
      
       <div class="desc">
            <div class="desc-img">
                <img src="dogcollar1.jpg" width="600" height="375">
                
            </div>
            <div class="desc-text">
                 <h3>Dog Accessories </h3>
                 <p>Elevate your pup's style and comfort with our curated collection of dog accessories</p>
                 <p>featuring everything from fashionable collars to cozy beds – because every dog deserves the best!</p>
            </div>
           
        </div>
    <br>
     <br>
      <br>
            
        </center>
        
    </div>
    <h2></h2>

<a href="viewcatalogue.php"><button class="button"><span>View Catalogue! </span></button></a>
<a href="viewcatalogue.php"><button class="button button-location2"><span>View Catalogue! </span></button></a>
<a href="viewcatalogue.php"><button class="button button-location3"><span>View Catalogue! </span></button></a>
 
    
<h1 style="font-family:Lucida Handwriting;color:#7AB598;">Our Respectable Partners!</h1>


<div class="card">
    <div class="avatar">
    <img src="royalcanin.png" alt="Avatar" style ="width:50%">
    <div class="container">
        <h4><b> Royal Canin</b></h4>
    </div>
</div>
    
    <div class="avatar">
    <img src="fi.png" alt="Avatar" style ="width:50%">
    <div class="container">
        <h4><b> Fi</b></h4>
    </div>
</div>
    
    <div class="avatar">
    <img src="earthbath.png" alt="Avatar" style ="width:50%">
    <div class="container">
        <h4><b> Earth Bath</b></h4>
    </div>
</div>
    

</div>
</div>
<br>

<div class="footer">
    <br>
  <h2 style= "font-family:Lucida Handwriting; margin-left:80px">Contact us</h2>

  <div class="social-icon">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>

  </div>
  <br> 
<h2 style= "font-family:Lucida Handwriting; margin-left:80px">Quick links</h2>
<a href="Tnc.php" style="margin-left:80px; font-size:20px"> Terms and condition</a>
<br>
<br>
<a href="refundpolicy.php" style="margin-left:80px; font-size:20px"> Refund Policy</a>
</div>


<!-- Modal structure -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <p><i class="fa fa-fw fa-envelope"></i>:  petcaretreasury@hotmail.com</p>
        <p><i class="fa fa-fw fa-phone"></i>: 012-4379651</p>
    </div>
</div>



    <script>
function myFunction(x) {
  x.classList.toggle("change");
}

 // Change image every 3 seconds
      setInterval(function() {
        var current = $('.slideshow img.active');
        var next = current.next();

        // If we reached the end of the slideshow, start over from the beginning
        if (next.length === 0) {
          next = $('.slideshow img').first();
        }

        current.removeClass('active');
        next.addClass('active');
      }, 2000);
      
      
      document.getElementById('contactBtn').addEventListener('click', function() {
    document.getElementById('myModal').style.display = 'block';
});

document.getElementById('closeModalBtn').addEventListener('click', function() {
    document.getElementById('myModal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target === document.getElementById('myModal')) {
        document.getElementById('myModal').style.display = 'none';
    }
});

</script>



</body>
</html>
