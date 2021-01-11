<?php session_start();
include('config.php');

####### actionin table
$sql="CREATE TABLE `user_demo_details` (
  `id` int(12) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$query=mysqli_query($con,$sql);


$sql="ALTER TABLE `user_demo_details`
  ADD PRIMARY KEY (`id`)";
$query=mysqli_query($con,$sql);

$sql="ALTER TABLE `user_demo_details`
  ADD PRIMARY KEY (`id`)";
$query=mysqli_query($con,$sql);  

?>