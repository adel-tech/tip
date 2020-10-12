<?php include 'connection.php';
if(isset($_POST['query']) && !empty($_POST['query'])){
$sql = "SELECT * FROM daily WHERE (name LIKE '%".$_POST["query"]."%'
  OR consultation LIKE '%".$_POST["query"]."%'
  OR date LIKE '%".$_POST["query"]."%'
  OR contact LIKE '%".$_POST["query"]."%'
  OR  secondarycontact LIKE '%".$_POST["query"]."%'
  OR place LIKE '%".$_POST["query"]."%'
  OR code LIKE '%".$_POST["query"]."%')
  AND date like concat('%' , CURDATE() , '%') ";
$result = mysqli_query($conn,$sql);
$output = " ";
if (mysqli_num_rows($result)>0) {
  $output .= ' <h4 align = "center"> Search Results </h4> ';
  $output .= '<div class = "table-responsive">
  <table class="table table-bordered">
  <tr>
  <th>#</th>
  <th>Name</th>
  <th>Place</th>
  <th>Token</th>
  <th>Date</th>
  <th>Consultation</th>
  <th>Contact</th>
  <th>Secondary Contact</th>

   </tr>';
   while ($row= mysqli_fetch_array($result)) {
     $output .= '<tr>
     <th>'.$row["no"].'</th>
     <th>'.$row["name"].'</th>
     <th>'.$row["place"].'</th>
     <th>'.$row["code"].'</th>
     <th>'.$row["date"].'</th>
     <th>'.$row["consultation"].'</th>
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
echo "<meta http-equiv='refresh' content='0;url=todays_consulted_patients.php'>";
}
