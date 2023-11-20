<div class="row1">
            <?php
            $i=0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                 echo 
               
                
                '
                <div class="div-non-ban-1   ">

                                <div class="img-muatren2">
                                <form action="index.php?act=addcart" method="post">
                                    <div class="men-thumb-item">
                                    <a href="'.$linksp.'"> <img class="anh" src="'.$hinh.'" alt=""></a>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="shop-single.html">'.$name.' </a>
                                        </h4>
            
                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money">$'.$price.'</span>
                                            </div>
                                        </div>
                                       
                                        <i class="ti-shopping-cart"><input type="submit" value="Thêm Vào Giỏ Hàng" name="addtocart"></i>
                                        </div>
                                    <input type="hidden" value="'.$id.'" name="id">
                                    <input type="hidden" value="'.$name.'" name="tensp">
                                    <input type="hidden" value="'.$hinh.'" name="img">
                                    <input type="hidden" value="'.$price.'" name="gia">
                                    </form>
                                </div>
                            </div>
                           '
                ;
                $i+=1;      
            }
            ?>
 </div>
          
     
        