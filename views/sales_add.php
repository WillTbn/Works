<h1>Vendas - Adicionar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="client_name">Nome Cliente</label>
        <input type="text" class="form-control" name="client_name" id="client_name" placeholder="" data-type="searchClients" required>
        </div>
        <!-- <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="address_zipcode">CEP</label>
            <input type="text" class="form-control" name="address_zipcode" id="address_zipcode" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="address">Rua</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="">
        </div>
        <div class="form-group col-md-1">
            <label for="address_number">Número</label>
            <input type="text" class="form-control" name="address_number" id="address_number" placeholder="">
        </div>        
        <div class="form-group col-md-2">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" name="district" id="district" placeholder="">
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-3">
            <label for="address2">Complemento</label>
            <input type="text" class="form-control" name="address2" id="address2" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="address_city">Cidade</label>
            <input type="text" class="form-control" name="address_city" id="address_city" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="address_state">Estado</label>
            <input type="text" class="form-control" name="address_state" id="address_state" placeholder="">
        </div>
        <div class="form-group col-md-3">
            <label for="address_country">Pais</label>
            <input type="text" class="form-control" name="address_country" id="address_country" placeholder="">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="internal_obs">observações internas</label>
            <textarea class="form-control" id="internal_obs"  name="internal_obs"  rows="3"></textarea>
        </div>
        <div class="form-group col-md-6">
        <label for="stars">Estrelas</label>
            <select name="stars" id="stars" placeholder="">
                <option value="1"> 1 Estrela</option>
                <option value="2"> 2 Estrela</option>
                <option value="3" selected="selected"> 3 Estrela</option>
                <option value="4"> 4 Estrela</option>
                <option value="5"> 5 Estrela</option>
            </select>
        </div>
    </div> -->
    <input type="submit" value="Adicionar" class="btn btn-primary mt-3" >
</form>