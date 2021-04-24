<h1>Produto - Adicionar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="" required>
        </div>
        <div class="form-group col-md-6">
            <label for="price">Preço</label>
            <input type="price" class="form-control" name="price" id="price" placeholder="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="quant">Quantidade</label>
            <input type="text" class="form-control" name="quant" id="quant" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="min_quant">Quantidade minima</label>
            <input type="text" class="form-control" name="min_quant" id="min_quant" placeholder="">
        </div>
    </div>
    <input type="submit" value="Adicionar" class="btn btn-primary mt-3" >
</form>
