<?php
global $wpdb;
$id = $_REQUEST['id'];
$i = 0;
global $wpdb;
echo "<center><table>";
echo "<tr>";
$getLibrary = $wpdb->get_results("SELECT * FROM library where library.SuburbName = '$id'");
	foreach($getLibrary as $getLibrary){
      	$libraName = $getLibrary->SuburbName;
      	$libraAdd = $getLibrary->Address;      	
  		echo "<div class=\"flip-card\">";
  		echo "<div class=\"flip-card-inner\">";
      	echo "<div class=\"flip-card-front\">";
  		echo "<h4>";
        echo "<b><center>";
      	echo $libraName;
        echo "</b>";
        echo "</h4>";
      	echo "</div>";
      	echo "<div class=\"flip-card-back\">";
      	echo "<p><center>";
      	echo $libraAdd;
      	echo "</p></center>";
      	echo "<p><center>"; 
       $libPhone = $getLibrary->Phone;
      	echo $libPhone;
      	echo "</p></center>";
      	echo "</div>";
      	echo "</div>";
      	echo "</div>";
  		$i = $i + 1;
      	if($i > 2){
        	echo "</tr>";
          	$i = 0;
}
    }
echo "</tr>";
echo "</table></center>";
?>