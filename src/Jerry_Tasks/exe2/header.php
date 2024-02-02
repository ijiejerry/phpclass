<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&display=swap" rel="stylesheet">
    <style>
      /* Add your CSS styles here */
      .rectangle{
        width: 100%;
        height: 800px;
        background-size: cover;
        background-image: url(./img/Rectangle.png); 
      
      }
      h1{
        font-size: 20px;
      }
      body {
        font-family: Arial, sans-serif;
      }
      .container {
        width: 90%;
        margin: auto;
        border: 1px solid red;}
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 10px;
      }
      .product {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
      }
      .flash img {
        width: 60%;
      }
      .flash {
          width: 372px;
          height: 580px;
   
      }
      .saveprice{
        width: 171px;
        height: 42px;
        background-color: #fdf301;
        border-radius: 20px;
        display: flex;
  justify-content: center; /* 水平居中 */
  align-items: center; /* 垂直居中 */
  font-size: 30px;
  font-family:'Times New Roman', Times, serif;
      }
      .mainproduct{

        width: 400px; height: 625px;
      }
      .mainproduct img{
        width: 361px; height:229px; 
      }
      .mainproducttitle{

font-weight: bold;font-size: 25px;letter-spacing: 0px;
}
.mainproductprice{
  width:176px;height: 110px;justify-content: center;   display: flex;
  font-size: 70px;color: white; background-color: #FFAD0C;margin-top: 10px; border-radius: 15px;
}
      /* Add more styles as needed */
    </style>
</head>
<body>

 <!-- The navigation start from this point.  -->
  <nav class="row align-content-center" id="nav">

    <!-- logo and the humburger menu -->

    <div class="col-lg-1 col-3 col-sm-1 d-flex justify-content-evenly ">
        <div class="menu-hum ">
               <div class="hmenu-line"></div> 
               <div  class="hmenu-line" ></div>
               <div  class="hmenu-line"></div>
        </div>
    </div>

    <div class="logo col-lg-3 col-5 col-sm-3"> ElectroHub</div> 

    <!-- adding icon form xsm screen size -->
    <div class="col-4 d-flex d-sm-none d-md-none d-lg-none d-xxl-none">
       
      
    <!-- logo and the humburger menu end  -->

    <!-- search box start from here  -->

    <div class="col-lg-3 col-10 col-sm-6 ">
         <div class="serach d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          
    </div>
    <!-- search box end -->

    <!-- nav menu start  -->
    <div class="col-lg-5  col justify-content-evenly  d-none d-sm-none d-md-none d-lg-flex align-content-center">
         <div class="navbar-menu d-flex">
            <p> Exe1</p>
            
         <div class="navbar-menu d-flex" >
            <p>Exe2</p>
         </div>
         <div class="navbar-menu d-flex">
            <p>Exe3</p>

         </div>
         <div class="navbar-menu d-flex">
            <p>link</p>
        
    </div>
    <!-- nav menu end  -->

    <!-- smaller screen nav menu  -->
    <div class="col-2  d-flex d-sm-flex d-md-flex d-lg-none d-xxl-none"> 
      
    <!-- smaller screen nav menu end  -->
    
  </nav>
<!-- Navigation bar end  -->

<!-- body code start -->


<div class="rectangle" >
 
</div>


        <!-- forth line of the body start  -->
 

        
<div class="container">
 
  <div class="header">
    <h1>Flash Sales</h1>
    <h1>Most Popular Products</h1>
    <h1>Selection from the Products</h1>
  </div>