<script type="text/javascript">


	$(document).ready(function(){

		$(".tanggal").datepicker({
			format: 'dd/mm/yyyy',
		});


		$('.tanggalspan').on("click", function(){
			$("#jeniscari0").prop("checked", true);
		});

		$('.norekspan').on("click", function(){
			$("#jeniscari1").prop("checked", true);
		});

		$('.nobpkbspan').on("click", function(){
			$("#jeniscari2").prop("checked", true);
		});

		var prntTable = $('#mytable').DataTable();



		$('#btnCariServer').click(function(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/get_data_from_server") ?>',
					data : $('#form-cari').serialize(),
					type : 'post',
					dataType : 'json',
					beforeSend: function (){
								swal.fire({
									title: 'Mohon Tunggu . . ',
								    // allowEscapeKey: false,
								    // allowOutsideClick: false,
								});
						      swal.showLoading();
					},
					success : function(obj){
						if(obj.error==false) { 
							 

							  prntTable.clear().draw();

							  obj.data.forEach(function(item, index){

							  	var newdata = prntTable.row.add([
									item.BARCODE_DATA, 
									item.NO_BPKB,
									item.NREG_BPKB,
									item.TGL_KELUAR2,
									item.JNS_KENDARAAN2,
									item.POLRES_NAMA
									]).draw(false).node();

							  		if (item.IS_PROSES!==null) {
							  			$(newdata).addClass('sudah_proses');					  	
							  		}
							            

							  });

							  swal.close();
						}
						else {
							prntTable.clear().draw();
							swal.fire('Error',obj.message,'error');
						}
					},
					error: function(data){
				        prntTable.clear().draw();
							swal.fire('Error','Server Error','error');
				    }
				});
			return false;

		});




	});



</script>