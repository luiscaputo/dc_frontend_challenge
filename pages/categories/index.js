const baseURL = '127.0.0.1:8000/api/';

function handleListCategories()
{
  $.ajax({
    type: "GET",
    url: `${baseURl}categories`,
    data: {},
    dataType: "json",
    success: function (response)
    {
      //   console.log("Success: ", response);
      const { data } = response;

      console.log(data);
    },
    error: function (response)
    {
      console.log("Error: ", response);
    },
  });
}

function handleCreateCategory(event)
{
  event.preventDefault();

  $.ajax({
    type: "POST",
    url: `${baseURl}categories`,
    data: $(this).serialize(),
    dataType: "JSON",
    processData: false,
    success: function (response)
    {

      const { message, success } = response;

      console.log(message, success);
    },
    error: function (response)
    {
      const { responseJSON: { message, success } } = response;
      // console.log("Error: ", response);
      console.log(message, success);

      if (!success)
        return showMessage('Voltar', message);

    },
  });
}

function showMessage(confirmButtonText = 'Voltar', text = '')
{
  return Swal.fire({
    icon: 'warning',
    title: 'Oops...',
    confirmButtonText,
    text,
    didClose: () =>
    {
      $('#modalPesquisa').find('.btn-close').trigger('click');
    }
  })
}