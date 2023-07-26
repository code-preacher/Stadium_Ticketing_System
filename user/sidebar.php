         <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             <?php
              $user=$crud->displayUser($_SESSION['id']);
              if ($user['gender']=='male') {
               ?>
               <img class="direct-chat-img" src="../dist/img/avatar5.png" alt="message user image" /><!-- /.direct-chat-img -->
               <?php
             } else {
              ?>
              <img class="direct-chat-img" src="../dist/img/avatar2.png" alt="message user image" /><!-- /.direct-chat-img -->
              <?php
            } 
            ?>
            </div>
            <div class="pull-left info">
              <p><?php $n=$crud->displayLoginUser($_SESSION['id']); echo $n['name']?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
       </div>
       <!-- search form -->
       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>


<li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i> <span>Match Info</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-match.php"><i class="fa fa-eye"></i>View Match Info</a></li>
          </ul>
        </li>



         <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i> <span>Match Booking</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="book-match.php"><i class="fa fa-plus"></i>Book Match</a></li>
            <li><a href="view-booking.php"><i class="fa fa-eye"></i>View Booking</a></li>
          </ul>
        </li>

            <li>
              <a href="profile.php">
                <i class="fa fa-user"></i> <span>Profile</span></a> </li>

                <li>
                  <a href="logout.php" onClick="return confirm('Are you sure you want to Logout?')">
                    <i class="fa fa-sign-out"></i> <span>Logout</span></a> </li>

                  </ul>
                </section>
                <!-- /.sidebar -->
              </aside>