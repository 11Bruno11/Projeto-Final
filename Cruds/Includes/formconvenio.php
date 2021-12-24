<?php
use \App\Entity\Convenio;


$convenios = Convenio::getConvenio();

$resul = '';
foreach($convenios as $convenio){
    $resul .= '<tr>
    <td data-label="Nome Fantasia:">' . $convenio->nome_fantasia . '</td>
    <td data-label="Nome Empresa:">' . $convenio->nome_empresa . '</td>
    <td data-label="CNPJ:">' . $convenio->cnpj . '</td>
    <td data-label="E-mail:">' . $convenio->email . '</td>
    <td data-label="Nome do Contato:">' . $convenio->nome_cont . '</td>
    <td data-label="Homepage:">' . $convenio->homepage . '</td>
    <td data-label="Telefone:">' . $convenio->telefone . '</td>
    <td data-label="Celular:">' . $convenio->celular . '</td>
    <td data-label="Endereço:">' . $convenio->endereco . '</td>
    <td data-label="Número:">' . $convenio->numero. '</td>
    <td data-label="Complemento:">' . $convenio->complemento. '</td>
    <td data-label="Cidade:">' . $convenio->cidade. '</td>
    <td data-label="Estado:">' . $convenio->estado. '</td>
    <td data-label="Cep:">' . $convenio->cep. '</td>
    <td>
        <a href="editarConvenio.php?id_convenio='.$convenio->id_convenio.'">Atualizar</a>
        <a href="excluirConvenio.php?id_convenio='.$convenio->id_convenio.'">Deletar</a> 
    </td>
    </tr>';

}

?>
<main>
<div class="container">
            <div style="margin-bottom: 20px;">
                <h3><?=TITLE?></h3>
            </div>
            <div class="formPaciente">
                <form method="post" name="convenio">

                    <label for="nome_fantasia">Nome Fantasia:</label>
                    <input type="text" name="nome_fantasia" id="nome_fantasia">

                    <label for="nome_empresa">Nome da Empresa:</label>
                    <input type="text" name="nome_empresa" id="nome_empresa">

                    <label for="cnpj">CNPJ:</label>
                    <input type="text" name="cnpj" id="cnpj">

                    <label for="email">E-Mail:</label>
                    <input type="email" name="email" id="email">

                    <label for="contato">Nome do Contato:</label>
                    <input type="text" name="nome_cont" id="nome_cont">

                    <label for="homepage">Homepage:</label>
                    <input type="text" name="homepage" id="homepage">

                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone">

                    <label for="celular">Celular:</label>
                    <input type="tel" name="celular" id="celular">

                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="rua">

                    <label for="numero">Número:</label>
                    <input type="number" name="numero" id="numero">

                    <label for="cep">CEP:</label>
                    <input type="number" name="cep" id="cep" value= "">

                    <label for="complemento">Complemento:</label>
                    <input type="text" name="complemento" id="bairro">

                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade">

                    <label for="estado">Estado:</label>
                    <input type="text" name="estado" id="uf">

                    <button type="submit" class="btnCadastro" onclick="return validarconv()">Cadastrar</button>
    
                </form>
                <a href="cadastrarconv.php"><button type="submit" class="btnCadastro">Voltar</button></a>
                    
            </div>
            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOME EMPRESA</th>
                            <th>NOME FANTASIA</th>
                            <th>CNPJ</th>
                            <th>EMAIL</th>
                            <th>NOME CONTATO</th>
                            <th>HOMEPAGE</th>
                            <th>TELEFONE</th>
                            <th>CELULAR</th>
                            <th>ENDEREÇO</th>
                            <th>NUMERO</th>
                            <th>COMPLEMENTO</th>
                            <th>CIDADE</th>
                            <th>ESTADO</th>
                            <th>CEP</th>
                            <th>
                                <a href="cadastrarconv.php">Cadastrar</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?=$resul?>

                    </tbody>
                </table>
            </div>
        </div>
</main>