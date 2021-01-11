<?php session_start();

include('config.php');

date_default_timezone_set('Asia/Kolkata');

$created_date =date("Y-m-d H:i:s");


$name=$_POST['name'];

$email=$_POST['email'];

$text_details=$_POST['text_details'];

if(isset($_POST['inlineCheckbox1'])){
    $inlineCheckbox1 = $_POST['inlineCheckbox1'];
}else{
    $inlineCheckbox1 = "";#default value
}

if(isset($_POST['inlineCheckbox2'])){
    $inlineCheckbox2 = $_POST['inlineCheckbox2'];
}else{
    $inlineCheckbox2 = "";#default value
}

$user_input=array();

array_push($user_input,array('name'=>$name,'email'=>$email,'text_details'=>$text_details,'inlineCheckbox1'=>$inlineCheckbox1,'inlineCheckbox2'=>$inlineCheckbox2));

$encode_json=json_encode($user_input);

 $sql_ins="insert into subscription_user(user_details,created_date) values('$encode_json','$created_date')";

$sql_query=mysqli_query($con,$sql_ins);


if($sql_query){
 echo "<p>Subscription Details Add successfully</p>";
  ?>
    
  	<script> setTimeout(function(){ window.location.href = 'index.php';}, 3000);
    </script>

  <?php

}else{

echo "<p>Subscription Details not Add successfully</p>";
 ?>
    
  	<script> setTimeout(function(){ window.location.href = 'index.php';}, 3000);
    </script>
 <?php

}

?>