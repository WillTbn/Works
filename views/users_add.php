<h1>Usuario - Adicionar</h1>

<form method="POST" class="m-0">
<div class="row">
    <div class="col-6">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="">
    </div>
    <div class="col-6">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="">
    </div>
    <label for="group">Grupo de Permissões</label>
    <select name="group" id="group">
        <?php foreach($group_list as $g):?>
            <option value="<?php echo $g['id'];?>">
                <?php echo $g['name'];?>
            </option>
        <?php endforeach;?>
    </select>
</div>
    <input type="submit" value="Confirma" class="btn btn-primary mt-3" >
</form>