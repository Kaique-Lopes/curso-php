<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso-Php</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso Kaique - PHP</h1>
        <h2>Indice Exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá Php</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Kaique Lopes <?= date ('Y'); ?>
    </footer>
</body>
</html>
