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
    }
?>
    <h1 class="text-center mb-3">Resultado</h1>
    <form>
        <?php
        $pontos=0;
        $n=1;
        while($n<=count($id)){
            $query="select * from questoes where id=".$id[$n];
            $resultado=mysqli_query($conexao,$query);
            $dados=mysqli_fetch_array($resultado);
            $pergunta[$n]=$dados["pergunta"];
            $correta[$n]=$dados["correta"];
            $a[$n]=$dados["a"];
            $b[$n]=$dados["b"];
            $c[$n]=$dados["c"];
            $d[$n]=$dados["d"];
            $e[$n]=$dados["e"];
        ?>
        <div class="card mb-5 border-secondary">
            <div class="card-header text-bg-dark mb-3"><?php echo $n.". ".$pergunta[$n];?></div>
            <div class="card-body">
                <div class="form-check">
                    <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='a'){$pontos++;?>
                    <label class="form-check-label fw-bold alert alert-success p-2" for="flexRadioDefault1">ACERTOU! -> A. <?php echo $a[$n];?></label>
                    <?php }else if(strtolower($correta[$n])=='a'){ ?>
                    <label class="form-check-label alert alert-success p-2" for="flexRadioDefault1">RESPOSTA CERTA -> A. <?php echo $a[$n];?></label>
                    <?php }else if($letra[$n]=='a'){?>
                    <label class="form-check-label fw-bold alert alert-danger p-2" for="flexRadioDefault1">SUA RESPOSTA -> A. <?php echo $a[$n];?></label>
                    <?php }else{?>
                    <label class="form-check-label" for="flexRadioDefault1">A. <?php echo $a[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                    <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='b'){$pontos++;?>
                    <label class="form-check-label fw-bold alert alert-success p-2" for="flexRadioDefault1">ACERTOU! -> B. <?php echo $b[$n];?></label>
                    <?php }else if(strtolower($correta[$n])=='b'){ ?>
                    <label class="form-check-label alert alert-success p-2" for="flexRadioDefault2">RESPOSTA CERTA -> B. <?php echo $b[$n];?></label>
                    <?php }else if($letra[$n]=='b'){?>
                    <label class="form-check-label fw-bold alert alert-danger p-2" for="flexRadioDefault2">SUA RESPOSTA -> B. <?php echo $b[$n];?></label>
                    <?php }else{?>
                    <label class="form-check-label" for="flexRadioDefault2">B. <?php echo $b[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                    <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='c'){$pontos++;?>
                    <label class="form-check-label fw-bold alert alert-success p-2" for="flexRadioDefault1">ACERTOU! -> C. <?php echo $c[$n];?></label>
                    <?php }else if(strtolower($correta[$n])=='c'){ ?>
                    <label class="form-check-label alert alert-success p-2" for="flexRadioDefault3">RESPOSTA CERTA -> C. <?php echo $c[$n];?></label>
                    <?php }else if($letra[$n]=='c'){?>
                    <label class="form-check-label fw-bold alert alert-danger p-2" for="flexRadioDefault3">SUA RESPOSTA -> C. <?php echo $c[$n];?></label>
                    <?php }else{?>
                    <label class="form-check-label" for="flexRadioDefault3">C. <?php echo $c[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                    <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='d'){$pontos++;?>
                    <label class="form-check-label fw-bold alert alert-success p-2" for="flexRadioDefault1">ACERTOU! -> D. <?php echo $d[$n];?></label>
                    <?php }else if(strtolower($correta[$n])=='d'){ ?>
                    <label class="form-check-label alert alert-success p-2" for="flexRadioDefault4">RESPOSTA CERTA -> D. <?php echo $d[$n];?></label>
                    <?php }else if($letra[$n]=='d'){?>
                    <label class="form-check-label fw-bold alert alert-danger p-2" for="flexRadioDefault4">SUA RESPOSTA -> D. <?php echo $d[$n];?></label>
                    <?php }else{?>
                    <label class="form-check-label" for="flexRadioDefault4">D. <?php echo $d[$n];?></label>
                    <?php } ?>
                </div>
                <div class="form-check">
                    <?php if($letra[$n]==strtolower($correta[$n])&&$letra[$n]=='e'){$pontos++;?>
                    <label class="form-check-label fw-bold alert alert-success p-2" for="flexRadioDefault1">ACERTOU! -> E. <?php echo $e[$n];?></label>
                    <?php }else if(strtolower($correta[$n])=='e'){ ?>
                    <label class="form-check-label alert alert-success p-2" for="flexRadioDefault5">RESPOSTA CERTA -> E. <?php echo $e[$n];?></label>
                    <?php }else if($letra[$n]=='e'){?>
                    <label class="form-check-label fw-bold alert alert-danger p-2" for="flexRadioDefault5">SUA RESPOSTA -> E. <?php echo $e[$n];?></label>
                    <?php }else{?>
                    <label class="form-check-label" for="flexRadioDefault5">E. <?php echo $e[$n];?></label>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php
        $n++;
        }
        ?>
    </form>
    <h1 class="text-center mt-3 mb-3">
        Acertos: <?php echo $pontos;?>/15
    </h1>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>