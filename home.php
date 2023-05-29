<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <title>Home</title>
</head>

<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="container">
    <div class="navbar">
      <ul>
        <div class="menu-title">Menu</div>
         <li class="item">
          <div class="submenu-item">
            <span>Inbound</span>
          </div>
          <ul class="menu-items submenu">
            <div class="menu-tittle">
            </div>
            <li class="item">
              <a href="#">Purchase Order (PO)</a>
            </li>
            <li class="item">
              <a href="#">Advance Shipping Note (ASN)</a>
            </li>
            <li class="item">
              <a href="#">GRN</a>
            </li>
            <li class="item">
              <a href="#">Create</a>
            </li>
            <li class="item">
              <a href="#">Bulk Inbound Stock Update</a>
            </li>
          </ul>
        </li>
        <li class="item">
          <div class="submenu-item">
            <span>Put Away</span>
          </div>
          <ul class="menu-items submenu">
            <div class="menu-tittle">
            </div>
            <li class="item">
              <a href="#">Inbound</a>
            </li>
            <li class="item">
              <a href="#">Return Orders</a>
            </li>
            <li class="item">
              <a href="#">Canccel Orders</a>
            </li>
            <li class="item">
              <a href="#">Putaway List</a>
            </li>
          </ul>
        </li>
        <li class="item">
          <div class="submenu-item">
            <span>Inventory Management</span>
          </div>
          <ul class="menu-items submenu">
            <div class="menu-tittle">
            </div>
            <li class="item">
              <a href="#">Inventory</a>
            </li>
            <li class="item">
              <a href="#">Batch & Expiry Management</a>
            </li>
            <li class="item">
              <a href="#">Stock Movement</a>
            </li>
            <li class="item">
              <a href="#">Stock Adjustment</a>
            </li>
            <li class="item">
              <a href="#">Stock Take List</a>
            </li>
            <li class="item">
              <a href="#">Stock Take Approval </a>
            </li>
            <li class="item">
              <a href="#">Stock Transfer</a>
            </li>
            <li class="item">
              <a href="#">Create Product</a>
            </li>
            <li class="item">
              <a href="#">Bulk Image Upload</a>
            </li>
            <li class="item">
              <a href="#">Import Buffer Stock</a>
            </li>
            <li class="item">
              <a href="#">Bulk Product Update</a>
            </li>
            <li class="item">
              <a href="#">Bulk Stock Update</a>
            </li>
          </ul>
        </li>
        <li class="item">
          <div class="submenu-item">
            <span>Reports</span>
          </div>
          <ul class="menu-items submenu">
            <div class="menu-tittle">
            </div>
            <li class="item">
              <a href="#">Generate Reports</a>
            </li>
            <li class="item">
              <a href="#">Generated Reports</a>
            </li>
            <li class="item">
              <a href="#">Pending Delivery</a>
            </li>
          </ul>
        </li>
        <li class="item">
          <div class="submenu-item">
            <span>Outbound Delivery</span>
          </div>
          <ul class="menu-items submenu">
            <div class="menu-tittle">
            </div>
            <li class="item">
              <a href="#">Picking Unassigned</a>
            </li>
            <li class="item">
              <a href="#">Picking Assigned</a>
            </li>
            <li class="item">
              <a href="#">Packing</a>
            </li>
            <li class="item">
              <a href="#">Awaiting Dispatch</a>
            </li>
            <li class="item">
              <a href="#">Dispatch Scheduled</a>
            </li>
          </ul>
        </li>
        <li>
          <button id="logout"onclick="logoutUser()">Logout</button>
        </li>
      </ul>
    </div>
  </div>
  <div class="main">
    <div class="text">
      <h3>IMS</h3>
      <p>Inventory Management System</p>
    </div>
  </div>


<script src="javascript/home.js"></script>
</body>
</html>