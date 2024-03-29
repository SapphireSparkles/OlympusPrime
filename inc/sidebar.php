<!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #636363"> -->
  <aside class="main-sidebar" style="background-color: #636363">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link  bg-info" style="background-color: #56739C">
      <img src="dist/img/T_Logo_big.png"
           alt="Temco"
           class="brand-image ">
      <span class="brand-text  font-weight-light">Temco BI Portal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="padding: 0px 0px; height: 100%; width: 100%;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
              https://fontawesome.com/v4/icons/   -->
                     
               
          <li class="nav-item">
            <a href="index.php" class="nav-link"   style="color: #ffffff; padding-left: 4px;">
              <i class="nav-icon fa fa-home"></i>
              <p>
               Home
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="?page=reports" class="nav-link"   style="color: #ffffff; padding-left: 4px;">
             <i class="nav-icon fa fa-file"></i>
              <p>
               Report Archives
              </p>
            </a>
          </li>
          
<!--           <li class="nav-item">
            <a href="?page=subweb" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
             Subscription Manager
              </p>
            </a>
          </li> -->

           <li class="nav-item">
            <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=yv0CNBVmGUyfBtPv3F7xoeHWqFDFQTVDrG9jpsGMNv9UMjBVNlA1WVlBVUNUQlU1V0FCMTUzTE1BSC4u"  target="_blank" class="nav-link"  style="color: #ffffff; padding-left: 4px;">
              <i class="nav-icon fa fa-check-circle"></i>
              <p>
                 Report Requests<br><span style="font-size:60%;"><i>opens a new page</i></span>
              </p>
            </a>
          </li>

<!--           <li class="nav-item">
            <a href="?page=about2" class="nav-link"  style="color: #ffffff; padding-left: 4px;">
               <i class="nav-icon fa fa-address-book"></i>
              <p>
                About Us
              </p>
            </a>
          </li> -->
          <hr style="width:66%; margin-bottom: 1px; margin-top: 1px;"  color= #ffffff> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link"  style="color: #99CCED; padding-left: 4px;">
              <i class="nav-icon fa fa-tools"></i>
              <p>
               Domo Reports
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              </li>
              <li class="nav-item">
                <a href="?page=opexdash" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <p><i class="fa fa-usd nav-icon"></i>
                  Operational Expense</p><br><p style="padding-left: 32px;">Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=M100dash" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <i class="fa fa-exclamation-triangle nav-icon"></i>
                  <p>Drivers Without Deliveries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=DialPadRpt" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <i class="fa fa-phone-square nav-icon"></i>
                  <p>Dial Pad Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=SamsaraDeviceHealth" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <i class="fa fa-briefcase-medical nav-icon"></i>
                  <p>Samsara Health</p>
                </a>
              </li>

              <hr style="width:66%; margin-bottom: 1px; margin-top: 1px;"  color= #ffffff>   

              <li class="nav-item has-treeview">
                <a href="?page=cidash" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <i class="nav-icon fa fa-balance-scale"></i>
                  <p  style="color: #99CCED">
                  Cost Index Dashboards
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="?page=cihdash" class="nav-link"  style="color: #ffffff;  padding-left: 32px;">
                      <i class="fa fa-hourglass-half nav-icon"></i>
                      <p>CI: Hours</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="?page=ciddash" class="nav-link"  style="color: #ffffff;  padding-left: 32px;">
                      <i class="fa fa-truck nav-icon"></i>
                      <p>CI: Deliveries</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="?page=cisdash" class="nav-link"  style="color: #ffffff;  padding-left: 32px;">
                      <i class="fa fa-tachometer nav-icon"></i>
                      <p>CI: Stops Per Truck</p>
                    </a>
                  </li> 

                </ul>
          <hr style="width:66%; margin-bottom: 1px; margin-top: 1px;"  color= #ffffff>   
              <li class="nav-item">
                <a href="https://temcologistics.domo.com/" target="_blank" class="nav-link"  style="color: #ffffff;  padding-left: 16px;">
                  <p><i class="fa fa-user-circle nav-icon"></i>
                  Your DOMO website<br><span style="font-size:60%;  padding-left: 32px;"><i>opens a new page</i></span></p>
                </a> 
              </li>
            </ul>


          </li>
         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
