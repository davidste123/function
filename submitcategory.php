<?php

global $wpdb;
if(isset($_GET['submit_filter'])){
  if(!empty($_GET['cate'])){
  foreach($_GET['cate'] as $selected){
        echo "<h1>$selected</h1>";
        if($selected == "hospital"){
        $getHosptial = $wpdb->get_results("SELECT suburb_list.postcode, count(hospital.Postcode) as countResult,suburb_list.suburb FROM hospital LEFT JOIN suburb_list ON hospital.Postcode = suburb_list.postcode GROUP BY hospital.Postcode, suburb_list.suburb ORDER BY CountResult DESC LIMIT 7;");
            foreach($getHosptial as $getHosptial){
                ?><table id="hosptialtable" style="width:100%">
          <tr>
          <td width="70%">
                <?php
          echo "<a href=\"https://findcaringarea.tk/index.php/hospital-details?id=$getHosptial->suburb\"><h3>";
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
        if($selected == "library"){
            global $wpdb;             
            $finalResult = $wpdb->get_results("SELECT library.SuburbName,COUNT(library.SuburbName) as countResult FROM library GROUP BY library.SuburbName ORDER BY COUNTResult DESC LIMIT 6");
            foreach($finalResult as $finalResult){
                echo "<table id=\"librarytable\" style=\"width:100%\">";
        echo "<tr>";
        echo "<td width=\"70%\">";
        echo "<a href=\"https://findcaringarea.tk/index.php/librarydetails?id=$finalResult->SuburbName\"><h3>";                   
        echo $finalResult->SuburbName;
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
          $getSport = $wpdb->get_results("SELECT DISTINCT count(sportList.Postcode) as countResult , suburb_list.suburb as suburb, suburb_list.postcode FROM sportList LEFT JOIN suburb_list ON sportList.Postcode = suburb_list.postcode GROUP BY suburb_list.suburb, suburb_list.postcode ORDER BY CountResult DESC Limit 6");
            foreach($getSport as $getSport){
              echo "<table id=\"Sporttable\" style=\"width:100%\">";
        echo "<tr>";
        echo "<td width=\"70%\">";
        echo "<a href=\" https://findcaringarea.tk/index.php/sport-detail?id=$getSport->suburb\"><h3>";                   
        echo $getSport->suburb;
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
}
?>