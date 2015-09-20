<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Портфолио';

$widthdef=800; //ширина блока изображений
$heightdef=150; //максимальная высота одной строки
$margin=2; //отступы между картинками
$uploadsdir='./upload/'; //папка, в которой лежат изображения
$img = [
    [1],
    [2],
    [3],
    [4],
    [5],
    [6],
];
$text = [
    ["Свадьба Василия и Александры"],
    ["Фестиваль Паники"],
    ["День рождения"],
    ["Детский праздник"],
    ["Народные гуляния"],
    ["Фестиваль красок"],
];
 $textes = [
    ["Опишите свое фото здесь"],
    ["Опишите свое фото здесь"],
    ["Опишите свое фото здесь"],
    ["Опишите свое фото здесь"],
    ["Опишите свое фото здесь"],
    ["Опишите свое фото здесь"],
];
$imagescount=10;
echo '<div style="width:'.$widthdef.'px;">';

$first=1;

while($first<=$imagescount){
    $images=$first-1;
    $hightes=$heightdef+1;
    while($hightes > $heightdef && $images<$imagescount) {
        $images++;
        $width=$widthdef-($images-$first+1)*($margin*2); //ширина,с учетом отсупов

        if($hightes<=$heightdef) {
            for($i=$first;$i<=$images;$i++) {
                $ht=$hightes.'px';
                echo '<img style="margin:'.$margin.'px;" src="'.$uploadsdir.$img[$i].'" height="'.$ht.'"> <p align = "center"> ' + $text[i] + '</p> <p align = "center"> <span style = " text-align: center; font-size: 16px; color: #808080"> ' + $textes[i] + '</p>'; //выводим картинку

            }
            $first=$images+1;

        } else {

            if($images==$imagescount) {
                //вывод картинок, если блок не получается полностью заполненным
                for($y=$first;$y<=$images;$y++) {
                    echo '<img style="margin:'.$margin.'px;" src="'.$uploadsdir.$img[$y].'" height="'.$heightdef.'px">';
                }
                $first=$images+1; //указываем, с какой картинки считать
            }

        }

    }
}

echo '</div>';