<?php
use \App\Entity\Medico;


$medicos = Medico::getMedico();

$resul = '';
foreach($medicos as $medico){
    $resul .= '<tr>
    <td data-label="Nome:">' . $medico->nome_medico . '</td>
    <td data-label="Rua:">' . $medico->rua_medico . '</td>
    <td data-label="Número:">' . $medico->numero_medico . '</td>
    <td data-label="Complemento:">' . $medico->complemento_medico . '</td>
    <td data-label="Bairro:">' . $medico->bairro_medico . '</td>
    <td data-label="Cep:">' . $medico->cep_medico . '</td>
    <td data-label="E-mail:">' . $medico->email_medico . '</td>
    <td data-label="Telefone:">' . $medico->telefone_fixo_medico . '</td>
    <td>
        <a href="editar.php?id_medico='.$medico->id_medico.'">Atualizar</a>
        <a href="excluir.php?id_medico='.$medico->id_medico.'">Deletar</a> 
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
                <form method="POST" name="medico">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome_medico" id="nome_medico" required >
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua_medico" id="rua" required >
                    <label for="numero">Número:</label>
                    <input type="number" name="numero_medico" id="numero_medico" required >
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento_medico" id="complemento_medico" >
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro_medico" id="bairro" required >
                    <label for="cep">Cep:</label>
                    <input type="number" value="" name="cep_medico" id="cep" required >
                    <label for="email">E-mail:</label>
                    <input type="email" name="email_medico" id="email_medico" required >
                    <label for="telefoneFixo">Telefone:</label>
                    <input type="tel" name="telefone_fixo_medico" id="telefone_fixo_medico">
                    <div style="text-align: center;">
                        <button type="submit" class="btnCadastro" onclick="return validarmedico()">Cadastrar</button>
                    </div>
                </form>
            </div>


            <div class="tableContainer">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>RUA</th>
                            <th>NÚMERO</th>
                            <th>COMPLEMENTO</th>
                            <th>BAIRRO</th>
                            <th>CEP</th>
                            <th>EMAIL</th>
                            <th>TELEFONE</th>
                            <th>
                                <a href="cadastrarmedic.php">Cadastrar</a>
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