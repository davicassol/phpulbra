<?php $professores = $_REQUEST['professores']; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <div class="container">
        <div class="row text-center">
            <h2>Lista de Professores</h2>
        </div>

        <br>
        <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar Professor</a>
        <br>
        <br>

        <table class="table table-success">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $professorAtual) { ?>
                    <tr>
                        <td>
                            <?php echo $professorAtual['id']; ?>
                        </td>
                        <td>
                            <?php echo $professorAtual['nome']; ?>
                        </td>
                        <td>
                            <?php echo $professorAtual['idade']; ?>
                        </td>
                        <td>
                            <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Editar</a>
                            <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Excluir</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
        <br>
        <div class="text-center">
            <img class="img-fluid" src="https://diariodainclusaosocialdotcom.files.wordpress.com/2017/11/acessibilidade.jpg?w=660&h=312&crop=1" alt="Representação colorida de pessoas que necessitam de ajuda ou adaptaçõs do ambiente para comporta a sua necessibilita para acessibilidade.">
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>