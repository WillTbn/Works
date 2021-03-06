<h1>Usuario - Adicionar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
<div class="row">
    <div class="col-12">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="" required>
    </div>
    <div class="col-12">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="" required>
    </div>
    <div class="col-12 mt-2">
    <label for="group">Grupo de Permissões</label></br>
    <select name="group" id="group">
        <?php foreach($group_list as $g):?>
            <option value="<?php echo $g['id'];?>">
                <?php echo $g['name'];?>
            </option>
        <?php endforeach;?>
    </select>
    </div>
</div>
    <input type="submit" value="Confirma" class="btn btn-primary mt-3" >
</form>