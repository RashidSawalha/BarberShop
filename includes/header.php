     
     <nav >
        <div class="logo">
          <h1>AL Molok <span> BarberShop</span></h1>
          <img  id="logoImage" src="../includes/mustache (3).png" alt="" srcset="">
        </div>
        <ul >
          <li><a href="../Home/index.php">Home</a></li>
          <li><a href="../About_Us/about.php"">About</a></li>
          <li><a href="../OurService/ourService.php">Services</a></li>
          <!-- <li><a href="#Features">Features</a></li>
          <li><a href="Team">Team</a></li> -->
          <li><a href="../Reviews/review.php">Reviews</a></li>
          <div class="button">
            <li>
              <i class="fa-solid fa-right-to-bracket"></i>
              <a href="../loginPage/loginpage.php">log in</a>
            </li>
          </div>
        </ul>

        <!-- <div clafffss="icons">
          <i class="fa-solid fa-heart"></i>
          <i class="fa-solid fa-cart-shopping"></i>
          <i class="fa-solid fa-user"></i>
        </div> -->
      </nav>
    <style>
      nav .logo{
    font-size: 1rem;
    width: 25%;
    text-align: center;
    display: flex;
    flex-direction: row-reverse;
    word-spacing: 1px;
    white-space: nowrap;
    align-items: center;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}


html{
    scroll-behavior: smooth;
}

header{

    width: 100%;
    height: 100vh;
    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;
}

nav{
    width: 100%;
    height: 13vh;
   /*  background: radial-gradient(rgb(255, 233, 233),#ab8f52); */
    color:white;
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-transform: uppercase;
    position: fixed;
/*     border: 1px solid black;
 */    z-index: 100;
}


nav .logo{
    font-size: 1rem;
    width: 25%;
    text-align: center;
    display: flex;
    flex-direction: row-reverse;
    word-spacing: 1px;
    white-space: nowrap;
    align-items: center;
}
nav .logo i{
    margin-right:5px ;
    font-size: 30px;
}
nav ul{
    list-style: none;
    display: inline-flex;
    justify-content: space-between;
    width: 50%;

}
nav ul li a{
    color:white;
    font-size: 1.2rem;
    text-decoration: none;
    font-weight: bold;

}
nav ul li a:hover{
    color:#ab8f52;

}
nav.sticky{
    pakdding: 5px 100px;
    background: #fff;
    border: 1px #ab8f52 solid;
    color:#000;
}
nav.sticky  ul li a{
    color:black;
}
nav.sticky  ul li a:hover{
    color:#ab8f52;
}
nav.sticky  .logo h1{
    color:black;
}
section{
    padding-left: 50px;
}

 header main{
    width: 100%;
    height: 85vh;
    display: flex;
    flex-direction: row;  
    justify-content: flex-start;
    align-content:center ;
    align-items: center;
    padding-top: 15%;
    
   
}
nav .logo h1:hover{
  color:#ab8f52;
}
      </style>
       

       <script type="text/javascript">
      window.addEventListener("scroll", function () {
        var header = document.querySelector("nav");
        header.classList.toggle("sticky", window.scrollY > 0);
        var img = document.getElementById("logoImage");
        img.src = "../includes/mustache (5).png";


      });
    </script>     
      
