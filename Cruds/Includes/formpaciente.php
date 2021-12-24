<?php
use \App\Entity\Paciente;


$pacientes = Paciente::getPaciente();

$resul = '';
foreach($pacientes as $paciente){
    $resul .= '<tr>
    <td data-label="Nome:">' . $paciente->nome_paciente . '</td>
    <td data-label="Rua:">' . $paciente->rua. '</td>
    <td data-label="Número:">' . $paciente->numero. '</td>
    <td data-label="Complemento:">' . $paciente->complemento. '</td>
    <td data-label="Bairro:">' . $paciente->bairro. '</td>
    <td data-label="Cep:">' . $paciente->cep. '</td>
    <td data-label="E-mail:">' . $paciente->email . '</td>
    <td data-label="Telefone:">' . $paciente->telefone . '</td>
    <td>
        <a href="editarPaciente.php?id_paciente='.$paciente->id_paciente.'">Atualizar</a>
        <a href="excluirPaciente.php?id_paciente='.$paciente->id_paciente.'">Deletar</a> 
    </td>
    </tr>';
}

?>
<main>
    <div class="container">
        <div><h3><?=TITLE?></h3></div>
        <form class="formPaciente" method="post" name="paciente">
        <label for="nome_paciente">Nome: </label>
        <input type="text" name="nome_paciente" id="nome_paciente"><br><br>

        <label for="rua">Rua: </label>
        <input type="text" name="rua" id="rua"><br><br>

        <label for="numero">Número: </label>
        <input type="number" name="numero" id="numero"><br><br>
        
        <label for="complemento">Complemento: </label>
        <input type="text" name="complemento" id="complemento"><br><br>

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" id="bairro"><br><br>

        <label for="cep">CEP: </label>
        <input type="number" name="cep" id="cep"><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br><br>

        <label for="telefone">Telefone: </label>
        <input type="tel" name="telefone" id="telefone"><br><br>
        
        <input class="btnCadastro" type="submit" onclick="return validar()">
        </form>
        <a href="index.php"> <button class="btnCadastro" >Voltar</button></a>

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
                                <a href="cadastrarpac.php">Cadastrar</a>
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