<?php
/*540 */
global $wpdb;
$id = $_REQUEST['id'];
$i = 0;
global $wpdb;
echo "<center><table>";
$gethosp = $wpdb->get_results("SELECT * FROM hospital LEFT JOIN suburb_list ON hospital.Postcode = suburb_list.postcode where suburb_list.suburb = '$id'");
echo "<tr>";
	foreach($gethosp as $gethosp){
      if($i > 2){
        echo "<tr>";
      }
      $gethospName = $gethosp->LabelName;
  		echo "<td><center>";ac
        echo "<div class=\"flip-card\">";
  		echo "<div class=\"flip-card-inner\">";
  		echo "<div class=\"flip-card-front\">";
      	echo "<h4>";
        echo "<b><center>";
      	echo $gethospName;
        echo "</b>";
        echo "</h4>";
      	echo "<p><center>";
		$getType = $gethosp->Type;
      	echo "Type : ";
      	echo $getType;
      	echo "</p>";
      	echo "</div>";
        echo "<div class=\"flip-card-back\">";
      	echo "<p><center>";
      	$getStree = $gethosp->StreetNum;
      	$getName = $gethosp->RoadName;
		$getRoadType = $gethosp->RoadType;
      	echo $getStree." ".$getName. " ". $getRoadType;
      	echo "</p></center>";
      	echo "</div>";
      	echo "</div>";
      	echo "</div>";
      	echo "</td></center>";
  		$i = $i + 1;
      	if($i > 2){
        	echo "</tr>";
          	$i = 0;
        }
      }
echo "</tr>";
echo "</table></center>";
?>