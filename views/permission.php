<h1 class="p-5">Permissões </h1>

<ul class="nav nav-tabs mx-5 mx-sm-0" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Grupo de permissões</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Permissões</a>
  </li>
</ul>
<div class="tab-content  mx-5 mx-sm-0" id="myTabContent">
  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
    <table class="table">
      <a href="<?php echo BASE_URL;?>/permissions/add_group" class="btn btn-success">Adicionar Grupo permissões</a>
      <thead>
        <tr>
          <th scope="col">Nome do grupo de Permissões</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
          <tr>
          <?php foreach($permissions_groups_list as $p):?>
            <td><?php echo $p['name'];?></td>
            <td>
              <a class="btn btn-success" href="<?php echo BASE_URL;?>/permissions/edit_group/<?php echo $p['id'];?>">Editar</a>
              <a class="btn btn-danger" href="<?php echo BASE_URL;?>/permissions/delete_group/<?php echo $p['id'];?>" onclick="return confirm('Tem certeza que deseja excluir ?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <table class="table">
    <a href="<?php echo BASE_URL;?>/permissions/add" class="btn btn-success">Adicionar permissões</a>
      <thead>
        <tr>
          <th scope="col">Nome Permissão</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
          <tr>
          <?php foreach($permissions_list as $p):?>
            <td><?php echo $p['name'];?></td>
            <td>
              <a class="btn btn-danger" href="<?php echo BASE_URL;?>/permissions/delete/<?php echo $p['id'];?>" onclick="return confirm('Tem certeza que deseja excluir ?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>