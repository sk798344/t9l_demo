<?php session_start();
include('config.php');
/*

code to fetch status of new version

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1/demo_frontend/get_version_details.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: PHPSESSID=6fd7242332b016a7169294456e019da4'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

*/


############### get status  details from database

$get_status_details_sql="SELECT * FROM `release_verion_status` where is_active='1' and type='Full'";

$get_status_details_query=mysqli_query($con,$get_status_details_sql);


$get_status_details_rows=mysqli_num_rows($get_status_details_query);


if($get_status_details_rows){
    
    $get_status_details_result=mysqli_fetch_array($get_status_details_query);
    
    $new_version=$get_status_details_result['new_version'];
    
    $new_version_status=$get_status_details_result['new_version_status'];
    
    $version_description=$get_status_details_result['version_description'];
    
    $output_result=array();
    
    array_push($output_result,array('new_version'=>$new_version,'new_version_status'=>$new_version_status,'version_description'=>$version_description));
    
    echo json_encode($output_result);
    
    
}else{
 
     echo "no";
    
}



?>