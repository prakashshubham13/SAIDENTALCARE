<?php
require 'config/config.php';


$sno= $_GET['sno'];
 $q = " delete from apoint WHERE sno='$sno' ";
 mysqli_query($con,$q);
 header('location:dash.php');

