<script type="text/javascript">
	$(document).ready(function(){

		$('#loginbtn').click(function(){

			

			$.ajax({
			url : '<?php echo site_url("$this->controller/cek_login") ?>',
			data : new FormData($('#formdata')[0]),
	        contentType: false,
	        processData: false,
	        type : 'post',
	        dataType : 'json',
	        beforeSend: function(){
	        	swal.fire({
									title: 'Autentikasi . . ',
								    allowEscapeKey: false,
								    allowOutsideClick: false,
								});
						      swal.showLoading();
	        },
			success : function(obj){
				if(obj.error==false) {
						swal.fire("Informasi!", obj.message, "success").then((value) => {
								window.location = "<?php echo site_url('Dashboard') ?>";
							});
					}
					else {
						swal.fire('Error', obj.message, 'error');
					}
				},
				error: function(){
					swal.fire('Error', 'Server Error', 'error');
				}
			});

			return false;
		});

	});
</script>