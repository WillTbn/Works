<h1>Produto - Edita</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="" required value="<?=$inventory_info['name']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="price">Preço</label>
            <input type="price" class="form-control" name="price" id="price" placeholder="" value="<?=number_format($inventory_info['price'], 2)?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="quant">Quantidade</label>
            <input type="text" class="form-control" name="quant" id="quant" placeholder="" value="<?=$inventory_info['quant']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="min_quant">Quantidade minima</label>
            <input type="text" class="form-control" name="min_quant" id="min_quant" placeholder="" value="<?=$inventory_info['min_quant']?>">
        </div>
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary mt-3" >
</form>