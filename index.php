<?php
$titulo="Simulado";
include "./conexao.php";
include "./cabecalho.php";
?>
    <h1 class="text-center mt-3 mb-3">Simulado</h1>
    <h2 class="text-center mt-3 mb-3">
        Responda as 15 perguntas.
    </h2>
    <div class="container">
        <?php
        $n=1;
        $query="select * from questoes order by rand() limit 15";
        $resultado=mysqli_query($conexao,$query);
        while($linha=mysqli_fetch_array($resultado)){
        ?>
        <div class="card mt-4 mb-2">
            <div class="card-header"><?php echo $n.". ".$linha["pergunta"];?></div>
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
            </div>
        </div>
        <?php
        $n++;
        }
        ?>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>