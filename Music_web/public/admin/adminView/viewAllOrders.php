<div >
  <h2>Booking Details</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Email</th>
        <th class="text-center">Category</th>
        <th class="text-center">Artist Name</th>
        <th class="text-center">Time</th>
        <th class="text-center">Booking Date</th>
      </tr>
    </thead>
    <?php
      include_once "../../connect.php";
      $sql="SELECT * from booking";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["full_name"]?></td>
      <td><?=$row["phone_number"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["category_name"]?></td>
      <td><?=$row["artist_name"]?></td>
      <td><?=$row["time_slot"]?></td>
      <td><?=$row["booking_date"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

</div>