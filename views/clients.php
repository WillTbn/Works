<h1 class="p-5">Clientes </h1>

<table class="table">
<?php if($edit_permission):?>
    <a href="<?php echo BASE_URL;?>/clients/add" class="btn btn-success mb-5">Adicionar Clientes</a>
<?php endif;?>
    <thead >
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estrelas</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients_list as $c):?>
            <td>
                <?php echo $c['name'];?>
            </td>
            <td>
                <?php echo $c['phone'];?>
            </td>
            <td>
                <?php echo $c['address_city'];?>
            </td>
            <td>
                <?php echo $c['stars'];?>
            </td>
                <td>
                <?php if($edit_permission):;?>
                <a class="btn btn-success" href="<?php echo BASE_URL;?>/clients/edit/<?php echo $c['id'];?>">Editar</a>
                <a class="btn btn-danger" href="<?php echo BASE_URL;?>/clients/delete/<?php echo $c['id'];?>" onclick="return confirm('Tem certeza que deseja excluir ?')">Excluir</a>
                <?php else: ?>
                    <a class="btn btn-success" href="<?php echo BASE_URL;?>/clients/view/<?php echo $c['id'];?>">Ver</a>
                <?php endif;?>
            </td>
        <?php endforeach;?>
    </tbody>
</table>