<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Help us make your enquiry easier</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form action="popup-handler.php" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="">Name : </label>
					<input type="text" name="name" id="" placeholder="Enter your name" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Email : </label>
					<input type="text" name="email" id="" placeholder="Enter Email" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Phone No. : </label>
					<input type="text" name="phone" id="" placeholder="Enter Phone No." class="form-control">
				</div>

				<div class="form-group">
					<label for="">Country  </label>
					<input type="text" name="country" id="" placeholder="Enter Your Country" class="form-control">
				</div>

        <button type="submit" class="btn btn-primary" >Submit</button>
			</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
      
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>