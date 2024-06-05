
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

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Create Ticket</h3>
</div>


<form id="quickForm" novalidate="novalidate">
<div class="card-body">
<div class="form-group">
<label>Station ID</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">Station1</option>

</select>

</div>
<div class="form-group">
<label for="exampleInputEmail1">Station Name</label>
<input type="text" name="station_name" class="form-control" id="exampleInputStatioName" placeholder="Station Name">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Station Type</label>
<input type="text" name="station_type" class="form-control" id="exampleInputStationType" placeholder="Station Type">
</div>

<div class="form-group">
<label>Issue Discriptin</label>
<textarea class="form-control" rows="3" placeholder="Issue Description"></textarea>
</div>

<div class="form-group">
<label for="exampleInputFile">Issue Image</label>
<div class="input-group">
<div class="custom-image">
<input type="file" class="custom-image-input" id="exampleInputImage">
</div>
</div>
</div>
<div class="form-group">
<label>Station ID</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">Software</option>
<option selected="selected" data-select2-id="27">Hardware</option>
<option selected="selected" data-select2-id="27">Network</option>
<option selected="selected" data-select2-id="27">Dispenser</option>
<option selected="selected" data-select2-id="27">Unassigned</option>
</select>

</div>

<div class="form-group">
<label>Priority</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">Low</option>
<option selected="selected" data-select2-id="27">Medium</option>
<option selected="selected" data-select2-id="27">High</option>
</select>
</div>

<div class="form-group">
<label>Status</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">Open</option>
<option selected="selected" data-select2-id="27">On Hold</option>
<option selected="selected" data-select2-id="27">In Progress</option>
<option selected="selected" data-select2-id="27">Pending Vendor</option>
<option selected="selected" data-select2-id="27">Closed</option>
</select>
</div>

<div class="form-group">
<label>Assign</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">user1</option>
</select>
</div>

<div class="form-group">
<label>Ticket Open</label>
<div class="input-group date" id="reservationdatetime" data-target-input="nearest">
<input type="datetime-local" id="ticketOpen" name="ticketOpen" class="form-control datetimepicker-input" data-target="#reservationdatetime">
<div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
</div>
</div>
</div>

<div class="form-group">
<label>Ticket Close</label>
<div class="input-group date" id="reservationdatetime" data-target-input="nearest">
<input type="datetime-local" id="ticketClose" name="ticketClose" class="form-control datetimepicker-input" data-target="#reservationdatetime">
<div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
</div>
</div>
</div>

<div class="form-group">
<label>Comment</label>
<textarea class="form-control" rows="3" placeholder="Comment"></textarea>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

</div>


<div class="col-md-6">
</div>

</div>

</div>
</section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require('../footer.php');

