<script>
	$(document).ready(() => {
		$.ajax({
			url: '<?= base_url('admin/get_monthly_data'); ?>',
			method: 'get',
			dataType: 'json',
		}).fail(e => {
			console.log(e.responseText)
			Swal.fire({
				icon: 'error',
				title: 'Terjadi Kesalahan',
				html: e.responseText,
			})
		}).done(e => {
			$('#data_monthly').html(e.data)
			$('#spinner_monthly').fadeOut()
		})

		setTimeout(() => {
			$('#spinner_yearly').fadeOut()
		}, 30000)

		$.ajax({
			url: '<?= base_url('admin/get_yearly_data'); ?>',
			method: 'get',
			dataType: 'json',
		}).fail(e => {
			console.log(e.responseText)
			Swal.fire({
				icon: 'error',
				title: 'Terjadi Kesalahan',
				html: e.responseText,
			})
		}).done(e => {
			console.log(e)
			$('#data_yearly').html(e.data)
		})
	})
</script>
