<?php
    $titulo="Cadastro de Perguntas";
    include "./conexao.php";
    include "./cabecalho.php";
    if(isset($_POST)&&!empty($_POST)){
        $pergunta = $_POST["pergunta"];
        $a=$_POST["A"];
        $b=$_POST["B"];
        $c=$_POST["C"];
        $d=$_POST["D"];
        $e=$_POST["E"];
        $correta=$_POST["correta"];
    
        $query="insert into questoes (pergunta,a,b,c,d,e,correta) values('$pergunta','$a','$b','$c','$d','$e','$correta')";
        $resultado=mysqli_query($conexao, $query);
    }
?>
    <h2 class="text-center mb-3">Cadastro de Perguntas</h2>
        <div class="card mb-3 border-secondary">
            <form action="./cadastro.php" method="post">
                <div class="card-header text-bg-dark mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pergunta</label>
                    <textarea class="form-control mb-2" name="pergunta" aria-label="With textarea" placeholder="Digite a pergunta"></textarea>
                </div>
                <div class="card-body">
                    <label for="exampleInputEmail1" class="form-label">Respostas</label>
                    <div class="form-check">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="radio" name="correta" value="A">
                                <label class="form-check-label">A. </label>
                            </div>
                            <input type="text" class="form-control" name="A" placeholder="Digite a alternativa" aria-label="Digite a alternativa" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="radio" name="correta" value="B">
                                <label class="form-check-label">B. </label>
                            </div>
                            <input type="text" class="form-control" name="B" placeholder="Digite a alternativa" aria-label="Digite a alternativa" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="radio" name="correta" value="C">
                                <label class="form-check-label">C. </label>
                            </div>
                            <input type="text" class="form-control" name="C" placeholder="Digite a alternativa" aria-label="Digite a alternativa" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="radio" name="correta" value="D">
                                <label class="form-check-label">D. </label>
                            </div>
                            <input type="text" class="form-control" name="D" placeholder="Digite a alternativa" aria-label="Digite a alternativa" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="radio" name="correta" value="E">
                                <label class="form-check-label">E. </label>
                            </div>
                            <input type="text" class="form-control" name="E" placeholder="Digite a alternativa" aria-label="Digite a alternativa" aria-describedby="basic-addon1">
                        </div>
                        <button id="btnSubmit" type="submit" class="btn btn-success mt-3">Adicionar pergunta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>