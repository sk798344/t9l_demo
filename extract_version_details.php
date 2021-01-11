<?php session_start();

$f = file_put_contents("../frontend.zip", fopen("http://parentsskhool.com/admin/store_update_version/frontend.zip", 'r'), LOCK_EX);

if(FALSE === $f)
    die("Couldn't write to file.");
$zip = new ZipArchive;
$res = $zip->open('../frontend.zip');
if ($res === TRUE) {
  $zip->extractTo('../frontend/');
  $zip->close();
  echo 'Unzipped Process Successful!'; 
  
  
         ############### check and update data details
    

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://parentsskhool.com/t9l_demo/frontend/update_database_details.php',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;

                   
          
  
  
} else {
  echo 'Unzipped Process failed'; 
}


/*$zip = new ZipArchive; 
  
// Zip File Name 
if ($zip->open('../frontend.zip') === TRUE) { 
  
    // Unzip Path 
    $zip->extractTo('../test_frontend_version/'); 
    $zip->close(); 
    echo 'Unzipped Process Successful!'; 
} else { 
    echo 'Unzipped Process failed'; 
} 


*/

?>