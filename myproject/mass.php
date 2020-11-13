
<?php
for ($i = 0; $i < 5; $i++){
    for ($j=0; $j <10; $j++){
        $numbers[$i][$j]=rand(1,10);
    }
  }
echo '<table cellpadding="5" cellspacing="0" border="1">';
foreach ($numbers as $v1) {
	echo "<tr>";
	foreach ($v1 as $v2){
        echo "<td>".$v2."</td>";
    }	
	echo "</tr>";
}
echo "</table>";

?>