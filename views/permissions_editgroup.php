<h1>Permissões - Editar Grupo de permissões</h1>

<form method="POST">
<div class="row">
    <div class="col-6">
        <label for="name">Nome do grupo de Permissão</label>
        <input type="text" class="form-control" name="name" value="<?php echo $group_info['name'];?>">
    </div>
    <div class="col-12">
        <label for="name">Permissões</label></br>
        <?php foreach($permissions_list as $p): ?>
            <!-- O SEPARADO estamos usando o if inline, verificamos se tem no array o item atraves do id se for tru ele da um checked se false ele não estara marcado -->
            <input type="checkbox" name="permissions[]" value="<?php echo $p['id'];?>" id="p_<?php echo $p['id']; ?>" 
            
            <?php echo (in_array($p['id'], $group_info['params']))?'checked="checked"':''; ?>
            
            />
            <label for="p_<?php echo $p['id']; ?>"><?php echo $p['name']; ?></label>
            </br>
        <?php endforeach;?>
    </div>
</div>
<input type="submit" value="Editar" class="btn btn-primary" id="">