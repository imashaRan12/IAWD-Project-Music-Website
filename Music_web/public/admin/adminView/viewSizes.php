<div >
  <h2>All Messages</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Phone</th>
        <th class="text-center">Email</th>
        <th class="text-center">Subject</th>
        <th class="text-center">Messages</th>
        <th class="text-center">Upload Date</th>
      </tr>
    </thead>
    <?php
      include_once "../../connect.php";
      $sql="SELECT * from contact";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["contact_name"]?></td>
      <td><?=$row["contact_phone"]?></td>
      <td><?=$row["contact_email"]?></td>
      <td><?=$row["contact_subject"]?></td>
      <td><?=$row["contact_message"]?></td>
      <td><?=$row["uploaded_date_c"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>

</div>