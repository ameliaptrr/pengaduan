<?php
    include("./komponen/pagewrapper.html");
    include("./komponen/sidebar.php");?>
      
        

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

                <?php
                    include("./komponen/topbar.html");
                ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">
            
            <?php include("./konten.php");?>
          </div>
        
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin akan keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">"Cancel" or "Logout"</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <?php
      include("./komponen/bootstrapcore.html");
    ?>


    <?php
      include("./komponen/coreplugin.html");
    ?>

    <?php
      include("./komponen/customscripts.html");
    ?>


    <?php
      include("./komponen/pagelevel.html");
    ?>


    <?php
      include("./komponen/pagelevelcustom.html");
    ?> 