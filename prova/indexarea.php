<!DOCTYPE html>
<html>
    <head>
        <title>site-avaliação-area</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
    </head>
<body>
<form method="post" action="cadastraarea.php">
        <fieldset>
            <legend>Cadastro do livro</legend>
            <p><label>ID:<input type="text" name="idarea" placeholder="De o codigo da área" required size="20" maxlength="50"/></label></p>
            <p><label>Nome da Área:<input type="text" name="nome" placeholder="Nome da Área" required size="20" maxlength="50"/> </label></p>
            <input type="submit" value="enviar">
            <input type="submit" name="reset" value="Limpar">
        </fieldset> 
</form>
</body>
</html>