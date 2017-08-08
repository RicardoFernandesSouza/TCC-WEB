/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-resp').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('resp');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
