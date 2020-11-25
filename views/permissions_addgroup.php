<h1>Permissões - Adicionar grupo9 de permissões</h1>

<form method="POST">
<div class="row">
    <div class="col-6">
        <label for="name">Nome do grupo de Permissão</label>
        <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <div class="col-12">
        <label for="name">Permissões</label></br>
        <?php foreach($permissions_list as $p): ?>
            <input type="checkbox" name="permissions[]" value="<?php echo $p['id'];?>" id="p_<?php echo $p['id']; ?>"/>
            <label for="p_<?php echo $p['id']; ?>"><?php echo $p['name']; ?></label>
            </br>
        <?php endforeach;?>
    </div>
</div>
    <input type="submit" value="Confirma" class="btn btn-primary mt-3" >
</form>