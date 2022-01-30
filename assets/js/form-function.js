(function (editForm) {
	editForm(".edit-modal").on("click", function () {
		editForm("#idEdit").val(editForm(this).data("id"));
		editForm("#trackidEdit").val(editForm(this).data("trackid"));
		editForm("#channelEdit").val(editForm(this).data("channel"));
		editForm("#regionalEdit").val(editForm(this).data("regional"));
		editForm("#witelEdit").val(editForm(this).data("witel"));
		editForm("#validasiEdit").val(editForm(this).data("validasi"));
		editForm("#ModalEdit").modal("show");
	});

	editForm("#buttonEdit").on("click", function () {
		editForm.ajax({
			type: "POST",
			url: baseurl + "form/update",
			dataType: "JSON",
			data: {
				id: editForm("#idEdit").val(),
				trackid: editForm("#trackidEdit").val(),
				channel: editForm("#channelEdit").val(),
				regional: editForm("#regionalEdit").val(),
				witel: editForm("#witelEdit").val(),
				validasi: editForm("#validasiEdit").val(),
			},
			success: function (response) {
				editForm("#ModalEdit").modal("hide");
				Swal.fire({
					title: "Edit Success",
					text: "Please Check again",
					icon: "success",
					showCancelButton: false,
				}).then((result) => {
					if (result.isConfirmed) {
						location.reload();
					}
				});
			},
		});
		return false;
	});
	// Filter Data

	$("#btnFilter").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap").attr("action", baseurl + "support");
			$("#formRekap").attr("method", "POST");
			$("#formRekap").submit();
		}
	});

$("#btnFilter1").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap1").attr("action", baseurl + "support/verifikasi");
			$("#formRekap1").attr("method", "POST");
			$("#formRekap1").submit();
		}
	});

$("#btnFilter2").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap2").attr("action", baseurl + "support/pda");
			$("#formRekap2").attr("method", "POST");
			$("#formRekap2").submit();
		}
	});
$("#btnFilter3").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap3").attr("action", baseurl + "support/newsf");
			$("#formRekap3").attr("method", "POST");
			$("#formRekap3").submit();
		}
	});
$("#btnFilter4").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap4").attr("action", baseurl + "support/wpi");
			$("#formRekap4").attr("method", "POST");
			$("#formRekap4").submit();
		}
	});
$("#btnFilter5").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap5").attr("action", baseurl + "support/sobat");
			$("#formRekap5").attr("method", "POST");
			$("#formRekap5").submit();
		}
	});
	$("#btnFilter6").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap6").attr("action", baseurl + "support/warrior");
			$("#formRekap6").attr("method", "POST");
			$("#formRekap6").submit();
		}
	});
	$("#btnFilter7").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap7").attr("action", baseurl + "support/existing");
			$("#formRekap7").attr("method", "POST");
			$("#formRekap7").submit();
		}
	});
$("#btnFilter8").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap8").attr("action", baseurl + "support/point");
			$("#formRekap8").attr("method", "POST");
			$("#formRekap8").submit();
		}
	});
	$("#btnFilter9").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap9").attr("action", baseurl + "support/botpoint");
			$("#formRekap9").attr("method", "POST");
			$("#formRekap9").submit();
		}
	});
$("#btnFilter10").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap10").attr("action", baseurl + "support/websobat");
			$("#formRekap10").attr("method", "POST");
			$("#formRekap10").submit();
		}
	});

	// Export to Excell

	$("#btnExportExcell").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap").attr("action", baseurl + "support/export");
			$("#formRekap").attr("method", "POST");
			$("#formRekap").submit();
		}
		return false;
	});
$("#btnExportExcell1").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap1").attr("action", baseurl + "Support/export1");
			$("#formRekap1").attr("method", "POST");
			$("#formRekap1").submit();
		}
		return false;
	});

$("#btnExportExcell2").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap2").attr("action", baseurl + "Support/export2");
			$("#formRekap2").attr("method", "POST");
			$("#formRekap2").submit();
		}
		return false;
	});
$("#btnExportExcell3").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap3").attr("action", baseurl + "Support/export3");
			$("#formRekap3").attr("method", "POST");
			$("#formRekap3").submit();
		}
		return false;
	});
$("#btnExportExcell4").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap4").attr("action", baseurl + "Support/export4");
			$("#formRekap4").attr("method", "POST");
			$("#formRekap4").submit();
		}
		return false;
	});
$("#btnExportExcell5").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap5").attr("action", baseurl + "Support/export5");
			$("#formRekap5").attr("method", "POST");
			$("#formRekap5").submit();
		}
		return false;
	});
	$("#btnExportExcell6").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap6").attr("action", baseurl + "Support/export6");
			$("#formRekap6").attr("method", "POST");
			$("#formRekap6").submit();
		}
		return false;
	});
$("#btnExportExcell7").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap7").attr("action", baseurl + "Support/export7");
			$("#formRekap7").attr("method", "POST");
			$("#formRekap7").submit();
		}
		return false;
	});
$("#btnExportExcell8").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap8").attr("action", baseurl + "Support/export8");
			$("#formRekap8").attr("method", "POST");
			$("#formRekap8").submit();
		}
		return false;
	});
$("#btnExportExcell9").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap9").attr("action", baseurl + "Support/export9");
			$("#formRekap9").attr("method", "POST");
			$("#formRekap9").submit();
		}
		return false;
	});
$("#btnExportExcell10").on("click", function () {
		if (
			$("#date1").val() === "" ||
			$("#date2").val() === ""
		) {
			Swal.fire("Date cannot be empty", "-_-!", "error");
		} else {
			$("#formRekap10").attr("action", baseurl + "Support/export10");
			$("#formRekap10").attr("method", "POST");
			$("#formRekap10").submit();
		}
		return false;
	});


	// $("#regionalEdit").on('change', function(){
	// 	$('#cityEdit').removeClass("d-none");
	// });
})(jQuery);
