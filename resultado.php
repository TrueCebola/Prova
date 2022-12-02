<?php
    $titulo="Resultado";
    include "./conexao.php";
    include "./cabecalho.php";
    if(isset($_GET["id"])&&!empty($_GET["id"])){
        $query="select * from questoes where id=".$_GET["id"];
        $resultado=mysqli_query($conexao,$query);
        $id=$dados["id"];
        $pergunta=$dados["pergunta"];
        $a=$dados["A"];
        $b=$dados["B"];
        $c=$dados["C"];
        $d=$dados["D"];
        $e=$dados["E"];
        $correta=$dados["correta"];
    }
?>
    <h1 class="text-center mb-3">Resultado</h1>
    <h2 class="text-center mt-3 mb-3">
        Acertos: <?php echo "teste";?>/15
    </h2>
    <form>
        <?php
        $n=1;
        while($n<16){
        ?>
        <div class="card mb-5 border-secondary">
            <div class="card-header text-bg-dark mb-3"><?php echo $n.$pergunta;?></div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $correta;?>" id="<?php echo $id;?>" value="a">
                    <label class="form-check-label" for="flexRadioDefault1">A. <?php echo $a;?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $correta;?>" id="<?php echo $id;?>" value="b">
                    <label class="form-check-label" for="flexRadioDefault2">B. <?php echo $b;?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $correta;?>" id="<?php echo $id;?>" value="c">
                    <label class="form-check-label" for="flexRadioDefault3">C. <?php echo $c;?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $correta;?>" id="<?php echo $id;?>" value="d">
                    <label class="form-check-label" for="flexRadioDefault4">D. <?php echo $d;?></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo $correta;?>" id="<?php echo $id;?>" value="e">
                    <label class="form-check-label" for="flexRadioDefault5">E. <?php echo $e;?></label>
                </div>
            </div>
        </div>
        <?php
        $n++;
        }
        ?>
    </form>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>