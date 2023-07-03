<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-aluno</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
<form method="post" action="cadastraaluno.php">
        <fieldset>
            <legend>Identificação do usuário</legend>
            <p><label>Nº de Matricula:<input type="text" name="matricula" placeholder="Insira seu numero de Matrícula" required size="25" maxlength="10"/> </label></p>
            <p><label>Nome:<input type="text" name="nome" placeholder="Nome completo" required size="20" maxlength="50"/> </label></p>
            <p><label>Email:<input type="text" name="email" placeholder="Digite se Email" required size="20" maxlength="50"/> </label></p>
            <p><label>CPF:<input type="text" name="cpf" placeholder="8 dígitos" required size="15" maxlength="11"/> </label></p>
            <p><label>Data de Nascimento:<input type="date" name="datanasci"/> </label></p>

            <input type="submit" value="enviar">
            <input type="reset" name="reset" value="Limpar">
        </fieldset> 
</form>
</body>
</html>