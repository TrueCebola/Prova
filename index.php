<?php
$titulo="Simulado";
include "./conexao.php";
include "./cabecalho.php";
$query="select * from questoes order by rand() limit 15";
$resultado=mysqli_query($conexao,$query);
?>
    <h1 class="text-center mb-3">Simulado</h1>
    <h2 class="text-center mt-3 mb-3">
        Responda as 15 perguntas.
    </h2>
    <form action="./resultado.php" method="post">
        <?php
        $n=1;
        while($linha=mysqli_fetch_array($resultado)){
        ?>
        <div class="card mb-5 border-secondary">
            <div class="card-header text-bg-dark mb-3"><?php echo $n.". ".$linha["pergunta"];?></div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $linha["id"];?>" id="<?php echo $linha["id"];?>" value="a">
                    <label class="form-check-label" for="flexRadioDefault1">A. <?php echo $linha["a"];?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $linha["id"];?>" id="<?php echo $linha["id"];?>" value="b">
                    <label class="form-check-label" for="flexRadioDefault2">B. <?php echo $linha["b"];?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $linha["id"];?>" id="<?php echo $linha["id"];?>" value="c">
                    <label class="form-check-label" for="flexRadioDefault3">C. <?php echo $linha["c"];?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $linha["id"];?>" id="<?php echo $linha["id"];?>" value="d">
                    <label class="form-check-label" for="flexRadioDefault4">D. <?php echo $linha["d"];?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $linha["id"];?>" id="<?php echo $linha["id"];?>" value="e">
                    <label class="form-check-label" for="flexRadioDefault5">E. <?php echo $linha["e"];?></label>
                </div>
                <div>
                    <input type="hidden" value="<?php echo $linha["id"];?>" name="id-<?php echo $n;?>"/>
                </div>
            </div>
        </div>
        <?php
        $n++;
        }
        ?>
        <button id="btnSubmit" type="submit" class="btn btn-success">Confirmar respostas</button>
    </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>