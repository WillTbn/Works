<h1>Usuario - Editar</h1>
<?php if(isset($erro_msg) && !empty($erro_msg)):?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro_msg;?>
    </div>
<?php endif;?>
<form method="POST" class="m-0">
<div class="row">
    <div class="col-12">
        <label for="email">E-mail</label></br>
        <?php echo $user_info['email'];?></br></br>
    </div>
    <div class="col-12">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="col-12 mt-2">
    <label for="group">Grupo de Permissões</label></br>
    <select name="group" id="group">
        <?php foreach($group_list as $g):?>
            <option value="<?php echo $g['id'];?>" <?php echo ($g['id']==$user_info['id_group'])?'selected=selected':'';?>>
                <?php echo $g['name'];?>
            </option>
        <?php endforeach;?>
    </select>
    </div>
</div>
    <input type="submit" value="Editar" class="btn btn-primary mt-3" >
</form>