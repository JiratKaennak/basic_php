<?php
    function sale($price)
    {

        $sale1 = ($price * 0.03);
        $sale2 = ($price * 0.05);
        if($price<5000){
            echo "สินค้าราคา: $price<br>";
            echo "ได้ส่วนลด: $sale1 บาท <br>";
            echo "ราคาสุทธิ: ".($price - $sale1)." บาท <br>";
            return $sale1;
        }else if($price>=5000){
            echo "สินค้าราคา: $price<br>";
            echo "ได้ส่วนลด: $sale2 บาท <br>";
            echo "ราคาสุทธิ: ".($price - $sale2)." บาท <br>";
            return $sale2;
        }
    }
?>