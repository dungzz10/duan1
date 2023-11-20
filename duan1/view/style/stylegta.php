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
 .back{
     background-image: url(./img_back_chosanpham/page-title-bg.png) ;
     background-size:cover;
     
     width: 100%;
     min-height: 450px;
    
    
     
 }
 .div-tiude{
    position: absolute;
    top: 20%;
    left: 10%;
    color: #fff;
 }
 .div-tiude p {
    font-weight: bold;
 }
 .gangtay{
    position:absolute;
    top: 10%;
  width:350px;
   left: 60%;
}
.ti-angle-double-down{
    margin-left: 5px;
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
     color: #ffffff;
     font-weight: bold;
     margin:20px 0 15px 40px;

 }
.aticky ul  a{
 color: #ffffff;
 font-weight: bold;
}
.aticky li{
    padding: 15px 10px 0 10px;
}
.aticky ul i{
    color: #ffffff;
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
    border: 2px #ccc solid;
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
    margin-top: 5px;
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
.cha-as-ar{
    width: 1200px;
    margin: 0 auto;
}
.as{
    float: left;
    width: 30%;
    
}
.ar{
    float: left;
    width: 70%;
    height:  100px;
   
}
.aa-cha-img{
    display: block;
    text-decoration: none;
    color:#6f6f6f;
    font-weight: bold;
    padding: 5px;
    border-bottom: 2px solid #ccc;
}
.aa-cha-img:hover{
    color: red;
}
.aa-cha-img >img {
    width: 20px;
    margin-right: 25px;
    margin-left: 20px;
}
.cha-as-ar{
    padding-top: 50px;
}
.cha-thuonghieu img{
    width: 200px;
    display: block;
    margin-left: 20px;
}
.cha-thuonghieu {
    display: block;
    text-decoration: none;
    color:#6f6f6f;
    font-weight: bold;
    padding: 5px;
    border-bottom: 2px solid #ccc;
   
}
.cha-thuonghieu >b{
    margin-left: 40px;
    letter-spacing: 3px;
}
.div-gia p{
margin-left: 20px;
font-weight: bold;
color: #6f6f6f;
}
.div-gia{
    border-bottom: 2px #ccc solid;
}
.div-mausac p{
    margin-left: 20px;
    font-weight: bold;
    color: #6f6f6f;
}
.as h5{
    color:#6f6f6f;
    font-weight: bold;
    margin-left: 20px;
    font-size: 15px;
}
.as h1{
    margin-left: 20px;
}
.as h2{
    margin-left: 20px;
}
.div-kp{
    display: flex;
    justify-content: space-between;
    margin-left: 50px;
}
.sele{
    width: 350px;
   padding: 10px;
   color: #000;
   font-weight: bold;
}
.luuys{
    padding: 50px;
    background-color: #ccc;
    font-weight: bold;
    text-align: center;
    
}
.sanpham{
    display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
   
   

}
.sanpham-1{
    width: 25%;
    text-align: center;
  padding: 10px 10px 0 10px;
  box-sizing: border-box; 
  margin-bottom: 20px;
  
}
.om-img{
    position: relative;
    overflow: hidden;
}
.sanpham-1 img{
     width: 25%;
    width: 100%;
  
}

.muangay{
    position: absolute;
    width: 100%;
    background-color: #446084;
    padding: 10px 0 10px 0;
  top:100%;
  transition: all .5s;
}
.sanpham-1:hover .muangay{
    top:80%;
}
.sanpham-1:hover .img-zom{
    width: 95%;
}

.muangay >a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
.sanpham-1 h3{
    font-size: 12px;
    text-align: left;
    font-weight: bold;
    
}
.kogiamgia-p {
    margin: 0;
    color: red;
    display: block;
    font-weight: bold;
}
.giamgia-p{
    margin: 0;
    color: #6f6f6f;
    font-weight: bold;
    display: inline-block;
    text-decoration:line-through;
}
.foo{
    width: 100%;
    background-color: #333;
    margin-top: 1300px;
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