<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan | Home</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/asssets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/js/datatables.net-bs/css/dataTables.bootstrap.min.css">
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper" style="background-color: brown">
        <a href="index.html">
          
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Notifications</h6>
                  <p class="dropdown-title-text">You have 4 unread notification</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                      <i class="mdi mdi-alert"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Storage Full</small>
                      <small class="content-text">Server storage almost full</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                      <i class="mdi mdi-cloud-upload"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Upload Completed</small>
                      <small class="content-text">3 Files uploded successfully</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                      <i class="mdi mdi-security"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Authentication Required</small>
                      <small class="content-text">Please verify your password to continue using cloud services</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-outline mdi-1x"></i>
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Messages</h6>
                  <p class="dropdown-title-text">You have 4 unread messages</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../assets/images/profile/male/image_1.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Clifford Gordon</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../assets/images/profile/female/image_2.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Rachel Doyle</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../assets/images/profile/male/image_3.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-warning"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Lewis Guzman</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Apps</h6>
                  <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                    <span class="grid-tittle">Jira</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                    <span class="grid-tittle">Trello</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                    <span class="grid-tittle">Artstation</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                    <span class="grid-tittle">Bitbucket</span>
                  </a>
                   <a href="<?php echo base_url('Login/keluar');?>" class="dropdown-grid">
                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                    <span class="grid-tittle">Bitbucket</span>
                  </a>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar" style="background-color: brown">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?php echo base_url()?>/assets/imam.jpg" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name" style="color: white">Imam Hanafi</p>
            <h6 class="display-income" style="color: white">$3,400,00</h6>
          </div>
        </div>
        <ul class="navigation-menu" style="background-color: brown">
          <li class="nav-category-divider"style="background-color: brown;color: white">MAIN</li>
          <li>
            <a href="<?php echo base_url('');?>">
              <span class="link-title" style="color: white">Dashboard</span>
              <i class="mdi mdi-gauge link-icon" style="color: white"></i>
            </a>
          </li>
          <li hidden="">
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Sample Pages</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a href="pages/sample-pages/login_1.html" target="_blank">Login</a>
              </li>
              <li>
                <a href="pages/sample-pages/error_2.html" target="_blank">Error</a>
              </li>
            </ul>
          </li>
          <li hidden="">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">UI Elements</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="pages/ui-components/buttons.html">Buttons</a>
              </li>
              <li>
                <a href="pages/ui-components/tables.html">Tables</a>
              </li>
              <li>
                <a href="pages/ui-components/typography.html">Typography</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url('Pengisian');?>">
              <span class="link-title" style="color: white">Pengisian</span>
              <i class="mdi mdi-clipboard-outline link-icon" style="color: white"></i>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('Dashboard/catatan');?>">
              <span class="link-title" style="color: white">Catatan</span>
              <i class="mdi mdi-clipboard-outline link-icon" style="color: white"></i>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('Cart');?>">
              <span class="link-title" style="color: white">Charts</span>
              <i class="mdi mdi-chart-donut link-icon" style="color: white"></i>
            </a>
          </li>
          <li hidden="">
            <a href="pages/icons/material-icons.html">
              <span class="link-title" style="text-decoration-color: white">Icons</span>
              <i class="mdi mdi-flower-tulip-outline link-icon"></i>
            </a>
          </li>
        </ul>
        
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <?php $this->load->view($page);?> 
      </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="<?php echo base_url();?>/assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="<?php echo base_url();?>/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="<?php echo base_url();?>/assets/js/template.js"></script>
    <script src="<?php echo base_url();?>/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>/assets/js/datatables/datatables.min.js"></script>
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
      $('.datatables').DataTable();
    });
  </script>
    <script >
    $(document).ready(function() {
      $('#basic-datatables').DataTable({
      });

      $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
          this.api().columns().every( function () {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
                );

              column
              .search( val ? '^'+val+'$' : '', true, false )
              .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
              select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
          } );
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
          ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
    <!-- endbuild -->
  </body>
</html>