<h1>Cliente - Editar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="" value="<?=$client_info['name'];?>" required>
        </div>
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?=$client_info['email'];?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="<?=$client_info['phone'];?>">
        </div>
        <div class="form-group col-md-3">
            <label for="address_zipcode">CEP</label>
            <input type="text" class="form-control" name="address_zipcode" id="address_zipcode" placeholder="" value="<?=$client_info['address_zipcode'];?>">
        </div>
        <div class="form-group col-md-3">
            <label for="address">Rua</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="" value="<?=$client_info['address'];?>">
        </div>
        <div class="form-group col-md-1">
            <label for="address_number">Número</label>
            <input type="text" class="form-control" name="address_number" id="address_number" placeholder="" value="<?=$client_info['address_number'];?>">
        </div>        
        <div class="form-group col-md-2">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" name="district" id="district" placeholder="" value="<?=$client_info['district'];?>">
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
            <label for="address2">Complemento</label>
            <input type="text" class="form-control" name="address2" id="address2" placeholder="" value="<?=$client_info['address2'];?>">
        </div>
        <div class="form-group col-md-3">
            <label for="address_city">Cidade</label>
            <input type="text" class="form-control" name="address_city" id="address_city" placeholder="" value="<?=$client_info['address_city'];?>">
        </div>
        <div class="form-group col-md-3">
            <label for="address_state">Estado</label>
            <input type="text" class="form-control" name="address_state" id="address_state" placeholder="" value="<?=$client_info['address_state'];?>">
        </div>
        <div class="form-group col-md-3">
            <label for="address_country">Pais</label>
            <input type="text" class="form-control" name="address_country" id="address_country" placeholder="" value="<?=$client_info['address_country'];?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="internal_obs">observações internas</label>
            <textarea class="form-control" id="internal_obs"  name="internal_obs"  rows="3"> <?=$client_info['internal_obs'];?></textarea>
        </div>
        <div class="form-group col-md-6">
        <label for="stars">Estrelas</label>
            <select name="stars" id="stars" placeholder="">
                <option value="1" <?php echo ($client_info['stars'] == '1')?'selected="selected"':'';?>> 1 Estrela</option>
                <option value="2" <?php echo ($client_info['stars'] == '2')?'selected="selected"':'';?>> 2 Estrela</option>
                <option value="3" <?php echo ($client_info['stars'] == '3')?'selected="selected"':'';?>> 3 Estrela</option>
                <option value="4" <?php echo ($client_info['stars'] == '4')?'selected="selected"':'';?>> 4 Estrela</option>
                <option value="5" <?php echo ($client_info['stars'] == '5')?'selected="selected"':'';?>> 5 Estrela</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary mt-3" >
</form>