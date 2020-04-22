<?php
$height=230;
if($height<150){
    echo "150㎝未満の方はご乗車できません";
}elseif($height>=200){
    echo "200㎝以上の方はご乗車できません";
}else{
    echo "ご乗車になれます";
}

$weekday="月曜";
switch ($weekday){
    case "月曜":
        echo "可燃ごみの日です";
        break;
    case "水曜":
        echo "資源ごみの日です";
        break;
    default:
        echo "回収はありません";
        break;
}