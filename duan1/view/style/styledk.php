
<style>

  
.row1 {
  display: flex;
  flex-wrap: wrap;
 
}






/* CSS cho phần giá, sao đánh giá */
  

/* Style cho toàn bộ khối form */
.div-form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

/* Style tiêu đề */ 
.title {
  text-align: center;
  text-transform: uppercase;
  font-size: 1.2em;
  font-weight: bold;
  margin-bottom: 20px;
}

/* Style cho từng dòng */
.row {  
  display: flex;
  flex-direction: column;
  margin-bottom: 15px;
}

/* Label trước input */
.row label {
  font-weight: bold;
  margin-bottom: 5px;
}

/* Style chung cho các input */
.row input[type="text"],
.row input[type="email"],
.row input[type="password"] {
  padding: 8px;
  border: 1px solid #ccc; 
  border-radius: 4px;
}

/* Style nút */
.row input[type="submit"],
.row input[type="reset"] {
  padding: 8px 15px;
  border: none;
  border-radius: 4px;
  background: #4CAF50;
  color: #fff;
  cursor: pointer;
}

/* Style thông báo */
.thongbao {
  color: red;
  margin-top: 10px; 
}


.row1 {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.sp {
  width: 30%;
  margin-bottom: 20px;
  box-shadow: 0 0 5px rgba(0,0,0,0.2); 
  transition: all 0.3s;
}

.sp:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.sp img {
  width: 100%;
  height: auto;
}

@media (max-width: 768px) {
  .sp {
    width: 45%; 
  }
}

@media (max-width: 500px) {
  .sp {
    width: 100%;
  }
}


</style>