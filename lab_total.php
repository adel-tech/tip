<?php include 'connection.php';
if(isset($_POST['query']) && !empty($_POST['query'])){
$sql = "SELECT * FROM lab WHERE name LIKE '%".$_POST["query"]."%' OR secondarycontact LIKE '%".$_POST["query"]."%' OR place LIKE '%".$_POST["query"]."%' OR lab LIKE '%".$_POST["query"]."%' OR
date LIKE '%".$_POST["query"]."%' OR contact LIKE '%".$_POST["query"]."%' OR code LIKE '%".$_POST["query"]."%' ";
$result = mysqli_query($conn,$sql);
$output = " ";
if (mysqli_num_rows($result)>0) {
  $output .= ' <h4 align = "center"> Search Results </h4> ';
  $output .= '<div class = "table-responsive">
  <table class="table table-bordered">
  <tr>
  <th>#</th>
  <th>name</th>
  <th>place</th>
  <th>token</th>
  <th>date</th>
  <th>Lab Reports</th>
  <th>contact</th>
  <th>secondarycontact</th>

   </tr>';
   while ($row= mysqli_fetch_array($result)) {
     $output .= '<tr>
     <th>'.$row["no"].'</th>
     <th>'.$row["name"].'</th>
     <th>'.$row["place"].'</th>
     <th>'.$row["code"].'</th>
     <th>'.$row["date"].'</th>
     <th>'.$row["lab"].'</th>
     <th>'.$row["contact"].'</th>
     <th>'.$row["secondarycontact"].'</th>

      </tr>' ;
   }
   echo $output;
}
else {
  echo "No patients found";
}
}
else {
  //echo " ";
//  header('location:all.php');
echo "<meta http-equiv='refresh' content='0;url=lab_display.php'>";
}
