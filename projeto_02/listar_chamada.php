<?php
include_once 'funcao.php';
$alunos = lerPresencas();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <h1>Alunos Presentes</h1>

    <?php if (empty($alunos)): ?>
        <p>Nenhum aluno registrado ainda.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($alunos as $aluno): ?>
                <li><?php echo ($aluno); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <br>
    <a href="index.php">Registrar novo estudante</a>
</body>
</html>
