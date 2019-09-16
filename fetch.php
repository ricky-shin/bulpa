<?php
    include 'config.php';
    
if(isset($_POST["query"]))
{

 $request = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM professors 
  WHERE fname LIKE '%".$request."%' 
  OR lname LIKE '%".$request."%' 
  OR department LIKE '%".$request."%'
  ORDER BY fname ASC
 ";
 $result = mysqli_query($conn, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table table-bordered table-striped table-hover">
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Department</th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["fname"];
   $data[] = $row["lname"];
   $data[] = $row["department"];
   $html .= '
   <tr>
    <td>'.$row["fname"].'</td>
    <td>'.$row["lname"].'</td>
    <td>'.$row["department"].'</td>
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Professor Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>
