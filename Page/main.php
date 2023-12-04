  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <!--<div class="container-fluid">-->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
           
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!--</div>--><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- <div class="container-fluid"> -->
        <center>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Welcome:: 
                  <?php $username = getenv('INFO_VARIABLES') ?: getenv('INFO_VARIABLES');
                    echo $username; // e.g. root or www-data ?>
                </h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/banners/Carson3pl1.png" width="100%" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/banners/Newark3pl1.png" width="100%"  alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/banners/SanDiegoMDO1.png" width="100%"  alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!--/div -->
        
      <!--</div>--><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
