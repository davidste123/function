<?php
/*922 */
global $wpdb;
$id = $_GET['id'];
$i = 0;
echo "<center><table>";
$getSport = $wpdb->get_results("SELECT DISTINCT suburb_list.suburb, suburb_list.postcode, sportList.Sportsplayed, `Facility Name` as Facility_Name FROM sportList LEFT JOIN suburb_list ON sportList.Postcode = suburb_list.postcode where suburb_list.suburb=\"$id\"");
echo "<tr>";
foreach($getSport as $getSport){
  if($i > 2){
    echo "<tr>";
  }
  $sportCenterName = $getSport->Sportsplayed;
  $sportName = $getSport->Facility_Name;        
    echo "<td><center>";
  echo "<div class=\"flip-card\">";
    echo "<div class=\"flip-card-inner\">";
      echo "<div class=\"flip-card-front\">";
      echo "<h4>";
        echo "<b><center>";
        echo $sportName;
        echo "</b>";
        echo "</h4>";
      echo "</div>";
       echo "<div class=\"flip-card-back\">";
        echo "<p><center>";
        echo $sportCenterName;
        echo "</p>";
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