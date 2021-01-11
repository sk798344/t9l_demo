<?php session_start();
include('config.php');


############### get status  details from database

$get_status_details_sql="SELECT * FROM `release_verion_status` where is_active='1' and type='Module'";

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