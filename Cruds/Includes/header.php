<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://drive.google.com/uc?export=view&id=1JTudJwEhtIXupbrx4qs2cnnhqPBrCqfA">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script type="text/javascript"> 

        function validarconv(){
            var nome_fantasia = convenio.nome_fantasia.value;
            var nome_empresa = convenio.nome_empresa.value;
            var cnpj = convenio.cnpj.value;
            var email = convenio.email.value;
            var nome_cont = convenio.nome_cont.value;
            var telefone = convenio.telefone.value;
            var celular = convenio.celular.value;
            var numero = convenio.numero.value;
            var cep = convenio.cep.value;
            var complemento = convenio.complemento.value;

            if(nome_fantasia == ""){
                alert('Preencha o campo Nome Fantasia.')
                convenio.nome_fantasia.focus();
                return false;
            }
            if(nome_empresa == ""){
                alert('Preencha o campo Nome Empresa.')
                convenio.nome_empresa.focus();
                return false;
            }
            if(cnpj == ""){
                alert('Preencha o campo CNPJ.')
                convenio.cnpj.focus();
                return false;
            }
            if(email == ""){
                alert('Preencha o campo Email.')
                convenio.email.focus();
                return false;
            }
            if(nome_cont == ""){
                alert('Preencha o campo Nome do Contato.')
                convenio.nome_cont.focus();
                return false;
            }
            if(telefone == ""){
                alert('Preencha o campo Telefone.')
                convenio.telefone.focus();
                return false;
            }
            if(celular == ""){
                alert('Preencha o campo Celular.')
                convenio.celular.focus();
                return false;
            }
            if(numero == ""){
                alert('Preencha o campo Número.')
                convenio.numero.focus();
                return false;
            }
            if(cep == ""){
                alert('Preencha o campo CEP.')
                convenio.cep.focus();
                return false;
            }
            if(complemento == ""){
                alert('Preencha o campo Complemento.')
                convenio.complemento.focus();
                return false;
            }
        }

        function validarmedico(){
            var nome = medico.nome_medico.value;
            var numero_medico = medico.numero_medico.value;
            var complemento_medico = medico.complemento_medico.value;
            var cep_medico = medico.cep_medico.value;
            var email_medico = medico.email_medico.value;
            var telefone_fixo_medico = medico.telefone_fixo_medico.value;
            
            if(nome == ""){
                alert('Preencha o campo Nome.')
                medico.nome.focus();
                return false;
            }

            if(numero_medico == ""){
                alert('Preencha o campo Número.')
                medico.numero_medico.focus();
                return false;
            }

            if(complemento_medico == ""){
                alert('Preencha o campo Complemento.')
                medico.complemento_medico.focus();
                return false;
            }

            if(cep_medico == ""){
                alert('Preencha o campo CEP.')
                medico.cep_medico.focus();
                return false;
            }

            if(email_medico == ""){
                alert('Preencha o campo Email.')
                medico.email_medico.focus();
                return false;
            }

            if(telefone_fixo_medico == ""){
                alert('Preencha o campo Telefone.')
                medico.telefone_fixo_medico.focus();
                return false;
            }
        }

        function validar(){
            var nome = paciente.nome_paciente.value;
            var numero = paciente.numero.value;
            var cep = paciente.cep.value;
            var email = paciente.email.value;
            var telefone = paciente.telefone.value;
            
            if(nome == ""){
                alert('Preencha o campo Nome.');
                paciente.nome.focus();
                return false;
            }

            if(numero == ""){
                alert('Preencha o campo Numero.');
                paciente.nome.focus();
                return false;
            }

            if(cep == ""){
                alert('Preencha o campo CEP.');
                paciente.nome.focus();
                return false;
            }

            if(email == ""){
                alert('Preencha o campo Email.');
                paciente.nome.focus();
                return false;
            }

            if(telefone == ""){
                alert('Preencha o campo Telefone.');
                paciente.nome.focus();
                return false;
            }
        }
    </script>

    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

</head>

    <body>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cadastrarpac.php" class="nav-link">
                        <i class="fas fa-address-card"></i>
                        <span class="link-text">Paciente</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cadastrarmedic.php" class="nav-link">
                        <i class="fas fa-user-md"></i>
                        <span class="link-text">Médico</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cadastrarconv.php" class="nav-link">
                        <i class="fas fa-file-medical"></i>
                        <span class="link-text">Convênio</span>
                    </a>
                </li>
    
            </ul>
        </nav>
