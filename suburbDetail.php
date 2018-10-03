$id = $_REQUEST['id'];
echo "<p style='font-size:30px;float:left'>Suburb:&nbsp;&nbsp;&nbsp; <p style='color:orange;font-size:30px;;'>$id" ;
echo "<br>";
global $wpdb;
$gethosp = $wpdb->get_results("SELECT * FROM hospital_detail where suburb=\"$id\"");
$getrecreation = $wpdb->get_results("Select * from recreation where suburbTown=\"$id\"");
$getlibrary = $wpdb->get_results("Select * from library where suburb_Town=\"$id\"");
?>
<script>
var labelhos=<?php echo json_encode($gethosp,JSON_PRETTY_PRINT)?>;
var labelrecreation=<?php echo json_encode($getrecreation,JSON_PRETTY_PRINT)?>;
var labellibrary=<?php echo json_encode($getlibrary,JSON_PRETTY_PRINT)?>;
</script>
<?php
echo "<div style='font-size:30px;'>";
$countGethosp = count($gethosp);
echo "<table><tr><td>";
echo "<p style='float:left'> Hospital Number:&nbsp;&nbsp;&nbsp; <p style='color:orange;font-size:30px;;'>$countGethosp";
echo "</div>";
echo "</table></tr></td>";
$q = 0;
echo "<div id=\"testOne\">";
foreach($gethosp as $gethosp){
      echo "<div class=\"cols\">";
		echo "<div class=\"col\" ontouchstart=\"this.classList.toggle('hover');\">";
				echo "<div class=\"container\">";
					echo "<div class=\"front\" style=\"background-image: url(https://unsplash.it/500/500/)\">";
						echo "<div class=\"inner\">";
			echo "<p>$gethosp->LabelName</p>";
             echo "<span>$gethosp->Type</span>";
			echo "</div>";
  			echo "</div>";
				echo	"<div class=\"back\">";
				echo	"<div class=\"inner\">";
						  echo "<p>$gethosp->StreetNum </p>";
                          echo "<p>$gethosp->RoadName</p>";
  							echo "<p>$gethosp->RoadType</p>";
  							echo "<input type=\"button\" value=\"hospital\" id=\"hosbut\" onclick=\"map1()\">";
	echo"</div>";
	echo"</div>";
		echo"</div>";
	  echo"</div>";
	echo"</div>";
  }

echo "<div id=\"map\" style=\"display:none;width: 700px; height: 600px;\">";
echo "</div>";
echo "</div>";
echo "<table><tr><td>";
echo "<div style='font-size:30px;'>";
$countGetrecreation = count($getrecreation);
echo "<p style='float:left'>Recreation Number: &nbsp;&nbsp;&nbsp;<p style='color:orange;font-size:30px;;'>$countGetrecreation";
echo "</div>";
echo "</table></tr></td>";
echo "<br>";
echo "<div id=\"testTwo\">";
foreach($getrecreation as $getrecreation){
      echo "<div class=\"cols\">";
		echo "<div class=\"col\" ontouchstart=\"this.classList.toggle('hover');\">";
				echo "<div class=\"container\">";
					echo "<div class=\"front\" style=\"background-image: url(https://unsplash.it/500/500/)\">";
						echo "<div class=\"inner\">";
			echo "<p>$getrecreation->Sportsplayed</p>";
             echo "<span>$getrecreation->FacilityName</span>";
			echo "</div>";
  			echo "</div>";
				echo	"<div class=\"back\">";
				echo	"<div class=\"inner\">";
						  echo "<p>$getrecreation->street_number</p>";
                          echo "<p>$getrecreation->street</p>";
  							echo "<p>$getrecreation->suburbTown</p>";
  							echo "<p>$getrecreation->govArea</p>";
  							echo "<input type=\"button\" value=\"Recreation\" onclick=\"map2()\">";
	echo"</div>";
	echo"</div>";
		echo"</div>";
	  echo"</div>";
	echo"</div>";
  }
echo "<div id=\"map2\" style=\"display:none;width: 800px; height: 500px;\">";
echo "</div>";
echo "</div>";
echo "<br>";
echo "<div style='font-size:30px;'>";
$countLibrary = count($getlibrary);
echo "<table><tr><td>";
echo "<p style='float:left'>library Number: &nbsp;&nbsp;&nbsp;<p style='color:orange;font-size:30px;;'>$countLibrary";
echo "</table></tr></td>";
echo "<br>";
$j = 0;
foreach($getlibrary as $getlibrary){
     echo "<div class=\"cols\">";
		echo "<div class=\"col\" ontouchstart=\"this.classList.toggle('hover');\">";
				echo "<div class=\"container\">";
					echo "<div class=\"front\" style=\"background-image: url(https://unsplash.it/500/500/)\">";
						echo "<div class=\"inner\">";
			echo "<p>$getlibrary->Suburb_Town Library</p>";
			echo "</div>";
  			echo "</div>";
				echo	"<div class=\"back\">";
				echo	"<div class=\"inner\">";
						  echo "<p>$getlibrary->Address </p>";
                          echo "<p>$getlibrary->Phone</p>";
  						echo "<input type=\"button\" value=\"Library\" onclick=\"map3()\">";
	echo"</div>";
	echo"</div>";
		echo"</div>";
	  echo"</div>";
	echo"</div>";
  if($j ==2){
    $j = 0;
    echo "<br>";
  }
}
echo "<div id=\"map3\" style=\"display:none;width: 800px; height: 500px;\">";
echo "</div>";

echo "</div>";
