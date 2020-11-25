<h1 class="p-5">Usuarios </h1>
<table class="table">
    <a href="<?php echo BASE_URL;?>/users/add" class="btn btn-success mb-5">Adicionar Usuario</a>
    <thead >
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Grupo de Permissões</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($users_list as $us):?>
            <td>
                <?php echo $us['email'];?>
            </td>
            <td>
                <?php echo $us['name'];?>
            </td>
                <td>
                <a class="btn btn-success" href="<?php echo BASE_URL;?>/users/edit/<?php echo $us['id'];?>">Editar</a>
                <a class="btn btn-danger" href="<?php echo BASE_URL;?>/users/delete/<?php echo $us['id'];?>" onclick="return confirm('Tem certeza que deseja excluir ?')">Excluir</a>
            </td>
        <tr>
        <?php endforeach;?>
    </tbody>
</table>