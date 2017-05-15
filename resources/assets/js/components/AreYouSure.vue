<template>
	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Delete {{targetUrl}}</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{message}}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" v-on:click="sendDelete">Yes</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>

	  </div>
	</div>
</template>

<script>
   
    export default {
        props: ['targetUrl'],
        data() {
            return {
                message: "Are you sure you want to send request to ",
                
            }
        },
       
        methods: {
        	sendDelete() {
        		this.$emit('file-deleted');
        		$('#myModal').modal('hide');
        	}
        
        },
           

        beforeMount() {
        	
        		this.message = this.message + this.targetUrl;
        	}
        



    }
</script>