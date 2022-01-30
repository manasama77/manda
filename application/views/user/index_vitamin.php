<script>
	function editProfile() {
		$.ajax({
			url: '<?= base_url('user/get_data_user'); ?>',
			method: 'get',
			dataType: 'json',
		}).fail(e => {
			console.log(e)
			Swal.fire({
				icon: 'error',
				title: 'Terjadi Kesalahan',
				html: e.responseText,
			})
		}).done(e => {
			$('#id_prener').val(e.data.id_prener)
			$('#user_telegram').val(e.data.user_telegram)
			$('#id_telegram').val(e.data.id_telegram)
			$('#no_hp').val(e.data.no_hp)
			$('#modal_edit_identitas').modal('show')
		})
	}
</script>
