<script>
	function getwitel() {
		var regional = $('[name=regional]').val()
		$.ajax({
			url: '<?php echo base_url() ?>Form/getwitel',
			type: 'get',
			data: {
				'regional': regional
			},
			success: function(data) {
				$('[name=witel]').html(data)
			}
		})
	}

	function getvalid() {
		var validation = $('[name=validation]').val()
		$.ajax({
			url: '<?php echo base_url() ?>Form/getvalid',
			type: 'get',
			data: {
				'validation': validation
			},
			success: function(data) {
				$('[name=invalid]').html(data)
			}
		})
	}

	function getidentity() {
		var ktp_validation = $('[name=ktp_validation]').val()
		$.ajax({
			url: '<?php echo base_url() ?>Form/getidentity',
			type: 'get',
			data: {
				'ktp_validation': ktp_validation
			},
			success: function(data) {
				$('[name=detail_ktp]').html(data)
			}
		})
	}

	function getcall() {
		var statuscall = $('[name=statuscall]').val()
		$.ajax({
			url: '<?php echo base_url() ?>Form/getcall',
			type: 'get',
			data: {
				'statuscall': statuscall
			},
			success: function(data) {
				$('[name=reasoncall]').html(data)
			}
		})
	}

	$(function() {
		$("#chanel").change(function() {
			if ($("#chanel").val() == "DIGITAL_LPC") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-1") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-2") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-3") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-4") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-5") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-6") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "LPTR-7") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_SOBAT") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LPBALI") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "Digital_MYIHCust") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_BUKALAPAK") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_INDIHOMECOID") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_IRMA147") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_KIOSK") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_KIOSQR") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_MKTAPC") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_MKTLFH") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_MKTLPC") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_MKTPAKETGURU") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_SHOPEE_OMNI") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_SMOCA") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_TOKOPEDIA_OMNI") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_CSA") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_CSA250") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LIVEPERSON") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LP-SMB") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_SOCMED") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_PENSIUNAN_KARYAWAN") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_PAKET_GURU") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_RUMAH_IBADAH") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_APC") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_BUMN") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LPGIG") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_KARTANU") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "STARCLICK") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LP250") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else if ($("#chanel").val() == "DIGITAL_LPCVS") {
				$("#validqc").hide().find(':input').attr('required', false);
			} else {
				$("#validqc").show().find(':input').attr('required', true);
			}
		});

		$("#chanel").change(function() {
			if ($("#chanel").val() == "DIGITAL_LPC") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-1") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-2") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-3") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-4") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-5") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-6") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "LPTR-7") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_SOBAT") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LPBALI") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "Digital_MYIHCust") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_BUKALAPAK") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_INDIHOMECOID") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_IRMA147") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_KIOSK") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_KIOSQR") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_MKTAPC") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_MKTLFH") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_MKTLPC") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_MKTPAKETGURU") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_SHOPEE_OMNI") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_SMOCA") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_TOKOPEDIA_OMNI") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_CSA") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_CSA250") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LIVEPERSON") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LP-SMB") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_SOCMED") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_PENSIUNAN_KARYAWAN") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_PAKET_GURU") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_RUMAH_IBADAH") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_APC") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_BUMN") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LPGIG") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_KARTANU") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "STARCLICK") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LP250") {
				$("#ktp").show().find(':input').attr('required', true);
			} else if ($("#chanel").val() == "DIGITAL_LPCVS") {
				$("#ktp").show().find(':input').attr('required', true);
			} else {
				$("#ktp").hide().find(':input').attr('required', false);
			}
		});

		$("#validation").change(function() {
			if ($("#validation").val() == "Valid" && $("#chanel").val() == "PARTNER_MYIP") {
				$("#ktp").show().find(':input').attr('required', true);
			} else {
				$("#ktp").hide().find(':input').attr('required', false);
			}
		});

		$("#ktp_validation").change(function() {
			if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LPC") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-1") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-2") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-3") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-4") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-5") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-6") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "LPTR-7") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_SOBAT") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LPBALI") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "Digital_MYIHCust") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_BUKALAPAK") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_INDIHOMECOID") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_IRMA147") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_KIOSK") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_KIOSQR") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_MKTAPC") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_MKTLFH") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_MKTLPC") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_MKTPAKETGURU") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_SHOPEE_OMNI") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_SMOCA") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_TOKOPEDIA_OMNI") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_CSA") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_CSA250") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LIVEPERSON") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LP-SMB") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_SOCMED") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_PENSIUNAN_KARYAWAN") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_PAKET_GURU") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_RUMAH_IBADAH") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_APC") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_BUMN") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LPGIG") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_KARTANU") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LP250") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else if ($("#ktp_validation").val() == "Invalid_Identity" && $("#chanel").val() == "DIGITAL_LPCVS") {
				$("#invalidcall").show().find(':input').attr('required', true);
			} else {
				$("#invalidcall").hide().find(':input').attr('required', false);
			}
		});
	});
</script>
