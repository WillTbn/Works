<h1 class="p-5">Clientes </h1>

<table class="table">
<?php if($edit_permission):?>
    <a href="<?php echo BASE_URL;?>/clients/add" class="btn btn-success mb-5">Adicionar Clientes</a>
    <section class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="pesquisar" aria-label="pesquisar" id="busca" data-type="searchClients"/>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </section>
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
    <?php foreach($clients_list as $c):?>
    <tbody>        
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
        
    </tbody>
    <?php endforeach;?>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
    <?php for($q=1;$q<=$p_count;$q++): ?>
        <li class="page-item <?php echo ($q == $p)?'active':'';?>"><a class="page-link" href="<?=BASE_URL;?>/clients?p=<?=$q;?>"><?=$q;?></a></li>
    <?php endfor;?>    
    <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
  </ul>
</nav>
