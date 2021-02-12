<!DOCTYPE html>
<html>
<head>
    <center> <strong> Entrar no Sistema </strong> </center>
</head>
<body>
    <form action="recebe_dados.php"> 

        <center><label>Usuário:</label><input type="text" name="login" id="login"><br> </center>
        <center><label>Senha:</label><input type="password" name="senha" id="senha"><br></center>
        <center><input type="submit" value="Entrar" id="Entrar" name="Entrar"><br></center>
    
    </form>

<p>
    <strong>Servidor</strong>
    <br>Caso ainda não possua cadastro no sistema,<br>clique no link abaixo.
    <br><a href="servidor.php">Cadastre-se</a>
</p>
<p>
    <parse_ini_file>
    <strong>Alunos</strong>
    <br>Caso ainda não possua cadastro no sistema,<br>clique no link abaixo.
    <br><a href="aluno.php">Cadastre-se</a>
</p>

<p>
    <parse_ini_file>
    <strong>Professores</strong>
    <br>Caso ainda não possua cadastro no sistema,<br>clique no link abaixo.
    <br><a href="professor.php">Cadastre-se</a>
</p>

</body>
</html>