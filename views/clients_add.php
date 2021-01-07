<h1>Cliente - Adicionar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
<div class="row">
    <div class="col-6">
        <label for="name">Nome</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="col-6">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="">
    </div>
    <div class="col-6">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="">
    </div>
    <div class="col-6">
        <label for="stars">Estrelas</label>
        <select name="stars" id="stars" placeholder="">
        <option value="1"> 1 Estrela</option>
        <option value="2"> 2 Estrela</option>
        <option value="3" selected="selected"> 3 Estrela</option>
        <option value="4"> 4 Estrela</option>
        <option value="5"> 5 Estrela</option>
        </select>
    </div>
    <div class="form-group">
        <label for="internal_obs">observações internas</label>
            <textarea class="form-control" id="internal_obs"  name="internal_obs"  rows="3"></textarea>
       
    </div>
</div>
    <input type="submit" value="Adicionar" class="btn btn-primary mt-3" >
</form>