@extends('layout')
	@section('content')
		<h2>VueJs playground</h2>

		<div id="app">
			<example></example>
	  
		</div>

		<div id="inp">
			<input-component prop-data="Hello Alex!"></input-component>
		</div>


		<div class="col-md-1">

		<div id="delete-1" data-target="#delModal1" data-toggle="modal" class="btn btn-default btn-xs delete-file">Delete file</div> 

                                <div id="delModal1" role="dialog" class="modal fade" target-name="5320095.jpg"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" data-dismiss="modal" class="close">×</button> <h4 class="modal-title">Delete</h4></div> <div class="modal-body"><p>Are you sure you want to delete undefined</p> <p>api/files/delete/1</p></div> <div class="modal-footer"><button type="button" class="btn btn-primary">Yes</button> <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button></div></div></div></div> <div id="delete-2" data-target="#delModal2" class="btn btn-default btn-xs delete-file">Delete file
                                </div> <div id="delModal2" role="dialog" class="modal fade" target-name="certificate.jpg"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" data-dismiss="modal" class="close">×</button> <h4 class="modal-title">Delete</h4></div> <div class="modal-body"><p>Are you sure you want to delete undefined</p> <p>api/files/delete/2</p></div> <div class="modal-footer"><button type="button" class="btn btn-primary">Yes</button> <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button></div></div></div></div></div>
	@endsection



<div type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#delModal3">Open Modal</div>

<!-- Modal -->
<div id="delModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>