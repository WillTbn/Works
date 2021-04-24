<h1>Vendas</h1>

    <a href="<?php echo BASE_URL;?>/sales/add" class="btn btn-success mb-5">Adicionar venda</a>
    <section class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="pesquisar" aria-label="pesquisar" id="busca" data-type="searchClients"/>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </section>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">Data</th>
        <th scope="col">status</th>
        <th scope="col">Valor</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($sales_list as $sale_item): ?>
        <td>
            <?php echo $sale_item['name'];?>
        </td>
        <td>
            <?php echo date('d/m/Y', strtotime($sale_item['date_sale']));?>
        </td>
        <td>
            <?php echo $sale_item['status'];?>
        </td>
        <td>
            R$ <?php echo number_format($sale_item['sale_price'], 2, ',', '.');?>
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
    <tbody>
</table>