<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "salon_database");
$columns = array('ID', 'Name', 'Phone', 'Address', 'Email','date');

$query = "SELECT * FROM data WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (ID LIKE "%'.$_POST["search"]["value"].'%" 
  OR Name LIKE "%'.$_POST["search"]["value"].'%" 
  OR Phone LIKE "%'.$_POST["search"]["value"].'%" 
  OR Address LIKE "%'.$_POST["search"]["value"].'%"
  OR Email LIKE "%'.$_POST["search"]["value"].'%" )
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY ID  ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["ID"];
 $sub_array[] = $row["Name"];
 $sub_array[] = $row["Phone"];
 $sub_array[] = $row["Address"];
 $sub_array[] = $row["Email"];
 $sub_array[] = $row["date"];

 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM data";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>

