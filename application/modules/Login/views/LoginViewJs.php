<script type="text/javascript">
	$(document).ready(function(){

		$('#loginbtn').click(function(){

			window.swal({
                    title: "Proses...",
                    text: "Mohon Tunggu",
                    imageUrl: "<?php echo base_url('assets/images/ajax-loader.gif') ?> ",
                    showConfirmButton: false,
                    allowOutsideClick: false
                  });

			$.ajax({
			url : '<?php echo site_url("$this->controller/cek_login") ?>',
			data : new FormData($('#formdata')[0]),
	        contentType: false,
	        processData: false,
	        type : 'post',
	        dataType : 'json',
			success : function(obj){
				if(obj.error==false) {
						window.swal("Informasi!", obj.message, "success").then((value) => {
								window.location = "<?php echo site_url('Dashboard') ?>";
							});
					}
					else {
						window.swal('Error', obj.message, 'error');
					}
				}
			});
		});

	});
</script>