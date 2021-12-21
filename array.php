<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $color =array("red"=>"100","blue"=>"200","yellow"=>"300","black"=>"400","green"=>"500","pink"=>"600");
        $number =array("100","200","300","400","500","600");
        foreach($color as $colors=> $number):
            echo "สี : $colors รหัส : $number <br>";
        endforeach;
    ?>
</body>
</html>