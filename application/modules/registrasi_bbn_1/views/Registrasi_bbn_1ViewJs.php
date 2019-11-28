<script type="text/javascript">
	$(document).ready(function(){

		$('.nobpkbspan').on("click", function(){
			$("#jeniscari0").prop("checked", true);
		});
		$('.noregspan').on("click", function(){
			$("#jeniscari1").prop("checked", true);
		});
		$('.barcodespan').on("click", function(){
			$("#jeniscari2").prop("checked", true);
		});


		$('#btnCari').click(function(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/get_data_from_server") ?>',
					data : $('#formCari').serialize(),
					type : 'post',
					dataType : 'json',
					beforeSend: function (){
								swal.fire({
									title: 'Mohon Tunggu . . ',
								    allowEscapeKey: false,
								    allowOutsideClick: false,
								});
						      swal.showLoading();
					},
					success : function(obj){
						if(obj.error==false) { 
							 
								console.log(obj);
							  
								if (obj.jenis==1) {

									$('#no_bpkb').val(obj.data.NO_BPKB).prop('readonly', true);
									$('#tanggal').val(obj.data.tgl_keluar).prop('readonly', true);
									$('#noreg_bpkb').val(obj.data.NREG_BPKB).prop('readonly', true);
									$('#jml_roda').val(obj.data.JML_RODA);
									// $('#noreg_bpkb').val(obj.data.xxxxxxxxx);

								}else{

								}
							  swal.close();
						}
						else {
							swal.fire('Error',obj.message,'error');
						}
					},
					error: function(data){
				        
							swal.fire('Error','Server Error','error');
				    }
				});

		});

	});
</script>