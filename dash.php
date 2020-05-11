<?php
require 'config/config.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
header{
    background-color:#00BFFF;
    margin-bottom:10px;
            padding:10px;
        display:block;

}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
th{
    background-color:rgb(39, 39, 39);
    color:white;
}

tr:nth-child(even){background-color: #f2f2f2}
a{
    text-decoration:none;
    color:white;
    background:crimson;
    outline:none;
    padding:3px;
}
button{
    text-decoration:none;
    color:black;
    background:crimson;
    outline:none;
    padding:3px;
    border:1px solid crimson;
    border-radius:2px;
}
    </style>
</head>
<body>
    <header>
<h1>ADMIN PANEL</h1>
</BR>
<h4>PATIENT APPOINTMENT LIST</h4>
</header>
    <?php


$result = mysqli_query($con,"select * from apoint");

echo "<table border='1'>
<tr>
<th>S.NO.</th>
<th>NAME</th>
<th>PHONE</th>
<th>TIME</th>
<th>DELETE</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['sno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
?>
<td>
<button>
    <a href="delete.php?sno=<?php echo $row['sno'];?>">
delete
</a>
</button>
</td>
<?php
echo "</tr>";
}
echo "</table>";

?>



</body>
</html>