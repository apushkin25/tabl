<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/calc.css">
<?php
    $a = $_POST['mextype'];
    $b = $_POST['mow'];
    $c = $_POST['tok'];
    $d = $_POST['kpd'];
    $e = $_POST['cosf'];
    $f = $_POST['napr'];
    $g = $_POST['elec'];
    $h = $_POST['pcvprice'];
    $i = $_POST['drprice'];
    $mass = compact('a', 'f');
    
//    
//    $array = array(
//        '220' => array('Насос', 'Вентилятор' )
//        
//        )
//    
            
if($a == '1'&& $masPitanie2 == '1' ){$res= $b+$c;}
 elseif ($masPitanie== '2'&& $masPitanie2 == '2') {$res= $b*$c;}
//    
//    $masPitanie = array (
//                        '1' => "Hern 1" ,
//                        '2' => "Hern 2" ,
//                        '3' => "Hern 3" ,
//                        '4' => "Hern 4"
//                        );
//     $masPitanie2 = array (
//                        '1' => "Hern 11" ,
//                        '2' => "Hern 22" ,
//                        '3' => "Hern 33" ,
//                        '4' => "Hern 44"
//                        );
 
 $rez = array( '1' => array(),
         
     );
         
           //  in_array($b , $arrMashin);    
 $arrMashin = array('nasos', 'konveer', 'ventilyator');
 $arrPitanie = array('220', '380');
 $meh = 0; //механиз
 $u = 0; // питание
 
 
                        switch ($arrMashin[$meh][$u])]{
                        case  'dod':
                               $res = $b + $c;
                            break;
                        
                         case  'konveer':
                        
                          
                            $res = $b + $c;
                            break;
                        
                          case  'ventilyator': 
                            $res = $b + $c;
                            break;
                   
                        }                   
                    
//            var_dump ($a);
//            print_r($array);
//    
//    if ($a=='1' and $f=='0')
//        { 
//        $res =$b + $c*22;}
//elseif ($a='2' && $f=='2') 
//                {
//$res= $b*$c^2;

//switch ($a and $f){
//case($a == '1'):
//case $f=='1':
//    $res =$b + $c*22;
//    break;
//case $a=='2':
//case $f=='2':
//$res =$b + $c;  
//    break;
//}

//$mass = array( "a", "b", "c", "d", "e", "f","g","h" ,"i");
//    $mextypeArray = array(
//        'nas'=> "Насос",
//        'vent'=>"Вентилятор",
//        'compr'=>"Компрессор",
//        'konv'=> "Конвеер",
//        'wnek'=>"Шнек",
//        'drMex'=>"Другой механизм с векторной"
//    );

//    switch ($mextypeArray) {
//    case 'nas':
//        $res = $a + $b;
//         break;
//    case 'vent':
//        $res = $a - $b;
//        break;
//    case 'compr':
//        $res = $a + $b + $c;
//        break;
//    }
    ////    if ($x == 'first') {
//        $res = $a + $b;
//    } elseif ($x == 'second') {
//        $res = $a - $b;
//    } elseif ($x == 'third') {
////        $res = $a + $b + $c;

  ?>

    <?
//    echo '<pre>';
//    var_dump($mextypeArray);
//    echo "</pre>";
    ?>


    <head>

        <title> Калькулятор себестоимости </title>    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/calk.css" type="text/css"/>
    </head>
    <body>


        <div id="dan">
            <div id="left">
                <h1>ИСХОДНЫЕ ДАННЫЕ</h1>
                <p>Тип механизма</p>
                       <form action="#" method="post" name="isx">
                    <select name="mextype" size="1" >
                    <option value="1" <?if(isset($a)){if($a==1) echo ' selected="selected"';}?>>Насос</option>
                    <option value="2"<?if(isset($a)){if($a==2) echo ' selected="selected"';}?>>Вентилятор</option>
                    <option value="3" <?if(isset($a)){if($a==3) echo ' selected="selected"';}?>>Компрессор</option>
                    <option value="4" <?if(isset($a)){if($a==4) echo ' selected="selected"';}?>>Конвеер</option>
                    <option value="5" <?if(isset($a)){if($a==5) echo ' selected="selected"';}?>>Шнек</option>
                    <option value="6" <?if(isset($a)){if($a==6) echo ' selected="selected"';}?>>Другой механизм с векторной</option>
                    </select>

                    <p>Номинальная мощность двигателя</p>
            <input type="number" name="mow" value="<?=$b?>"> кВт

                    <p>Номинальный ток двигателя</p>
                    <input type="number" name="tok" value="<?= $c ?>" required title="Введите ток двигателя"> A


                    <p>КПД двигателя</p>

                    <input type="number" value="<?if(isset($d)){if($d!=0)echo "$d";} else {echo "0.85";}?>" min="0.5" max="1" step="0.01" name="kpd"/>
                    <!--<input type="number" value="0.85" min="0.5" max="1" step="0.01" name="kpd"/>--> 

                    <p>Коэффициент мощности (cos φ)</p>
                    <input type="number" value="<?if(isset($e)){if($e!=0)echo "$e";} else {echo"0.8";}?>" min="0.5" max="1" step="0.01" name="cosf"/>

                    <p>Напряжение питания двигателя</p>
                    <p><select name="napr" size="1">
<!--<option selected="selected" value="<//?if(isset($_POST['napr']) and 1==$_POST['napr']):endif?>"</option>-->
                            <option value="1" <?if(isset($f)){if($f==1) echo ' selected="selected"';}?>>3ф-380В</option>
                            <option value="2" <?if(isset($f)){if($f==2) echo ' selected="selected"';}?>>3ф-400В</option>
                            <option value="3" <?if(isset($f)){if($f==3) echo ' selected="selected"';}?>>3ф-415В</option>
                            <option value="4" <?if(isset($f)){if($f==4) echo ' selected="selected"';}?>>1ф-220В </option>
                            <option value="5" <?if(isset($f)){if($f==5) echo ' selected="selected"';}?>>Шнек</option><!--тут нужно вставить свой вариант свое значение
                            но в пределах 110-690В-->
                        </select>
              
                    </p>

                    <p> <h2>Напряжение питания двигателя</h2></p>
                    <select name="pitanie" size="1" value="<?= (isset($_POST['pitanie']) ? '' : $_POST['pitanie'] );?>">
                    
                        <? foreach ($masPitanie as $key => $value){
                    ?>    
                     <option value="<?= $key ?>" <?= ( $key == $_POST['pitanie'] ? 'selected' : '') ?> ><?= $value ?></option>
                    <?}?>
                     
                     </select>
                        <p> <h2>Напряжение питания двигателя22</h2></p>
                    <select name="pitanie2" size="1" value="<?= (isset($_POST['pitanie2']) ? '' : $_POST['pitanie2'] );?>">
                    
                        <? foreach ($masPitanie2 as $key => $value){
                    ?>    
                     <option value="<?= $key ?>" <?= ( $key == $_POST['pitanie2'] ? 'selected' : '') ?> ><?= $value ?></option>
                    <?}?>
                     
                     </select>
                       
                    





                    <p>Тариф на электроэнергию</p>
                    <input type="number" name="elec" step="0.10" value="<?if(isset($g)){if ($g!=0) echo "$g";} else {echo"1";} ?>"> грн.

                    <p>Стоимость преобразователя частоты</p>
                    <input type="number" name="pcvprice" value="<?if(isset($h)) {if($h>=2500) echo"$h";} else {echo"0";} ?>" min="2500"  step="100" required title="Введите цену на преобразователь"> грн.

                    <p>Дополнительные расходы(датчик, щит, и т.д.)</p>
                    <input type="number" name="drprice" value="<?if(isset($i)) {if($i> 1)echo"$i";} else{echo "0";}?>" > грн.


                    <p><input type="submit" name="submit" value="Расчитать экономию" /></p>
                    <div id="res"><?= $res; ?></div>
                </form>



            </div>
            <div id="center">

                <? echo "$res"; ?>  <!--Тут будут графики-->
            </div>

            <div id="left">



            </div>


        </div>


    </body>

</html>