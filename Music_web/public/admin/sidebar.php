<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
  <div class="side-header">
    <img
      src="./assets/images/logo.png"
      width="120"
      height="120"
      alt="Swiss Collection"
    />
    <h5 style="margin-top: 10px">Hello, Admin</h5>
  </div>

  <hr
    style="border: 1px solid; background-color: #3b3131; border-color: #3b3131"
  />
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
  <a href="#customers" onclick="showCustomers()"
    ><i class="fa fa-users"></i> Users</a
  >
  <a href="#products" onclick="showProductItems()"
    ><i class="fa fa-music"></i> Artists</a
  >
  <a href="#booking" onclick="showOrders()"
    ><i class="fa fa-calendar"></i> Booking</a
  >
  <a href="#contact" onclick="showSizes()"
    ><i class="fa fa-envelope"></i> Messages</a
  >

  <!---->
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">
    <i class="fa fa-bars"></i>
  </button>
</div>
