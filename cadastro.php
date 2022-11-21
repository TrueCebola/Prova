<?php
    include "./conexao.php";
    include "./cabecalho.php";
?>
    <h2 class="text-center mt-3 mb-3">Cadastro de Perguntas</h2>
    <div class="container">
        <div class="card">
            <form>
                <div class="card-header">
                    <label for="exampleInputEmail1" class="form-label">Pergunta</label>
                    <textarea class="form-control mb-2" aria-label="With textarea"></textarea>
                </div>
                <div class="card-body">
                    <label for="exampleInputEmail1" class="form-label">Respostas</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                    </div>
                    <a type="submit" class="btn btn-secondary mt-3">Go somewhere</a>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>