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

		$('#v_jenis_penerbitan').on('change', function(){
			if ($('#v_wilayah_kerja').val()!=='' && $('#v_jenis_penerbitan').val()!=='') {
				get_noawal();
			}else{
				$('#v_no_awal').val('');
				$('#v_reg_no_awal').val('');
			}
		});	

		$('#v_wilayah_kerja').on('change', function(){
			if ($('#v_jenis_penerbitan').val()!=='' && $('#v_wilayah_kerja').val()!=='') {
				get_noawal();
			}else{
				$('#v_no_awal').val('');
				$('#v_reg_no_awal').val('');
			}
		});	


		$('#v_is_no_bpkb_null').click(function() {
			 if(this.checked) { // check select status
	            $('#v_no_awal').val('');
				$('#v_reg_no_awal').val('');
	        }else{
	           	get_noawal();     
	        }
		});


		$('#btnSimpan').on('click', function(){
			$.ajax({
					url : '<?php echo site_url($this->controller."/simpan_label") ?>',
					data : $('#form-baru').serialize(),
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
							  swal.fire('Selesai',obj.message,'success');
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

		$('#btnCariServer').click(function(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/get_data_from_server") ?>',
					data : $('#form-cari').serialize(),
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

		});




	});


	function get_noawal(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/get_noawal") ?>',
					data : $('#form-baru').serialize(),
					type : 'post',
					dataType : 'json',
					beforeSend : function(){
						$('#btnSimpan').prop('disabled', true).addClass('btn-disabled');
					},
					success : function(obj){
						$('#btnSimpan').prop('disabled', false).removeClass('btn-disabled');
						$('#v_no_awal').val(obj.NO_BPKB);
						$('#v_reg_no_awal').val(obj.NREG_BPKB);
					},
					error: function(data){
				        $('#btnSimpan').prop('disabled', false).removeClass('btn-disabled');
						$('#v_no_awal').val(obj.NO_BPKB);
						$('#v_reg_no_awal').val(obj.NREG_BPKB);
						swal.fire('Error','Server Error','error');
				    }
				});
	}



</script>