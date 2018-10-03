global $wpdb;
$gethosp = $wpdb->get_results("SELECT * FROM hospital_detail");
$getrecreation = $wpdb->get_results("Select * from recreationCenter");
$getlibrary = $wpdb->get_results("Select * from library");

$gethospSub = $wpdb->get_results("select DISTINCT(hospital_detail.suburb) as suburb from hospital_detail Order by suburb asc");
$getlibSub = $wpdb->get_results("SELECT DISTINCT(Suburb_Town) FROM `library` ASC");
$getrecreationSub = $wpdb->get_results("SELECT DISTINCT(suburbTown) FROM `recreationCenter` ORDER BY `suburbTown` ASC");
$getsuburbList = $wpdb->get_results("select suburb from hospital_detail UNION SELECT Suburb_Town from library UNION select suburbTown FROM recreation as t ORDER BY suburb ASC");
?>

	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter suburb">
  <div class="searchResult">
  <ul id="myUL" size="5">
<?php
  foreach($getsuburbList as $getsuburbList)
  	echo "<li class=\"subName\"><a href=\"https://findcaringarea.ga/index.php/suburbdetailpage?id=$getsuburbList->suburb\">$getsuburbList->suburb</li>";
echo "</ul></div>";
