$('#delete-modal-resi').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('residencia');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})