 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subscriptions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Subscriptions</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<?php 

public static String getEmail(HttpContext context)
{
    String identifier = "X-MS-CLIENT-PRINCIPAL-NAME";
    IEnumerable<string> headerValues = context.Request.Headers.GetValues(identifier);
    if (headerValues == null)
    {
        System.Diagnostics.Debug("No email found!");
        return "";
    }
    else { 
        System.Diagnostics.Debug(headerValues.FirstOrDefault());
        return headerValues.FirstOrDefault();
    }
}


/*  include "Superweb/reports.php" ?> */
include "Superweb\main.php" ?>

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->