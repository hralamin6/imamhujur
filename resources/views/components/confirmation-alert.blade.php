<script>
    window.addEventListener('show-form', event => {
        $('#form').modal(event.detail.action);
    })
    window.addEventListener('showDeleteConfirmation', event => {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
          Livewire.emit('deleteConfirmed')
      }
    })
  })
    window.addEventListener('showSingleDeleteConfirmation', event => {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
          Livewire.emit('singleDeleteConfirmed')
      }
    })
  })
  window.addEventListener('deleted', event => {
    Swal.fire(
      'Deleted!',
      event.detail.message,
      'success'
    )
  })
</script>
