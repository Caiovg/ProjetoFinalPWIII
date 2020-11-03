$(function(){
    $('#login').submit(function(){//se vc quiser fazer alguma validção de submit vc pode fazer de um onclick
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
            success: function(data){
                if(data == "ErroUser"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário ou Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }   
                if(data == "ErroPass"){
                  Swal.fire({
                    title: 'Erro ao preencher campos!',
                    text: 'Campo Senha vazio!',
                    icon: 'error',
                    confirmButtonText: 'Legal, vou refazer'
                });
                }   
                if(data == "SucessoCliente"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("TelaCliente");
                    }
                  })
                }
                if(data == "SucessoFuncionario"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("../view/TelaFuncionario.php");
                    }
                  });
                }
                if(data == "SucessoADM"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("../view/TelaAdm.php");
                    }
                  });
                }      
                if(data == "FalhaLogin"){
                  Swal.fire({
                    title: 'ERRO!',
                    text: 'Usuário ou senha inválidos!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                  });
                }   
            },//success
        });//ajax
        return false;
    });
});

$(function(){
    $('#Cadastro').submit(function(){
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
        success: function(data){
          if(data == "camposvazios"){
            Swal.fire({
                title: 'Erro ao preencher os campos!',
                text: 'Preencha todos os campos obrigatorios!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNome"){
            Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo Nome Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroSobrenome"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Sobrenome Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNomedoUsuario"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo UserName Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroUserNameExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'UserName já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCPF"){
                Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo CPF Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
            if(data == "CPfdeve11"){
              Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo CPF deve conter 11 digitos!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
              });
          }
          if(data == "ErroCPFExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'CPF já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNascimento"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nascimento Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRG"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo RG Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRGExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'RG já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelular"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Celular Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelularExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Celular já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }      
          if(data == "ErroEmail"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Email Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEmailExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Email já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCep"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Cep Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEndereco"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Endereço Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNumero"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "Erroletra"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero não pode conter letras ou caracteres especiais!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroBairro"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Bairro Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "Errocidade"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Cidade Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "Errouf"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo UF Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroConfisenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Confirme sua Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenhasDiferentes"){
              Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'As Senhas deve ser iguais!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
            if(data == "ErroCadastro"){
              Swal.fire({
                title: 'Erro ao efetuar cadastrar!',
                text: 'Não foi possivel efetuar o cadastro! Tente novamente',
                icon: 'error',
                confirmButtonText: 'OK'
                });
            }           
            if(data == "SucessoCliente"){
              Swal.fire({
                title: 'Cadastro realizado com sucesso!',
                icon: 'success',
                confirmButtonText: 'OK'
              }).then((result) => {
                if (result.value){
                  window.location.replace("login");
                }
              })
            }            
        },//success
      });//ajax
      return false;
    });
  });
/*Cadastro de itens - tela Itens */
$(function() {
  $('#CadastroItens').submit(function() {
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
                          window.location.replace("TelaItens");
                      }
                  })
              }
          }
      })
      return false;
  })
});