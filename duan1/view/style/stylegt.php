<style>
    *{
    font-family: 'Open Sans', sans-serif;
}
body{
    padding: 0;
    margin: 0;
}
.div-1{
   
   
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
    
   
}
.ti-angle-double-down{
    margin-left: 5px;
}
.menu>a{
   margin:20px 0 15px 40px;
        color: white;
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
 .div-h4-gt{
    position: absolute;
    top: 35%;
    left: 10%;
    color: #fff;
 }
 .div-h4-gt h4{
    margin: 10px;
 }
 .div-h4-gt p{
font-weight: bold;
 }
 .back{
     background-image: url(./img_back_chosanpham/page-title-bg.png) ;
     background-size: cover;
     
     width: 100%;
     min-height: 450px; 
 }
 .non-2{
    position: absolute;
    width: 350px;
    top: 20%;
    left: 65%;
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
    background-color: red;
    width: 7px;
    height: 7px;
    position: absolute;
    top: 30%;
    left: 5px;
    border-radius: 5px;
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
.phan-2{
width: 1200px;
margin:  0 auto;
}
.h2{
    text-align: center;
    margin-top: 50px; 
    
}
.phan-3{
    display: flex;
    margin-top: 100px;
}
.cnphan-3{
    width: 30%;
    margin-top: 180px;
    margin-right: 50px;
   
   
}
.cnphan-3-1{
    display: flex;
    width: 70%;
}
.cnphan-3-2{
    width: 40%;
}
.cndiv-1{
    background-color: #Ccc;
    text-align: justify;
    padding: 30px 50px 100px 50px; 
    margin-bottom:100px ;
    box-sizing: border-box;
    margin-top: 150px;
}

h5{
    text-align: center;
}
h4{
    margin-bottom: 50px;
    font-weight: bold;
    font-size: 20px;
}
.thep{
    text-align: justify;
   
}
.ti-stats-up{
    margin-top: 20px;
    margin-left: 20px;
    font-size: 50px;
}
.ti-gift{
    margin-top: 20px;
    margin-left: 20px;
    font-size: 50px;
   
}
.cnphan-3-3{
    width: 60%;
}
.cndiv-2{
    background-color: red;
    box-sizing: border-box;
    padding: 30px 50px 100px 50px;  
    margin-left: 50px;
    margin-bottom: 50px;
    color: #fff;
}
.ti-check{
    margin-top: 20px;
    margin-left: 20px;
    font-size: 50px;
}
.ti-crown{
    margin-top: 20px;
    margin-left: 20px;
    font-size: 50px;
}
.ti-star{
    margin-top: 20px;
    margin-left: 20px;
    font-size: 50px;
}
.cuoi{
    display: flex;
   
}
.cuoi-1{
    text-align: center;
   
    flex: 1;
   border-right:  4px solid #ccc;
}
.foo{
    width: 100%;
    background-color: #333;
    margin-top: 10px;
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
    
</style>