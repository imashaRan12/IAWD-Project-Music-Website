<?php 
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="asset/images/fave_icon.png"
      type="image/x-icon"
    />
    <!-- link css -->
    <link rel="stylesheet" href="admin/css/adminStyle.css" />
    <link rel="stylesheet" href="admin/css/style.css" />

  </head>

  <body>
    <nav>
      <div class="logo">
        <div class="logo-image">
          <img src="asset/images/logo.png" alt="" />
        </div>
      </div>
      <div class="menu-items">
        <ul class="navLinks">
          <li class="navList active">
            <a href="#">
              <ion-icon name="home-outline"></ion-icon>
              <span class="links">Dashboard</span>
            </a>
          </li>
          <li class="navList">
            <a href="#">
              <ion-icon name="musical-notes-outline"></ion-icon>
              <span class="links">Artists</span>
            </a>
          </li>
          <li class="navList">
            <a href="#">
              <ion-icon name="analytics-outline"></ion-icon>
              <span class="links">Analytics</span>
            </a>
          </li>
          <li class="navList">
            <a href="#">
              <ion-icon name="heart-outline"></ion-icon>
              <span class="links">Likes</span>
            </a>
          </li>
          <li class="navList">
            <a href="#">
              <ion-icon name="chatbubbles-outline"></ion-icon>
              <span class="links">Comments</span>
            </a>
          </li>
        </ul>
        <ul class="bottom-link">
          <li>
            <a href="logout.php">
              <ion-icon name="log-out-outline"></ion-icon>
              <span class="links">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="container">
        <div class="overview">
          <div class="title">
            <ion-icon name="speedometer"></ion-icon>
            <span class="text">Dashboard</span>
          </div>
          <div class="boxes">
            <div class="box box1">
              <ion-icon name="eye-outline"></ion-icon>
              <span class="text">Total Views</span>
              <span class="number">18345</span>
            </div>
            <div class="box box2">
              <ion-icon name="people-outline"></ion-icon>
              <span class="text">Active users</span>
              <span class="number">2745</span>
            </div>
            <div class="box box3">
              <ion-icon name="chatbubbles-outline"></ion-icon>
              <span class="text">Total Activities</span>
              <span class="number">1209</span>
            </div>
            <div class="box box4">
              <ion-icon name="car-sport-outline"></ion-icon>
              <span class="text">Insured Vehicles</span>
              <span class="number">123</span>
            </div>
          </div>
        </div>

        <!-- Recent Activities -->
        <div class="data-table activityTable">
          <div class="title">
            <ion-icon name="time-outline"></ion-icon>
            <span class="text">Recent Activities</span>
          </div>
          <div>
            <!-- Enter any table or section here -->
          </div>
        </div>

        <!-- Artists -->

        <div style="display: none" class="data-table userDetailsTable">
          <div class="title">
            <ion-icon name="musical-notes-outline"></ion-icon>
            <span class="text">Artists</span>
          </div>
          <div>

            <table class="table ">
              <thead>
                <tr>
                  <th class="text-center">S.N.</th>
                  <th class="text-center">Artist Image</th>
                  <th class="text-center">Artist Name</th>
                  <th class="text-center">Artist Description</th>
                  <th class="text-center">Category Name</th>
                  <th class="text-center">Per Event</th>
                  <th class="text-center" colspan="2">Action</th>
                </tr>
              </thead>
              <?php
                include_once "connect.php";
                $sql="SELECT * from artist, category WHERE artist.category_id=category.category_id";
                $result=$conn-> query($sql);
                $count=1;
                if ($result-> num_rows > 0){
                  while ($row=$result-> fetch_assoc()) {
              ?>
              <tr>
                <td><?=$count?></td>
                <td><img height='100px' src='<?=$row["artist_image"]?>'></td>
                <td><?=$row["artist_name"]?></td>
                <td><?=$row["artist_desc"]?></td>      
                <td><?=$row["category_name"]?></td> 
                <td><?=$row["price"]?></td>     
                <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Edit</button></td>
                <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
                </tr>
                <?php
                      $count=$count+1;
                    }
                  }
                ?>
            </table>

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
              Add Artist
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Artist</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
                      <div class="form-group">
                        <label for="name">Artist Name:</label>
                        <input type="text" class="form-control" id="a_name" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Fee for Event:</label>
                        <input type="number" class="form-control" id="a_price" required>
                      </div>
                      <div class="form-group">
                        <label for="qty">Description:</label>
                        <input type="text" class="form-control" id="a_desc" required>
                      </div>
                      <div class="form-group">
                        <label>Category:</label>
                        <select id="category" >
                          <option disabled selected>Select category</option>
                          <?php

                            $sql="SELECT * from category";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0){
                              while($row = $result-> fetch_assoc()){
                                echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="file">Choose Image:</label>
                          <input type="file" class="form-control-file" id="file">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Artist</button>
                      </div>
                    </form>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>

        <!-- Analytics -->
        <div style="display: none" class="data-table EditUserRole">
          <div class="title">
            <ion-icon name="analytics-outline"></ion-icon>
            <span class="text">Analytics</span>
          </div>
          <div>
            <!-- Enter any table or section here -->
          </div>
        </div>

        <!--  Likes -->
        <div style="display: none" class="data-table VehicleDetails">
          <div class="title">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="text">Vehicles</span>
          </div>
          <div>
            <p>hiiiiiiiiiiiiiiiiiii</p>
            <!-- Enter any table or section here -->
          </div>
        </div>

        <!-- Downloads section -->
        <div style="display: none" class="data-table downloads">
          <div class="title">
            <ion-icon name="chatbubbles-outline"></ion-icon>
            <span class="text">Comments</span>
          </div>
          <div>
            <p>Myname is Imasha</p>
            <!-- Enter any table or section here -->
          </div>
        </div>
      </div>
    </section>

    <script>
      document.querySelectorAll(".navList").forEach(function (element) {
        element.addEventListener("click", function () {
          document.querySelectorAll(".navList").forEach(function (e) {
            e.classList.remove("active");
          });

          // Add active class to the clicked navList element
          this.classList.add("active");

          // Get the index of the clicked navList element
          var index = Array.from(this.parentNode.children).indexOf(this);

          // Hide all data-table elements
          document.querySelectorAll(".data-table").forEach(function (table) {
            table.style.display = "none";
          });

          // Show the corresponding table based on the clicked index
          var tables = document.querySelectorAll(".data-table");
          if (tables.length > index) {
            tables[index].style.display = "block";
          }
        });
      });
    </script>

    <script src="admin/js/script.js"></script>     
    <script src="admin/js/ajaxWork.js"></script>   

    <!-- Sources for icons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
