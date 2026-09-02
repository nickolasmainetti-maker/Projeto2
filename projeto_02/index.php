
<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <h2>Registro do Estudante</h2>
    <form action="gravar_chamada.php" method="POST">
        <label for="sala">Sala:</label><br>
        <input type="text" id="sala" name="sala" required><br><br>

        <label for="nome">Nome do Aluno:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="RA">R.A. (Registro Estudantil):</label><br>
        <input type="text" id="RA" name="RA" required><br><br>

        <input type="submit" value="Gravar Presenca">
    </form>
</body>
</html>