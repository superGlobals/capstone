<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <title>NEUST POC - LMS</title>
   <link rel="icon" type="image/gif/jpg" href="poclogo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/036572db4c.js" crossorigin="anonymous"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  min-height: 100vh;
 /* font-family: poppins;
  background: url(poclogo1.png) no-repeat;
  background-size: 30%;
  background-position: left;
  height: calc(100vh);*/
}
nav{
  background: #374c9d;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #ffcb01;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  body{
    background-position: center;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
.home-content .content h1{
  font-size: 45px;
  margin-left: 35%;
  margin-top: 150px;
}

.home-content .content p{
  font-size: 20px;
  margin-left: 35%;
}

.home-content .about-content h1{
  font-size: 40px;
  margin-left: 38%;
  margin-top: 25px;
}

.home-content .about-content h5{
  margin-left: 50%;
  margin-top: 15px;
}

.home-content .about-content p{
  margin-left: 32%;
  margin-top: 15px;
}

.footer{
 position: sticky;
 top: 100%;
 height: 40px;
 background-color: #232b2b;
 color: gray;
 text-align: center;
 padding-top: 10px;

}

.developers-content img{
  width: 150px;
  clip-path: circle();
  margin-top: 20px;
  margin-left: 50px;
}

.developers-content  p{
  margin-left: 50px;

}

    </style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
     <!-- <label class="logo">POC - LMS</label> -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="system_developer.php">System Developer</a></li>
        <li><a href="login_page.php">Login</a></li>
      </ul>
    </nav>
    <section class="home-content">
       <div class="developers-content" style="display: inline-block;">
        <center>
          <img id="developers" src="admin/img/edward1.jpg" class="img-circle">
                    <hr style="width: 280px;  margin-left: 50px; margin-bottom: 20px;">
                    <p>Name: Edward A. Aguilar</p>
                    <p>Address: Penaranda Nueva Ecija</p>
                    <p>Email: aguilaredward722@gmail.com</p>
                    <p>Position: Programmer</p> 
        </center>
      </div>
      <div class="developers-content" style="display: inline-block;">
          <center>
          <img id="developers" src="admin/img/edward1.jpg" class="img-circle">
                    <hr style="width: 280px; margin-left: 50px; margin-bottom: 20px;">
                    <p>Name: Edward A. Aguilar</p>
                    <p>Address: Penaranda Nueva Ecija</p>
                    <p>Email: aguilaredward722@gmail.com</p>
                    <p>Position: Programmer</p> 
          </center>
      </div>

       <div class="developers-content" style="display: inline-block;">
          <center>
          <img id="developers" src="admin/img/edward1.jpg" class="img-circle">
                    <hr style="width: 280px; margin-left: 50px; margin-bottom: 20px;">
                    <p>Name: Edward A. Aguilar</p>
                    <p>Address: Penaranda Nueva Ecija</p>
                    <p>Email: aguilaredward722@gmail.com</p>
                    <p>Position: Programmer</p> 
          </center>
      </div>

       <div class="developers-content" style="display: inline-block;">
          <center>
          <img id="developers" src="admin/img/edward1.jpg" class="img-circle">
                    <hr style="width: 280px; margin-left: 50px; margin-bottom: 20px;">
                    <p>Name: Edward A. Aguilar</p>
                    <p>Address: Penaranda Nueva Ecija</p>
                    <p>Email: aguilaredward722@gmail.com</p>
                    <p>Position: Programmer</p> 
          </center>
      </div>

       <div class="developers-content" style="display: inline-block; ">
          <center>
          <img id="developers" src="admin/img/edward1.jpg" class="img-circle">
                    <hr style="width: 280px; margin-left: 50px; margin-bottom: 20px;">
                    <p>Name: Edward A. Aguilar</p>
                    <p>Address: Penaranda Nueva Ecija</p>
                    <p>Email: aguilaredward722@gmail.com</p>
                    <p>Position: Programmer</p> 
          </center>
      </div>


    </section>
     <div class="footer">
         <span>Copyright &copy; NEUST-POC LMS 2021</span>
      </div>

    
  </body>
</html>