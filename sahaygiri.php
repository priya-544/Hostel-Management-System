<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahaygiri Hostel</title>
    
    <style>*{
   margin:0;
   padding: 0; 
}
.header{
   min-height: 40vh;
   width: 100%;
  
   background-position: center;
}
.icon{
   width: 98%;
   margin-top: 10px;
   margin-bottom: 20px;
}
.logo{
   color: rgb(20, 20, 133);
   font-size: 35px;
   font-family: Arial;
   display: inline;
   position: relative;top: -120px;
   
}
.logo1{
   color: black;
   font-size: 20px;
   text-align: center;
   position: relative;top: -100px;right: 320px;
}
nav{
   display: flex;
   padding: 1% 6%;
   float: left;
   width: 88%;
   justify-content: center;
   align-content: center;
   position: relative;top: -110px;
   background-color: rgb(20, 20, 133);
   margin-top: 0%;
}
.navbar {
   font-family: Arial, Helvetica, sans-serif;
   justify-content: center;
   align-items: center;
 }
 
 .navbar a {
   float: left;
   font-size: 20px;
   font-weight: bold;
   color: white;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
 }
 
 .dropdown {
   float: left;
   overflow: hidden;
 }
 

 
 .navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
   color: #ff7200;
 }
 
 

.box{
   display: flex;
   padding-left: 10px;
   padding-top: -20px;
}



.toggle-button{
   margin:0;
   padding:0;
   list-style: none;
   text-decoration: none;
}

.sidebar{
   left:0px;
   width: 250px;
   height: 100%;
   background: rgb(125, 184, 236);
   margin-top: -109px;
   margin-left: -11+px;
}

.sidebar header{
   font-size: 22px;
   color : black;
   text-align:center;
   line-height: 70px;
   background: white;
   user-select: none;
}
.sidebar ul a{
   display: block;
   height:100%;
   width:100%;
   line-height: 65px;
   font-size:20px;
   color:black;
   padding-left:40px;
   box-sizing: border-box;
   border-top: 1px solid black;
   border-bottom: 1px solid black;
}

ul li:hover a{
   padding-left:30px;
}

.sidebar ul a i{
   margin-right:16px;

}
.four h1{
   text-align: center;
   font-size: 30px;
}
 
.five{
   font-size: 20px;
   font-family: sans-serif;
   margin-top: 15px;
}

.info{
   margin-left: 50px;
   margin-top: -50px;
}
.center{
    margin-left: auto;
  margin-right: auto; 
  font-size: 20px;
}
.tableinfo{
   margin-top: 20px;
}

table tbody td{
   width: 25%;
   border: 1px solid black;
   border-collapse: collapse;
   margin-top: 10px;
}
tbody td{
   padding: 10px;
}
table#alter td:nth-child(even){
   background-color: #eee;
}
table#alter td:nth-child(odd){
   background-color: #fff;
}
table#alter tbody{
   color: white;
   background-color: gray;
} 
h1{
   font-size: 20px;
   margin-top: 10px;
}
.course{
   width: 80%;
   margin: auto;
   text-align: center;
   padding-top: 100px;
}
.one{
   font-size: 20px;
   font-weight: 300;
   line-height: 22px;
   padding: 10px;
}
.show{
   display: block;
}
.row2{
   margin-top: 5%;
   text-align: center;
   display: inline-block;
   justify-content: space-between;
   max-width: 100%;}
   .gallery{
      width: 900px;
      display: flex;
      overflow: scroll;
  }
  .gallery div{
      width: 110%;
      height: 100%;
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap: 20px;
      padding: 10px;
      flex: none;
  }
  .gallery div img{
      width: 200px;
      transition: transform 0.5s;
  }
  .gallery::-webkit-scrollbar{
      display: none;
  }
  .gallery-wrap{
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10% auto;
      width: 60%;
  }
  .prev,
  .next{
      width: 50px;
      cursor: pointer;
      margin: 40px;
  }
  .gallery div img:hover{
      cursor: pointer;
      transform: scale(1.1)
  }
  .on1{
  text-align: center;
  font-size: 45px;
  font-weight: 600;
  position: relative;top: 80px;
}
</style>
</head>
<body>
    <div>
    <section class="header">
        <div class="icon">
            <a href="index.html"><img src="images/dbatu logo.png" alt="" " width="150px"></a>
            <h2 class="logo">Dr. Babasaheb Ambedkar Technological university, Lonere</h2>
            <h3 class="logo1">डॉ. बाबासाहेब आंबेडकर तंत्रशास्त्र विद्यापीठ
                <br><br>Lonere, Tal-Mangaon, Dist-Raigad (M.S.), India<br><br>
            </h3>
        </div>
    </section>
    <nav>
        <div class="navbar">
            <a href="first_page.php">HOME</a>
            <a href="admin_login.php"> LOGIN</a>
            </div>
            </nav>
            </div>
<div class="box">
  <div class="two">
    <script scr="https://kit.fontawesome.com/yourcode.js"></script>
    <div class="sidebar">
        <header></header>
        <ul>
            <li><a href="first_page.php"><i class="fas fa-link"></i>home</a></li>
            <li><a href="register.php"><i class="fas fa-link"></i>register</a></li>
            <li><a href="#"><i class="fas fa-link"></i>college entry</a></li>
            <li><a href="#"><i class="fas fa-link"></i> phata entry</a></li>
            <li><a href="#"><i class="fas fa-link"></i> home entry</a></li>
            <li><a href="about.php"><i class="fas fa-link"></i> about us</a></li>
        </ul>
    </div>
    </div>
<div class="info">
    <div class="four">
        <h1> Sahaygiri hostel</h1></div>
    <div class="five">
        <p> The university provides septate hostel for girls and boys, this hostel consists of third year and fourth year . Basics facilities like security, electricity, water supply, internet,etc are provided in the hostel.
            There Are various Facilities provided from the university to the hostel, As being under the government hostel and well maintained and with well security. </p>
    </div>
    <div class="tableinfo">
        <p><h2>Fee Structure</h2></p>
            <table class="center">
                <tbody>
                    <tr>
                        <td width="67"><strong>Sr.no</strong></td>
                        <td width="189"><strong>Details of fees</strong></td>
                        <td width="179"><strong>For open/ Obc Students</strong></td>
                        <td width="189"><strong>SC,ST,VJ,NT, & SBC Students</strong></td>
                    </tr>
                    <tr>
                        <td width="67">1</td>
                        <td width="189">Hostel Fees</td>
                        <td width="179">Rs.4000/-</td>
                        <td width="189">Rs.2000/-</td>
                    </tr>
                    <tr>
                        <td width="67">2</td>
                        <td width="189">Water Charges</td>
                        <td width="179">Rs.1000/-</td>
                        <td width="189">Rs.1000/-</td>
                    </tr>
                    <tr>
                        <td width="67">3</td>
                        <td width="189">Electricity Charges</td>
                        <td width="179">Rs.3000/-</td>
                        <td width="189">Rs.3000/-</td>
                    </tr>
                    <tr>
                        <td colspan="4" width="623">
                            <p style="text-align: left;">ADVANCE:</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="67">1</td>
                        <td width="189">Caution Money Deposit</td>
                        <td width="179">Rs.1000/-</td>
                        <td width="189">Rs.1000/-</td>
                    </tr>
                    <tr>
                        <td colspan="2" width="256">
                            <strong>Total Rs.</strong>
                        </td>
                        <td width="179">
                            <strong>Rs. 9000</strong>
                        </td>
                        <td width="189">
                            <strong>Rs. 7000</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h1>Mess fee for 2022-23 is Rs. 40000/- Per student per academic year. (Rs.30,000/- as first installment and 10,000/- as second installment ) This mess amount may vary from year to year.</h1>
    </div>
</div>
</div>
<section class="course">
    <h1 id="course1">Facilities We Offer</h1>
    <p class="one">Hostel with well maintain and Secure Facilities</p>
    <div class="row2">
        <div class="fac-row">
            <img src="images/hostel-icon-simple-line-element-hostel-symbol-templates-web-design-infographics-hostel-icon-simple-line-element-hostel-212971850.jpg" alt="" height="260px" width="260px">
            <img src="images/spoon-fork-plate-vector-icon-symbol-illustration-restaurant-logo-design_445285-408.jpg" alt=""height="260px" width="260px">
            <img src="images/wifi-icon-in-flat-style-black-color-white-background.jpg" alt="" width="240px" height="240px">
            <img src="images/800px_COLOURBOX30267380.jpg" alt=""height="240px" width="240px">
        </div>
    </div>
</section>
<h1 class="on1">Gallery</h1>
        <div class="gallery-wrap">
        <a class="prev" onclick="plusSlides(-1)" id="backbtn">❮</a>
        <div class="gallery">
            <div>
                <span><img src="images/sah1.jpg" alt=""></span>
                <span><img src="images/sah2.jpg" alt=""></span>
                <span><img src="images/Sahyagiri-Hostel.png" alt=""></span>
            </div>
            <div>
                <span><img src="images/sah1.jpg" alt=""></span>
                <span><img src="images/sah45.jpg" alt=""></span>
            </div>
        </div>
        <a class="next" onclick="plusSlides(1)" id="nextbtn">❯</a>
        </div>
        
        <script>
            let scrollContainer = document.querySelector(".gallery")
            let backbtn = document.getElementById("backbtn");
            let nextbtn = document.getElementById("nextbtn");
    
            scrollContainer.addEventListener("wheel", (evt) => {
                evt.preventDefault();
                scrollContainer.scrollLeft += evt.deltaY;
                scrollContainer.style.scrollBehavior = "auto";
            });
            nextbtn.addEventListener("click", ()=>{
                scrollContainer.style.scrollBehavior = "smooth";
                scrollContainer.scrollLeft += 450;
            });
            backbtn.addEventListener("click", ()=>{
                scrollContainer.style.scrollBehavior = "smooth";
                scrollContainer.scrollLeft -= 450;
            });
    
            
        </script>
</script>
</body>
</html>