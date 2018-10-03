$display = $_GET['display'];
	echo "$display";
if(isset($display))
{
  echo "no1";
  global $wpdb;
  $getsuburbList1 = $wpdb->get_results("SELECT count(*) as countresult FROM `hospital_detail` WHERE suburb=\"$display\"");
  foreach( $getsuburbList1 as $getsuburbList1){
    echo $getsuburbList1->countresult;
  }
}
