    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const_var</title>
</head>
<body>
    <?php 

    /*int = numero,
    string = caractere,
    boleano = true/ false,
    float = 0.0*/

    $aluno = "Arnoldo shuaseneguer";
    $idade = "130 anos";

    /*const instituicao = "cetam";   constante nao é declarado, mas sim definido
    const inicia com a palava "define"
    entre aspas duplas
    1° constante
    2° valor */

    define("instituicao", "centro de educação tec. do amazonas");
    
    echo "Olá aluno, $aluno $idade bem vindo ao " . instituicao 
    
    
    ?>

    
</body>
</html>