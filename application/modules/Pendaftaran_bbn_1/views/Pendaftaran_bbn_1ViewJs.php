<script type="text/javascript">
	$(document).ready(function(){

		$('#pemohon').select2();
		$('.tanggal').datepicker({
			format: 'dd/mm/yyyy',
		});


		var prntTable = $('#mytable').DataTable({
			"searching": true
		});

		$('input[name="pemohon_jenis"]').on('click', function(){
			$.ajax({
					url : '<?php echo site_url($this->controller."/get_pemohon") ?>',
					data : { pemohon_jenis : $(this).val() },
					type : 'post',
					beforeSend : function(){
						swal.fire({
									title: 'Reload Data . . ',
								    allowEscapeKey: false,
								    allowOutsideClick: false,
								});
						      swal.showLoading();
					},
					success : function(obj){
						swal.close();
						$("#pemohon").html(obj);
					},
					error: function(){
						swal.fire('Error','Server Error','error');
				    }
				});
		});



		$('#btnCariServer').click(function(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/get_data_from_server") ?>',
					data : $('#form_data').serialize(),
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
							  		'<button class="btn btn-danger btn-sm" onclick="hapus_data(\''+item.DAFT_ID+'\')" type="button"><i class="flaticon-delete"></i></button> <button class="btn btn-primary btn-sm" onclick="edit_data([\''+item.BARCODE+'\',\''+item.DAFT_ID+'\',\''+item.DIPLOMAT+'\',\''+item.NO_BPKB+'\',\''+item.NO_FAKTUR+'\',\''+item.NO_RANGKA+'\',\''+item.PEMOHON_ID+'\',\''+item.PEMOHON_JENIS+'\',\''+item.SUDAH_DIPROSES+'\',\''+item.TGL_DAFTAR+'\',\''+item.TIPE_DAFTARAN+'\' ])" type="button"><i class="flaticon-edit"></i></button>',
									item.NO_BPKB, 
									item.NO_RANGKA,
									item.NO_FAKTUR,
									item.BARCODE,
									item.PEMOHON_NAMA,
									item.DIPLOMAT,
									item.SUDAH_DIPROSES
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


		$('#btnSimpan').click(function(){

			$.ajax({
					url : '<?php echo site_url($this->controller."/simpan") ?>',
					data : $('#form_data').serialize(),
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

							  swal.fire({	
							  	title : 'Selesai',
							  	text : obj.message,
							  	type : 'success'
							  }).then(function() {
							  	$('#vBarcodeBank').val('');
								$('#vNoRangka').val('');
								$('#daftaran_id').val('');
								$('#checkbox').prop('checked', false);
							  	$('#btnCariServer').click();
							  });
							  
						}
						else {
							
							swal.fire('Error',obj.message,'error');
						}
					},
					error: function(){
				        
						swal.fire('Error','Server Error','error');
				    }
				});

		});


		
	});


	function edit_data(arr){



		$('#vBarcodeBank').val(arr[0]);
		$('#vNoRangka').val(arr[5]);
		$('#daftaran_id').val(arr[1]);


		if (arr[2]==1) {
			$('#checkbox').prop('checked', true);
		}else{
			$('#checkbox').prop('checked', false);
		}

		
		if (arr[7]=="PRIBADI") {
			if($('#pjPribadi').is(':checked')) { 
				$('#pemohon').val(arr[6]).trigger('change');
			 }else{
				$("#pjPribadi").prop('checked', true);
				get_pemohon('PRIBADI', arr[6]);
				

			 }
		}else{
			if($('#pjPribadi').is(':checked')) {
				$('#pemohon').val(arr[6]).trigger('change');
			}else{
				$("#pjBirojasa").prop('checked', true);
				get_pemohon('BIROJASA', arr[6]);
			}
			
		}
		
		
	}


	function hapus_data(DAFT_ID){

		swal.fire({
		    title: "Anda yakin?",
		    text: "Anda akan menghapus data ini!",
		    showCancelButton: true,
		    confirmButtonColor: '#DD6B55',
		    confirmButtonText: 'Hapus!',
		    cancelButtonText: "Batalkan!"
		 }).then(result => {

		   if (result.value) {

		   	$.ajax({
					url : '<?php echo site_url($this->controller."/hapus") ?>',
					data : {DAFT_ID : DAFT_ID},
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
							  swal.fire({	
							  	title : 'Selesai',
							  	text : obj.message,
							  	type : 'success'
							  }).then(function() {
							  	$('#btnCariServer').click();
							  });
							  
						
					},
					error: function(){
				        
						swal.fire('Error','Server Error','error');
				    }
				});


		    } else {
		      swal("Dibatalkan", "Data anda tidak jadi dihapus", "error");
		    }
		 });
	}


	function get_pemohon(pemohon, value){
		$.ajax({
					url : '<?php echo site_url($this->controller."/get_pemohon") ?>',
					data : { pemohon_jenis : pemohon },
					type : 'post',
					beforeSend : function(){
						swal.fire({
									title: 'Reload Data . . ',
								    allowEscapeKey: false,
								    allowOutsideClick: false,
								});
						      swal.showLoading();
					},
					success : function(obj){
						swal.close();
						$("#pemohon").html(obj);
						$('#pemohon').val(value).trigger('change');
					},
					error: function(){
						swal.fire('Error','Server Error','error');
				    }
				});
	}


	function reset_form(){
		$('#vBarcodeBank').val('');
		$('#vNoRangka').val('');
		$('#daftaran_id').val('');
		$('#checkbox').prop('checked', false);
	}

</script>