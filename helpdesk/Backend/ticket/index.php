
<?php
require('../header.php');
require('../sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- dashboard -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">DataTable Ticket</h3>
              </div>

            <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row"><div class="col-sm-12 col-md-6">
                <div class="dt-buttons btn-group flex-wrap">
                  <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> 
                  <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button>
                </div> 
                
              </div>

              
              
            </div>
            
            <div class="col-sm-12 col-md-6">
          </div>
          
        </div>

        <div class="row">
          <div class="col-sm-14">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
            <div class="row">
            <div class="col-sm-14">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
            <thead>
            <tr>
              <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Id</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Id Ticket</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Id Station</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Station Name</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Station Type</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Description</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">image</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Type</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Priority</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">User Id</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ticket Open</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ticket Close</th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Comment</th>
            </tr>
            </thead>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>

            </div>

          </div>

      </div>
    </di>

</section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require('../footer.php');

