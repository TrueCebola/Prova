<?php
    $titulo="Resultado";
    include "./conexao.php";
    include "./cabecalho.php";
    if(isset($_POST)&&!empty($_POST)){
        $resposta=$_POST;
        for($i=1;$i<=count($resposta)/2;$i++){
            $id[$i]=$resposta["id-".$i];
            $letra[$i]=$resposta[$id[$i]];
        }
        echo "<pre>";
        echo print_r($resposta);
        echo "</pre>";
        echo "<pre>";
        echo print_r($id);
        echo "</pre>";
        echo "<pre>";
        echo print_r($letra);
        echo "</pre>";
        // $query="select * from questoes where id=".$_GET["id"];
        // $resultado=mysqli_query($conexao,$query);
        // $id=$dados["id"];
        // $pergunta=$dados["pergunta"];
        // $a=$dados["A"];
        // $b=$dados["B"];
        // $c=$dados["C"];
        // $d=$dados["D"];
        // $e=$dados["E"];
        // $correta=$dados["correta"];
    }
?>
    <h1 class="text-center mb-3">Resultado</h1>
    <h2 class="text-center mt-3 mb-3">
        Acertos: <?php echo "teste";?>/15
    </h2>
    <form>
        <?php
        $n=1;
        while($n<=count($id)){
            $query="select * from questoes where id=".$id[$n];
            $resultado=mysqli_query($conexao,$query);
            $dados=mysqli_fetch_array($resultado);
            $pergunta[$n]=$dados["pergunta"];
            $correta[$n]=$dados["correta"];
        ?>
        <div class="card mb-5 border-secondary">
            <div class="card-header text-bg-dark mb-3"><?php echo $n.". ".$pergunta[$n];?></div>
            <div class="card-body">
                <div class="form-check">
                <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='a'){ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="a" checked disabled>
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">A. <?php echo $letra[$n];?></label>
                    <?php }else{ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="a" disabled>
                    <label class="form-check-label" for="flexRadioDefault1">A. <?php echo $letra[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='b'){ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="b" checked disabled>
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">B. <?php echo $letra[$n];?></label>
                    <?php }else{ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="b" disabled>
                    <label class="form-check-label" for="flexRadioDefault2">B. <?php echo $letra[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='c'){ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="c" checked disabled>
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">C. <?php echo $letra[$n];?></label>
                    <?php }else{ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="c" disabled>
                    <label class="form-check-label" for="flexRadioDefault3">C. <?php echo $letra[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='d'){ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="d" checked disabled>
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">D. <?php echo $letra[$n];?></label>
                    <?php }else{ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="d" disabled>
                    <label class="form-check-label" for="flexRadioDefault4">D. <?php echo $letra[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='e'){ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="e" checked disabled>
                    <label class="form-check-label fw-bold" for="flexRadioDefault1">E. <?php echo $letra[$n];?></label>
                    <?php }else{ ?>
                    <input class="form-check-input" type="radio" name="<?php echo $n;?>" id="<?php echo $id;?>" value="e" disabled>
                    <label class="form-check-label" for="flexRadioDefault5">E. <?php echo $letra[$n];?></label>
                    <?php } ?>
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