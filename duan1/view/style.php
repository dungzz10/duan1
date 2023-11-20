<style>
    *{
    font-family: 'Open Sans', sans-serif;
    
}
.mb{

margin-top: 100px;}

.div-form{
margin-top: 100px;

}
body{
    padding: 0;
    margin: 0;

   
}
.divdiv1{
    background-color: #fff;
    width: 100%;
    height: 100%;
    border: 2px slategray solid;
    
}
.divdiv2{
    background-color: #fff;
    width: 100%;
    height: 100%;
    border: 2px slategray solid;
    display: none;
}
.divdiv1 span{
    font-weight: bold;
    text-align: center;
    color: #000;
    display: block;
}
.divdiv1 img{
    margin-left: 140px;
    margin-top: 50px;
    
}


.div-1{
   
    position: relative;
}

.giohang-1{
    background-color: #000;
    width: 100%;
    right:  -600px;
    top: 139%;
    height: 500px;
    position: absolute;
    z-index: 5;
    opacity: 0;
   visibility: hidden;
   transition: all .5s;
   
 
}
.li-cn-1:hover .giohang-1{
    opacity: 1;
    visibility: visible;
    right:600px ;
}
.tronggh{
    background-color: rgb(150, 146, 146);
    width: 800px;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    border: 2px slategray solid;
    
}
.div-non-ban-1-1 img{
    width: 100%;
    border-bottom: 2px #ccc solid;
}
.div-non-ban-1-1{
    box-sizing: border-box;
    width: 15%;
    padding: 10px 20px 10px 20px;
    font-size: 10px;
    color: #fff;
    border: 2px rgb(196, 173, 173) solid;
   height: 50%;
   margin-left: 10px;
   margin-bottom: 5px;
   transition: all .5s;
}
.div-non-ban-1-1:hover {
    width: 17%;
    height:53% ;
}
.div-non-ban-1-1 h4{
   margin: 0;
   text-align:left;
   font-size: 9px;
}
.div-non-ban-1-1 p{
    margin: 5px;
    
    
 }
.div-non-ban-1-1 a{
    color: #fff;
    text-decoration: none;
}
.img-muatren2-1{
    
   
    position: relative;
    overflow: hidden;
}
.img-muatren2-1 .ti-shopping-cart{
    color: white;
    font-weight: bold;
    font-size: 15px;
}
.div-muatren2-1{
    cursor:pointer;
    text-align: center;
   padding: 10px 0 10px 0;
   width: 100%;
   top: 100%;
   
}



.menu{
     position: fixed;
    display: flex;
    justify-content: space-between;
    width: 100%;
    border-bottom: 2px #ccc solid;
    top: 0;
    left: 0;
    z-index: 3;  
    transition: all 1s ease-in-out;
    background-color: rgba(0, 0, 0, 0.9);
   
   
   
}
.gitieni{
    text-align: center;
    width: 800px;
    height: 50px;
    background-color: #333;
    display: block;
    padding-top: 20px;
    border: 2px slategray solid;
    font-weight: bold;
    position: relative;
  
}

    
    

.menu>a{
   margin:20px 0 15px 40px;
        color:white;
        text-decoration: none;
        font-weight: bold;
        font-size: 30px     ;
        
        
   
}
.ul-1{
    padding: 0;
    list-style: none;
}
.ul-1 li>a{
    color: white;
    text-decoration: none;
    word-spacing: 1px;
    letter-spacing: 1px;
    font-weight: bold;
  
}
.ul-2{
    padding: 0;
    list-style: none;
    margin-right: 100px;
   
   
}
.ul-2 li>a{
    color:white;
    text-decoration: none;
    margin-right: 15px;
    font-weight: bold;
}
.ul-1 li{
   display: inline-block;
   padding: 15px 20px 5px 20px;
}
.ul-2 li{
    display: inline-block;
    padding: 15px 5px 5px 10px;
    

 }
 .ul-2 i{
     color: white;
     font-size: 20px;
 }
 .back{
     margin-top: 70px;
    background-size: cover;
    display: block;
     width: 100%;
    height: 550px; 
 }
 .nav{
     width: 100%;
     height: 2000px;
 }
 .aticky{
     opacity: 0.9;
     background-color: #000;
    

 }
 .aticky>a{
     color: white;
     font-weight: bold;
     margin:20px 0 15px 40px;

 }
.aticky ul  a{
 color: white;
 font-weight: bold;
}
.aticky li{
    padding: 15px 10px 0 10px;
}
.aticky ul i{
    color: white;
}
.ul-menu{
    width: 20%;
    height: 380px;
    background-color:white;
    position: absolute; 
    padding: 0;
    top:100%;
   opacity: 0;
   visibility: hidden;
    transition: all 1s;
}
.ul-menu li>a{
    margin-left: 10px;
    color: #6f6f6f;
    font-weight: bold;
    display: block;
}
.ul-menu li>a:hover{
   color: red;
}
.ul-menu li{
    padding: 10px 0  10px 0 ;
    display: block;
    padding: 10px 20px 10px 20px;
    margin-top: 4px;
    border-bottom: 2px #ccc solid;
}
.non{
    width: 20px;
   left: 0;
   margin-right: 10px;
}
.ul-menu a>img{
   font-size: 50px;
 
}
.aa:hover .ul-menu{
opacity: 1;
visibility: visible;
}
.li-cn-1{
    position: relative;
}
.chamdo{
    box-sizing: border-box;
    background-color: red;
    width: 25px;
    height: 17px;
    position: absolute;
    top: 5%;
   left: 0;
   font-size: 12px;
    border-radius: 4px;
    color: aliceblue;
    padding-left: 5px;
    padding-bottom: 3px;
    font-weight: bold;
}
.timkiem{
    background-color: #000;
padding: 10px 20px 10px 20px; 
position: absolute;
top:100%;
right: 10%;
opacity: 0;
visibility: hidden;
transition: all 1s;

}
.ti-search{
    font-size: 25px;
  position: relative;
  top:5px;
  left: 5px;
  color: aliceblue;
}
.input-1{
    width: 250PX;
    height: 25px;
    font-weight: bold;
    color: #000;
}
.li-timkiem:hover .timkiem{
    opacity: 1;
    visibility: visible;
}

.aticky .chamdo{
    background-color: rgba(244, 244, 244, 0);
}
.bam-dangnhap>a{
    text-decoration:none ;
    color: black;
}
.bam-dangky>a{
    text-decoration:none ;
    color: black;
}
.chon-dangnhap{
    width: 300px;
    height: 200px;
    margin:  0 auto;
    background-color : #fff ;
    padding-top: 1px;
    position: absolute;
    right: 5%;
    top: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all 1s;
   box-shadow: 0 0 10px #ccc;
  
}
.bam-dangnhap{
    text-align: center;
    width: 70%;
    height: 50px;
    margin: 25px auto;
    background-color: red;
    line-height: 50px;
   
}
.bam-dangky{
    text-align: center;
    width: 70%;
    height: 50px;
    margin: 25px auto;
    background-color: black;
    line-height: 50px;
  
}
.bam-dangnhap >a{
    color: white;
}
.bam-dangky >a{
    color: white;
}
.li-ti:hover  .chon-dangnhap{
    opacity: 1;
    visibility:visible;
}
.aticky .bam-dangky>a{
    color: rgb(231, 220, 220);
}

.chon-dangnhap:before{
   content: "";
   position: absolute;
   border-left: 20px solid transparent;
   border-right: 20px solid transparent;
   border-top:10px solid transparent;
   border-bottom: 20px solid #fff ;
   top: -15%;
   left: 76%;
}
/* ket thuc div-1 */
.div-tren1{
    width: 1200px;
    margin: 0 auto;
    display: flex;
    margin-top: 30px;
  
}
.div-cn-tren1{
    width: 33%;
    border: 2px chocolate solid;
    margin-left: 50px;
}
.div-cn-tren1 h2{
    font-size: 20px;
    margin-left: 10px;
    padding: 0 10px 0 10px;
   
}
.div-cn-tren1 h3>a{ 
    color: red;
    font-weight:bold;
    margin-left: 20px;
}
.div-cn-tren1 a{
text-decoration: none;
color: #000;
}
.div-cn-tren1 img {
    width: 200px;
  margin-left: 150px;
}
.div-cn-tren1  .div-cn-img1    {
    width: 200px;
  margin-left: 150px;
  margin-top: 25px;
}
.div-tren2{
    width: 1200px;
    margin: 0 auto;
    text-align: center;
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
    
}
.div-tren2 .ccc{
    color:#ccc;
    font-weight: bold;
    margin-top: 20px;
}
.div-tren2 h2{
    text-align: center;
    font-size: 40px;
    margin: 10px 0 10px 0;
}
.div-non-ban{
display: flex;
margin-top: 20px;
flex-wrap: wrap;

}
.div-non-ban-1{
    box-sizing: border-box;
    width: 25%;
    padding: 10px 20px 10px 20px;
}
.div-non-ban-1 img{
    width: 100%;
    border-bottom: 2px #ccc solid;
}
.div-non-ban-1:hover .div-muatren2{
 top: 85%;
 transition: all 1s;
}
.img-muatren2{
    position: relative;
    overflow: hidden;
}
.img-muatren2 .ti-shopping-cart{
    color: white;
    font-weight: bold;
}
.div-muatren2 {
    cursor: pointer;
    padding: 10px 0 10px 0;
   position: absolute; 
   width: 100%;
   background-color: #000;
   top: 100%;
}
.div-non-ban-1 a{
   
    text-decoration: none;
    color: #000;
}
.div-non-ban-1 h4{
    margin: 10px 0 10px 0;
    font-size: 15px;
    text-align: left;
}
.div-non-ban-1 p{
    color: red;
    font-weight: bold;
}
.div-chon{
display: flex;
flex-wrap: wrap;
margin-top: 30px;

}
.div-chon-1{
    width: 25%;
    border: 2px #ccc solid;
    height: 300px;
    box-sizing: border-box;
    position: relative;
   
}
.div-chon-1:hover{
    background-color: #6f6f6f;
    background-image: url(./img/backred1.jpg) ;
    background-size: cover;
}
.div-chon-1 a{
   text-decoration: none;
   color:#000;
   font-weight: bold;

   
}
.div-chon-1:hover .div-chon-a a{
    color: #fff;
    font-weight: bold;
    
}
.div-chon-a{
    margin-top: 100px; 
    
}

.div-chon-1 img {
    width: 50px;
    height: 55px;
}
.ti-shop{
    font-size: 40px;
    display: block;
    position: absolute;
   bottom: 15px;
   margin-left: 45%;
   
}
.ti-angle-double-down{
    margin-left: 5px;
}

.a-cha-tren{
 
}
.tren3-img{
    margin-top: 80px;
}
.logo{
    background-image: url(./img/back6.jpg);
    height: 600px;
    position: relative;
    padding-top: 2px;
    margin-top: 30px;
}
.logo h2{
    color: white;
    margin-top: 30px;
  
}
.logo-2{
    position: absolute;
    
    top:60%;
    left: 15%;
}
.logo-3{
    position: absolute;
    top:60%;
    right: 15%;
}
.logo-4{
position:absolute;
top: 30%;
left: 38%;

}
.logo-5{
    position: absolute;
    
    top:40%;
    left: 23%;
}
.logo-6{
    position: absolute;
    
    top:40%;
    right: 23%;
}
.xuhuong-ch-1 {
    width: 28%;
    box-shadow:  0 0 10px #ccc;
    border-radius: 3px ;
    box-sizing: border-box;
    margin-left: 5px;
   
}
.xuhuong-ch-1 img {
    width: 100%;
    height: 366px;
   
}
.xuhuongback {
   background-color: red;
    color: aliceblue;
    font-weight: bold;
    padding: 20px 0 20px 0;
    border-radius:  0 20px 6000px 0 ;
    width: 50%;
}
.xuhuong-ch-1 h3 {
    margin: 20px 0 0 0 ;
    font-size: 15px;
    text-align: left;
    padding: 0 10px 0 10px;
}
.xuhuong-ch-1 p {
    text-align: left;
    margin-top: 5px;
    padding: 0 10px  20px 10px;
}
.xuhuong-ch{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.xuhuong-ch-1 a {
    text-decoration: none;
}
.tren-5 h2{
    text-align: center;
}
.tren-5{
    text-align: left;
}
.tren-5 a{
    text-decoration: none;
}
.foo{
    width: 100%;
    background-color: #333;
    margin-top: 50px;
    }
    .foo h3{
        color: red;
    }
    .div-fo{
        width: 1200px;
        margin: 0  auto ;
        display: flex;
        justify-content: space-between;
        padding-bottom: 50px;
        
        
    }
    .div-fo-1{
       
    }
    .div-fo-1>ul{
       color: white;
      
    }
    .div-fo-1 h3{
        margin:20px 0 10px 0;
    }
    .div-fo-1 li {
        margin: 5px 0 5px 0;
    }
  #tiente{
    color: red;
    margin-left: 5px;

  }
  .dkdn{
    width: 100%;
    height: 700px;
    background-color: rgba(182, 177, 177, 0.7);
    position: fixed ;
    z-index: 4;
    display: none;
   
  }
  .dkdn-1-1{
    width: 100%;
    height: 700px;
    background-color: rgba(182, 177, 177, 0.7);
    position: fixed ;
    z-index: 4;
    display: block;
   
  }
  .dkdn-1{
    padding-top: 20px;
    text-align: center;
    width: 400px;
    height: 400px;
    background-color: rgba(255, 255, 255, 0.9);
    margin: 0 auto;
    margin-top: 100px;
    border: 2px #6f6f6f solid;
    
  }
  .dkdn-1 p{
    padding-top: 20px;
    text-align: center;
    width: 200px;
    height: 50px;
    background-color: #333;
    margin: 0 auto;
    margin-bottom: 50px;
    margin-top: 50px;
    color: white;
    font-weight: bold;
    background-color: red;
    cursor: pointer;
   
  }
  .dkdn-1 #pden{
    padding-top: 20px;
    text-align: center;
    width: 200px;
    height: 50px;
    background-color: #333;
    margin: 0 auto;
    margin-bottom: 50px;
    margin-top: 50px;
    color: white;
    font-weight: bold;
    background-color: black;
  }
</style>