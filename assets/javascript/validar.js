/*Cadastro de Produtos - tela Produtos */
$(function() {
  $('#CadastroProduto').submit(function() {
      var obj = this;
      var form = $(obj);
      var dados = new FormData(obj);
      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: dados,
          processData: false,
          cache: false,
          contentType: false,
          success: function(data) {
              if (data == "ErroNome") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de nome está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK',
                  });
              }
              if (data == "ErroDescricao") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de descrição está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "ErroPreco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de preço está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "Erroquantidade") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao preencher campos',
                    text: 'O campo de Quantidade está vazio!',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
              }
              if (data == "Erroletra") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao preencher campos',
                    text: 'O campo de Quantidade não pode conter letras',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
              }
              if (data == "ErroFoto") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'Nenhuma foto foi selecionada!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "Sucesso") {
                  Swal.fire({
                      icon: 'success',
                      title: 'Cadastro realizado com sucesso!',
                      text: 'Deseja cadastrar novamente ?',
                          cancelButtonColor: "#d33",
                          cancelButtonText: 'Não',
                          showCancelButton: true,  
                          confirmButtonColor: "#3085d6",
                          confirmButtonText: 'Sim'
                  }).then((result) => {
                      if (result.value){
                        window.location.replace("");
                      }else{
                          window.location.replace("TelaProdutos");
                      }
                  })
              }
              if (data == "ErroBanco") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao cadastrar',
                    text: 'Entre em contato com a area de TI',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
            }
          }
      })
      return false;
  })
});

$(function() {
    $('#Vendas').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Erroquantidade") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Quantidade está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "Erroletra") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Quantidade não pode conter letras',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPrecoFinal") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço Final está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Erroselecionarcliente") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Selecionar um Cliente está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                      icon: 'success',
                      title: 'Venda realizado com sucesso!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value) {
                          window.location.replace("TelaVendas");
                      }
                  })
                }
                if (data == "ErroBanco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao efetuar uma venda',
                      text: 'Entre em contato com a area de TI',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
            }
        })
        return false;
    })
});

/*Cadastro de Produtos - tela Produtos */
$(function() {
    $('#CadastroProdutosresponsivo').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Erroquantidade") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Quantidade está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "Erroletra") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Quantidade não pode conter letras',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "ErroFoto") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'Nenhuma foto foi selecionada!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Cadastro realizado com sucesso!',
                        text: 'Deseja cadastrar novamente ?',
                            cancelButtonColor: "#d33",
                            cancelButtonText: 'Não',
                            showCancelButton: true,  
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: 'Sim'
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("");
                        }else{
                            window.location.replace("TelaProdutos");
                        }
                    })
                }
                if (data == "ErroBanco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao cadastrar',
                      text: 'Entre em contato com a area de TI',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
            }
        })
        return false;
    })
  });

/*Cadastro de Produtos - tela Produtos */
$(function() {
  $('#UpdateProduto').submit(function() {
      var obj = this;
      var form = $(obj);
      var dados = new FormData(obj);
      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: dados,
          processData: false,
          cache: false,
          contentType: false,
          success: function(data) {
              if (data == "ErroNome") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de nome está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK',
                  });
              }
              if (data == "ErroDescricao") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de descrição está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "ErroPreco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de preço está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "Erroquantidade") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao preencher campos',
                    text: 'O campo de Quantidade está vazio!',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
              }
              if (data == "Erroletra") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao preencher campos',
                    text: 'O campo de Quantidade não pode conter letras',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
              }
              if (data == "ErroFoto") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'Nenhuma foto foi selecionada!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
              if (data == "Sucesso") {
                  Swal.fire({
                    icon: 'success',
                    title: 'Edição realizado com sucesso!',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value) {
                        window.location.replace("TelaProdutos");
                    }
                })
              }
              if (data == "ErroBanco") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Erro ao Cadastrar',
                    text: 'Entre em contato com a area de TI',
                    confirmButtonColor: " #dc3545",
                    confirmButtonText: 'OK'
                });
            }
          }
      })
      return false;
  })
});

$(function() {
    $('#ExcluirProdutos').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "Excluir") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exclusão realizada com sucesso',
                        text: 'O produto selecionado não foi apagado permanentemente, a qualquer momento você pode ativalo novamente!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("TelaProdutos");
                        }
                    })
                }
                if (data == "ErroBanco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro',
                        text: 'Entre em contato com a area de TI',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
            }
        })
        return false;
    })
});


/*Cadastro de Clientes - tela Clientes */
$(function() {
    $('#cadastrocliente').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroEmail") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Email está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroCpf") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de CPF está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroTelefone") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Telefone está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                      icon: 'success',
                      title: 'Edição realizado com sucesso!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value) {
                          window.location.replace("TelaClientes");
                      }
                  })
                }
                if (data == "ErroBanco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao Cadastrar',
                      text: 'Entre em contato com a area de TI',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
            }
        })
        return false;
    })
});

/*Cadastro de Clientes - tela Clientes */
$(function() {
    $('#cadastroFuncionarioresponsivo').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroEmail") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Email está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroCpf") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de CPF está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroTelefone") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Telefone está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                      icon: 'success',
                      title: 'Edição realizado com sucesso!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value) {
                          window.location.replace("TelaClientes");
                      }
                  })
                }
                if (data == "ErroBanco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao Cadastrar',
                      text: 'Entre em contato com a area de TI',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
            }
        })
        return false;
    })
});

/*Update de Clientes - tela Clientes */
$(function() {
    $('#UpdateClientes').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroEmail") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de Email está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroCpf") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de CPF está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroTelefone") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao preencher campos',
                      text: 'O campo de Telefone está vazio!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                      icon: 'success',
                      title: 'Edição realizado com sucesso!',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value) {
                          window.location.replace("TelaClientes");
                      }
                  })
                }
                if (data == "ErroBanco") {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Erro ao Cadastrar',
                      text: 'Entre em contato com a area de TI',
                      confirmButtonColor: " #dc3545",
                      confirmButtonText: 'OK'
                  });
              }
            }
        })
        return false;
    })
});

$(function() {
    $('#ExcluirCliente').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "Excluir") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Exclusão realizada com sucesso',
                        text: 'O produto selecionado não foi apagado permanentemente, a qualquer momento você pode ativalo novamente!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("TelaClientes");
                        }
                    })
                }
                if (data == "ErroBanco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro',
                        text: 'Entre em contato com a area de TI',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
            }
        })
        return false;
    })
});