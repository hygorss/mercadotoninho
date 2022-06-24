<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar fornecedor</title>
</head>
<body>
<h1>Cadastrar fornecedor</h1>
<hr>
<br>
<form method="post" id="cadastro" action="cadastrarfornecedor.php">
<fieldset id="cad">
<legend> Fornecedor</legend>
<p> <label for="nome">Nome</label><input type="text" name="nome" id="nome" size="60" maxlenght="100" placeholder="Digite o nome do fornecedor"></p>
<p> Endereço</p><p> <textarea name="endereco" id="endereco" placeholder= "endereco do fornecedor" class="textarea"></textarea></p>
<p> <label for="cnpj">CNPJ</label><input type="text" nome="cnpj" id="cnpj"size="10" maxlenght="100" placeholder="Digite o cnpj"></p>
</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>
</body>
</html>