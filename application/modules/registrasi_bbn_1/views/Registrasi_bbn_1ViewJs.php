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

		$.fn.select2.defaults.set("width", '100%');

		$('#merk').select2();
		$('#jenis').select2();
		$('#model').select2();
		$('#pekerjaan').select2();
		$('#wilayah_polres').select2();
		$('#jenis_daftaran').select2();
		$('#pemohon').select2();
		$('#cara_impor').select2();

		  $('#jenis').change(function(){

	  		$.ajax({
	  			url : '<?php echo site_url("general/get_model") ?>',
	  			data : {id_jenis : $(this).val() },
	  			type : 'post',
	  			success : function(htmldata){
	  					$("#model").html(htmldata);
	  			}
	  		});


	  });


		  $("#norangka").on("keyup", function(event) {
      if (event.currentTarget.value.length == 17) {
        $.ajax({
            url : '<?php echo site_url("$this->controller/get_data_noka") ?>',
           dataType : 'json',
            type : 'post',
            data : {  no_rangka : $("#norangka").val()  },
            beforeSend : function(){
           						swal.fire({
									title: 'Mohon Tunggu . . ',
								    allowEscapeKey: false,
								    allowOutsideClick: false,
								});
						      swal.showLoading();
            },
            success : function(obj) {
               
            if(obj.error == 1) {
            	swal.close();
            	// console.log(obj);
            	$('#no_resi_pembayaran').val(obj.data.BARCODE);
            	$('#no_faktur').val(obj.detail.NO_FAKTUR);
            	$('#no_mesin').val(obj.detail.NO_MESIN);
            	
            	$('#tipe').val(obj.detail.TIPE);
            	// $('#no_faktur').val(obj.detail.JENIS);
            	// $('#no_faktur').val(obj.detail.MODEL);
            	$('#warna').val(obj.detail.WARNA);
            	$('#nama_pemilik').val(obj.detail.NAMA_PEMILIK);
            	$('#no_identitas').val(obj.detail.KTP);
            	$('#alamat_pemilik').val(obj.detail.ALAMAT_PEMILIK);
            	// $('#no_faktur').val(obj.detail.KELURAHAN);
            	// $('#no_faktur').val(obj.detail.KECAMATAN);
            	// $('#no_faktur').val(obj.detail.KOTA);
            	// $('#no_faktur').val(obj.detail.PROPINSI);
            	$('#kode_pos').val(obj.detail.KODE_POS);
            	// $('#no_faktur').val(obj.detail.PEKERJAAN);
            	$('#no_ponsel').val(obj.detail.PHONE);
            	// $('#tanggal_entry').val(obj.detail.TGL_FAKTUR);
            	$('#thn_rakit').val(obj.detail.THN_PERAKITAN);
            	$('#thn_buat').val(obj.detail.THN_PEMBUATAN);
            	$('#silinder').val(obj.detail.CC);
            	$('#no_pabean').val(obj.detail.NO_FORM_A);
            	$('#tanggal_pabean').val(obj.detail.TGL_FORM_A);
            	$('#no_pib').val(obj.detail.NO_PIB);
            	$('#no_sut').val(obj.detail.NO_SUT);
            	$('#no_srut').val(obj.detail.NO_SRUT);
            	$('#no_tpt').val(obj.detail.NO_TPT);
            	$('#jml_roda').val(obj.detail.JML_RODA);
            	$('#jml_sumbu').val(obj.detail.JML_SUMBU);
            	$('#bhn_bakar').val(obj.detail.BAHAN_BAKAR);

            	
            	get_merk(obj.detail.MEREK);
            	get_jenis(obj.detail.JENIS, obj.detail.MODEL);
            	// get_model(obj.detail.MODEL);



               
                
            }else{
                swal.fire('Error', obj.message, 'error');
                alert('shit');
                reset_form();
                // $("#formCari").get(0).reset();
                // $("#formCari")[0].reset();
            }


            }, 
            error : function (obj){
            	swal.fire('Error', 'Server Error', 'error');
            	reset_form();
            	// $("#formCari")[0].reset();
            	// $("#formCari").get(0).reset();
            }

       });
      }
    });

		  $('#provinsi').change(function(){

	  		$.ajax({
	  			url : '<?php echo site_url("general/get_kabupaten") ?>',
	  			data : {provinsi : $(this).val() },
	  			type : 'post',
	  			success : function(htmldata){
	  					$("#kabupaten").html(htmldata);
	  			}
	  		});


	  });

		   $('#kabupaten').change(function(){

	  		$.ajax({
	  			url : '<?php echo site_url("general/get_kecamatan") ?>',
	  			data : {kabupaten : $(this).val() },
	  			type : 'post',
	  			success : function(htmldata){
	  					$("#kecamatan").html(htmldata);
	  			}
	  		});


	  });

		    $('#kecamatan').change(function(){

	  		$.ajax({
	  			url : '<?php echo site_url("general/get_kelurahan") ?>',
	  			data : {kecamatan : $(this).val() },
	  			type : 'post',
	  			success : function(htmldata){
	  					$("#kelurahan").html(htmldata);
	  			}
	  		});


	  });


		     $('#jenis').change(function(){
		     	realod_model($(this).val());
	  		// $.ajax({
	  		// 	url : '<?php echo site_url("general/get_kelurahan") ?>',
	  		// 	data : {kecamatan : $(this).val() },
	  		// 	type : 'post',
	  		// 	success : function(htmldata){
	  		// 			$("#kelurahan").html(htmldata);
	  		// 	}
	  		// });


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
	

	function get_merk(merk){
		$.ajax({
	  			url : '<?php echo site_url("general/get_id_merk") ?>',
	  			data : {merk : merk },
	  			type : 'post',
	  			dataType: 'json',
	  			success : function(obj){
	  				// alert('berhasil');
	  				$('#merk').val(obj.MERK_ID).trigger('change');
	  					// return obj.MERK_ID;
	  			}
	  		});
	}

	function get_jenis(jenis, model){
		$.ajax({
	  			url : '<?php echo site_url("general/get_id_jenis") ?>',
	  			data : {jenis : jenis },
	  			type : 'post',
	  			dataType: 'json',
	  			success : function(obj){
	  				// alert('berhasil');
	  				$('#jenis').val(obj.JENIS_ID).trigger('change');
	  				// realod_model(obj.JENIS_ID);
	  				get_model(obj.JENIS_ID, model)

	  					// return obj.MERK_ID;
	  			}
	  		});
	}

	function get_model(id_jenis, model){

		$.ajax({
				  			url : '<?php echo site_url("general/get_model") ?>',
				  			data : {id_jenis : id_jenis },
				  			type : 'post',
				  			success : function(htmldata){
				  					$("#model").html(htmldata);
				  					$.ajax({
							  			url : '<?php echo site_url("general/get_id_model") ?>',
							  			data : {model : model, id_jenis : id_jenis },
							  			type : 'post',
							  			dataType: 'json',
							  			success : function(obj){
							  				// alert('berhasil');

							  				$('#model').val(obj.MODEL_ID).trigger('change');
							  					// return obj.MERK_ID;
							  			}
							  		});
				  			}
				  		});

		
	}



	function realod_model(id_jenis){
		$.ajax({
	  			url : '<?php echo site_url("general/get_model") ?>',
	  			data : {id_jenis : id_jenis },
	  			type : 'post',
	  			success : function(htmldata){
	  					$("#model").html(htmldata);
	  			}
	  		});
	}

	// function hide_other_tab(){
	// 	alert('seslsai load');
	// 	$('#identitas_pemilik').removeClass('active');
	// 	$('#identitas_pabean').removeClass('active');
	// }

	function reset_form(){
				$('#no_resi_pembayaran').val('');
            	$('#no_faktur').val('');
            	$('#no_mesin').val('');
            	
            	$('#tipe').val('');
            	// $('#no_faktur').val('');
            	// $('#no_faktur').val('');
            	$('#warna').val('');
            	$('#nama_pemilik').val('');
            	$('#no_identitas').val('');
            	$('#alamat_pemilik').val('');
            	// $('#no_faktur').val('');
            	// $('#no_faktur').val('');
            	// $('#no_faktur').val('');
            	// $('#no_faktur').val('');
            	$('#kode_pos').val('');
            	// $('#no_faktur').val('');
            	$('#no_ponsel').val('');
            	// $('#tanggal_entry').val('');
            	$('#thn_rakit').val('');
            	$('#thn_buat').val('');
            	$('#silinder').val('');
            	$('#no_pabean').val('');
            	$('#tanggal_pabean').val('');
            	$('#no_pib').val('');
            	$('#no_sut').val('');
            	$('#no_srut').val('');
            	$('#no_tpt').val('');
            	$('#jml_roda').val('');
            	$('#jml_sumbu').val('');
            	$('#bhn_bakar').val('');
            	$('#merk').val('').trigger('change');
            	$('#jenis').val('').trigger('change');
            	$('#model').val('').trigger('change');
	}

</script>