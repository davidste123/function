global $wpdb;
if(isset($_GET['submit_filter'])){
  if(!empty($_GET['cate'])){
	foreach($_GET['cate'] as $selected){
      	echo "<h1>$selected</h1>";
      	if($selected == "hospital"){
  			$getHosptial = $wpdb->get_results("SELECT count(hospital_detail.suburb) as countResult, suburb FROM `hospital_detail` group by suburb ORDER BY `countResult` DESC Limit 7");
          	foreach($getHosptial as $getHosptial){
              	?><table id="hosptialtable" style="width:100%">
					<tr>
					<td width="70%">
                <?php
					echo "<a href=\"https://findcaringarea.ga/index.php/hospitaldetailpage?id=$getHosptial->suburb\"><h3>";
                  	echo $getHosptial->suburb;
              	?>
              	</a></h3>
              	</td>
              	<td width="30%">
                  <h3>
              	<?php
                echo $getHosptial->countResult;
              	?>
                  </h3>
              	</td>
				</tr>
				</table>
                <?php
            }
        }
    }
   		if($selected == "library"){
          	global $wpdb;   	      	
            $finalResult = $wpdb->get_results("SELECT library.Suburb_Town,COUNT(library.Suburb_Town) as countResult FROM library GROUP BY library.Suburb_Town ORDER BY COUNTResult DESC LIMIT 6");
          	foreach($finalResult as $finalResult){
                echo "<table id=\"librarytable\" style=\"width:100%\">";
				echo "<tr>";
				echo "<td width=\"70%\">";
				echo "<a href=\"https://findcaringarea.ga/index.php/librarydetailpage?id=$finalResult->Suburb_Town\"><h3>";	                 	
				echo $finalResult->Suburb_Town;
              	echo "</h3></td>";
              	echo "<td width=\"30%\"><h3>";
              	echo $finalResult->countResult;
              	echo "</h3></td>";
				echo "</tr>";
				echo "</table>";

        	}
		}
      	if($selected == "sport center"){
        	global $wpdb;
        	$getSport = $wpdb->get_results("SELECT count(recreation.suburbTown) as countResult, suburbTown FROM recreation group by suburbTown ORDER BY `countResult` DESC LIMIT 6");
          	foreach($getSport as $getSport){
            	echo "<table id=\"Sporttable\" style=\"width:100%\">";
				echo "<tr>";
				echo "<td width=\"70%\">";
				echo "<a href=\"https://findcaringarea.ga/index.php/recreationdetailpage?id=$getSport->suburbTown\"><h3>";	                 	
				echo $getSport->suburbTown;
              	echo "</h3></td>";
              	echo "<td width=\"30%\"><h3>";
              	echo $getSport->countResult;
              	echo "</h3></td>";
				echo "</tr>";
				echo "</table>";
              	
            }
        }
	}
}
