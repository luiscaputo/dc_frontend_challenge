// Input Validations
function exibeMensagem(confirmButtonText = 'Voltar', text = '')
{
  return Swal.fire({
    icon: 'warning',
    title: 'Oops...',
    //showConfirmButton: false,
    confirmButtonText,
    text,
    didClose: () =>
    {
      $('#modalPesquisa').find('.btn-close').trigger('click');
    }
  })
}