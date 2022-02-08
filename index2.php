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
    $letter='z';
    $alpha=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    for($i=0;$i<count($alpha);$i++){
    if($letter==$alpha[$i]){
    echo $alpha[$i+1];
    }else{
    echo $alpha[0];
    break;
    }
   }?>
</body>
</html>