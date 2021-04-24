<h1>Estoque</h1>
<?php if($add_permission):?>
    <a href="<?php echo BASE_URL;?>/inventory/add" class="btn btn-success mb-5">Adicionar Produto</a>
<?php endif;?>
<section class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="pesquisar" aria-label="pesquisar" id="busca" data-type="searchInventory"/>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </section>
<table class="table">
<thead >
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Quant. min</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<?php foreach($inventory_list as $product):?>
    <tbody>        
            <td>
                <?php echo $product['name'];?>
            </td>
            <td>
                R$<?php echo number_format($product['price'], 2, ',', '.');?>
            </td>
            <td>
                <?php echo $product['quant'];?>
            </td>
           
            <?php if($product['min_quant'] > $product['quant']){
                echo ' <td class="bg-danger">'.$product['min_quant'].'</td>';
            }else{
                echo ' <td>'.$product['min_quant'].'</td>';;
            }
            ?>
            </td>
                <td>
                <?php if($edit_permission):;?>
                    <a class="btn btn-success" href="<?php echo BASE_URL;?>/inventory/edit/<?php echo $product['id'];?>">Editar</a>
                    <a class="btn btn-danger" href="<?php echo BASE_URL;?>/inventory/delete/<?php echo $product['id'];?>" onclick="return confirm('Tem certeza que deseja excluir ?')">Excluir</a>
                <?php else: ?>
                    <a class="btn btn-success" href="<?php echo BASE_URL;?>/inventory/view/<?php echo $product['id'];?>">Ver</a>
                <?php endif;?>
            </td>
        
    </tbody>
    <?php endforeach;?>
   
</table>