<style>
    *{
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
}
.container{
    width: 60%;
    margin: 0 auto;
}
.row{
    float: left;
    width: 100%;
}

.mb{
    margin-bottom: 20px;
}
.mb10{
    margin-bottom: 10px;
}
.mr{
    margin-right: 2%;
}
.demo{
    background-color: antiquewhite;
    min-height: 100px;
}
.header{
    background-color: aqua;
    border: 1px #090 solid;
    color: blue;
    border-radius: 5px;
}
.header h1{
    margin: 20px;
    font-size: 1.2vw;
}
.menu{
    background-color: black;
    color: #ccc;
    border-radius: 5px;
}
.menu ul{
    padding: 0px 15px;
}
.menu ul li{
    list-style-type: none;
    display: inline;
    padding: 0px 15px;
}
.menu ul li a{
    color: #ccc;
    text-decoration: none;
    transition: 0.5s;
}
.menu ul li a:hover{
    color: white;
    font-size: 0.8vw;
}
.boxleft{
    float: left;
    width: 74%;
}
.boxright{
    float: left;
    width: 24%;
}
.title{
    color: #333;
    padding: 10px;
    background-color: #eee;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #ccc solid;
}
.content{
    border-left: 1px #ccc solid;
    border-bottom: 1px #ccc solid;
    border-right: 1px #ccc solid;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    min-height: 200px;
    padding: 20px;
}
.formtk{
    line-height: 150%;
}
.formtk input[type="text"],
.fromcontent input[type="text"]{
    width: 100%;
    height: 8px;
    border: 1px #ccc solid;
    padding: 10px;
    border-radius: 5px;
}
.formtk input[type="password"]{
    width: 100%;
    height: 23px;
    border: 1px #ccc solid;
    padding: 5px 10px;
    border-radius: 5px;
}
.formtk input[type="submit"],
.fromcontent input[type="submit"],
.fromcontent input[type="reset"],
.fromcontent input[type="button"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #ccc solid;
}
.formtk input[type="submit"]:hover,
.fromcontent input[type="submit"]:hover,
.fromcontent input[type="reset"]:hover,
.fromcontent input[type="button"]:hover{
    background-color: #ccc;
}
.formtk li a{
    color: teal;
    text-decoration: none;
}
.formtk li a:hover{
    color: #090;
    text-decoration: underline;
}
.content2{
    border-left: 1px #ccc solid;
    border-right: 1px #ccc solid;
    background-color: #eee;
}
/*menu dọc */
.menudoc ul{
    margin: 0;
    padding: 0;
    list-style-type: none;
}
.menudoc ul li{
    padding: 10px 20px;
    background-color: #fff;
    border-bottom: 1px #ccc solid;
}
.menudoc ul li a{
    color: #666;
    text-decoration: none; 
}
.menudoc ul li:hover{
    background-color: #ccc;
}
.boxfooter{
    padding: 10px;
    background-color: #eee;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 1px #ccc solid;
    border-right: 1px #ccc solid;
    border-bottom: 1px #ccc solid;
}
.seachbox input[type="text"]{
    width: 100%;
    padding: 5px 10px;
    background-color: #fff;
    border:1px #ccc solid;
    border-radius: 5px;
}
.top6 img{
    width: 20%;
    height: 40px;
    float: left;
    margin-right: 10px;
    margin-top: 1px;
    border-radius: 5px;
    border: 1px #ccc solid;
}
.top6 a{
    color: #666;
    text-decoration: none;
}
.top6 a:hover{
    color: #000;
    text-decoration: underline;
}

.banner{
    min-height: 300px;
    width: 100%;
    text-align: center;
}
.banner img{
    height: 300px;
}
.sp{
    float: left;
    width: 32%;
    min-height: 300px;
    border: 1px #eee solid;
    border-radius: 5px;
    margin-bottom: 20px;
}
.sp .img{
    min-height: 240px;
    text-align: center;
}
.img img{
    width: 70%;
    height: 200px;
}

.footer{
    background-color: aqua;
    border: 1px #090 solid;
    font-size: 0.8vw;
    color: blue;
    border-radius: 5px;
    padding: 20px;
}

/* headeradmin*/
.headeradmin{
    background-color: #eee;
    border: 1px #ccc solid;
    color: #666;
    border-radius: 5px;
    padding: 0px 20px;
}
.headeradmin h1{
    font-size: 2vw;
}
.fromtitle{
    border: 1px #ccc solid;
    color: #666;
    border-radius: 5px;
    margin: 80px 20px 0px 0px;
    padding: 0px 20px;
}
.fromcontent{
    padding: 20px 0px;
}
.fromds table{
     width: 100%;
     border-collapse: collapse;
}
.fromds table th{
    padding: 15px;
    background-color: #ccc;
}
/* .fromds table th:nth-child(2){
    width: 30%;
    background-color: #ccc;
}
.fromds table th:nth-child(3){
    width: 40%;
    background-color: #ccc;
}
.fromds table th:nth-child(4){
    width: 20%;
    background-color: #ccc;
} */
.fromds table td{
    padding: 10px 20px;
    border: 1px solid #ccc;
}

/*slideshow*/
/* Slideshow container */
.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }
  /*end slideshow*/

  .spct{
    text-align: center;
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
.ul-1 li{
   display: inline-block;
   padding: 15px 20px 5px 20px;
}
</style>