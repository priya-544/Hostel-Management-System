<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Website</title>
    <link rel="stylesheet" href="static/css/index.css">
    <style>
        *{
    margin: 0;
    padding: 0;
}
/* .header{
    min-height: 100vh;
    width: 100%;
    /* background-color: rgb(241, 237, 249);
    background-position: center; 
} */
.icon{
    width: 100%;
    display:flex;
    margin-top: 10px;
    margin-bottom: 20px;
}
.logo{
    color: rgb(20, 20, 133);
    font-size: 32px;
    font-family: Arial;
    display: inline;
    /* position: relative; */
    /* top: -150px; */
}
.logo1{
    color: black;
    font-size: 20px;
    display: inline;
}
.hostel{
    background-color: rgb(20, 20, 133);
    color: white;
    padding: 2% 2%;
    text-align: center;
    font-size: 25px;
   
}
.hs1{
    margin-top: 20px;
    text-align: center;
    font-size: 30px;
    margin-bottom: 10px;
}
.row{
    max-width: 100%;
    
    text-align: center;
    display: flex;
    margin-left: 5%;
    margin-right: 5%;
}
.hostel-col , .hostel-col1{
    width: 10%;
    height: 350px;
    flex-basis: 30%;
    background: rgb(210, 210, 213);
    border-radius: 10px;
    padding: 7px 7px;
    box-sizing: border-box;
    transition: 0.5s;
}
.hostel-col{
    margin-bottom: 10px;
    margin-left: 2%;
    margin-right: 2%;
}
.hostel-col1{
    margin-top: 10px;
    margin-left: 5%;
}
.row1{
    text-align: center;
    display: flex;
    justify-content:center;
    margin-left: -5%;
    margin-bottom: 3%;

}
.hostel-col img{
    height: 80%;
    width: 100%;
    border-radius: 10px;
}
.hostel-col1 img{
    height: 80%;
    width: 100%;
    border-radius: 10px;
}

footer{
    box-sizing: border-box;
    background-color: rgb(20, 20, 133);
    height: auto;
    padding-top: 40px;
    color: #ffffff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 600px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 16px;
}
.social{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
    color: #fff;
}
.social li{
    margin: 0 10px;
}
.socials li a i{
    text-decoration: none;
    color: #fff;
}
.social a i{
    font-size: 1.5rem;
    transition: color .4s ease;
}
.social a:hover i{
    color: aqua;
}
.footer-bottom{
    /* background-color: #000; */
    padding: 20px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 16px;
    word-spacing: 2px;
    text-transform: capitalize;
}

    </style>
</head>
<body>
    <section class="header">
        <div class="icon">
            <div class="img"> <a href="index.html"><img src="images/dbatu logo.png" alt="" width="150px"></a></div>
            <div class="info"> <h2 class="logo">Dr. Babasaheb Ambedkar Technological university, Lonere</h2><br><br>
            <h3 class="logo1">डॉ. बाबासाहेब आंबेडकर तंत्रशास्त्र विद्यापीठ
                <br><br>Lonere, Tal-Mangaon, Dist-Raigad (M.S.), India<br><br>
            </h3>
        </div>
        </div>
        <div class="hostel">
            <h1>University Hostels</h1>
        </div>
        <div class="hs1">Girls Hostel</div>
        <div class="row">
            <div class="hostel-col">
                <img src="images/Dhavalgiri (1).png">
                <a href="dhavalgiri.php"><h3>Dhavalgiri hostel</h3></a>
                <p>This hostel is for First year and Second year Degree students.</p>
            </div>
            <div class="hostel-col">
                <img src="images/Malaygiri-Hostel.png">
                <a href="malyagiri.php"><h3>Malayagiri hostel</h3></a>
                <p>This hostel is for Third year and Final year Degree students.</p>
            </div>
            <div class="hostel-col">
                <img src="images/Alkananda-Hostel (1).png" alt="">
                <a href="alakanda.php"><h3>Alkanada hostel</h3></a>
                <p>This hostel is for First year, Second year and Third year Diploma students.
                </p>
            </div> 
        </div>
        <hr style="background-color: black;">
        <div class="hs1">Boys Hostel</div>
        <div class="row1">
            <div class="hostel-col1">
                <img src="images/Sahyagiri-Hostel.png" >
                <a href="sahaygiri.php"><h3>Sahaygiri hostel</h3></a>
                <p>This hostel is for First year Degree students First year Diploma and Advanced Diploma in water quality management students.</p>
            </div>
            <div class="hostel-col1">
                <img src="images/Gagangiri-Hostel.png">
                <a href="gagangiri.php"><h3>Gagangiri hostel</h3></a>
                <p>This hostel is for Second year, Third year and Final year Degree students and Second year and Third year Diploma students.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <h3>Contact us</h3>
            <p>The Registrar
                Dr. Babasaheb Ambedkar Technological University,
               Lonere, Tal- Mangaon, Dist Raigad. Maharashtra (India). 402103
                Email: registrar@dbatu.ac.in
               </p>
               <ul class="social">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkendin-sqaure"></i></a></li>
               </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright @ 2023-24. All rights reserved</p>
        </div>
    </footer>
</body>
</html>