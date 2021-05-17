<div class="content__main">
  <div class="row">
    <div class="col-sm-6">
      <input type="text">
    </div>
    <div class="col-sm-6">
      <a href="" class="float-right"  data-toggle="modal" data-target="#form"><i class="bi bi-patch-plus"></i></a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Parent</th>
      <th scope="col">Order_tb</th>
      <th scope="col">Childen</th>
      <th scope="col">Visible</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php  $stt=1; foreach ($data as $key => $vl) {
      ?>
      
      <tr>
        <form method="POST" action="<?php   echo url_admin; ?>"> 
          <th scope="row"><?php echo $vl['id']; ?></th>
          <td><span><?php echo $vl['name']; ?></span>
            <input name="name" type="text" value="<?php echo $vl['name']; ?>">
          </td>
          <td>
            <?php $chil_tam=0; foreach ($data as $key => $chil) {
              if ($vl['parent_id'] == $chil['id']) {
                $chil_tam++;
                ?>
                <span> <?php echo $chil['name']; ?> </span>
                <?php
              }
            }
            ?>
            <?php if ($vl['childen']==1) {
              ?>
               <select name="parent_id">
                <option value="0">No Parent</option>
              </select>
              <?php
            }else{
              ?>
              <select name="parent_id">
                <option value="0">No Parent</option>
                <?php foreach ($data as $key => $value) {
                  if ($value['childen']==1) {
                  
                  ?>
                  <option  value="<?php echo $value['id'] ?>" <?php if ($vl['parent_id']==$value['id']) {?>selected <?php
                  } ?> >  
                  <?php echo $value['name']; ?></option>
                  <?php

                  }
                } ?>
              </select>
              <?php
            }
             ?>
          </td>
          <td>
            <span> <?php echo $vl['order_tb']; ?> </span>
            <input name="order_tb" type="text" value="<?php echo $vl['order_tb']; ?>">
          </td>
          <td><span><?php echo $vl['childen']; ?></span>
            <input name="Childen" type="text" value="<?php echo $vl['childen']; ?>">
          </td>
          <td>
            <span> <?php echo $vl['visible']; ?> </span>
            <select name="visible">
              <?php if ($vl['visible']!=0) {
                ?>
                <option  value="0">Hide</option>
                <option selected value="1">Show</option>
                <?php
              }else{
                ?>
                <option selected value="0">Hide</option>
                <option value="1">Show</option>
                <?php
              }
              ?>
              
            </select>
          </td>
          <td class="trash">

            <a href="" class="edit"><i class="bi bi-pencil-square"></i></a>
            <button type="submit" class="save" value=" <?php echo $vl['id']; ?>" name="edit" onclick="return (confirm('Bạn Có muốn sửa ??'))"><i class="bi bi-save"></i></button>
            <a href="<?php echo url_admin; ?>&view=menu&del=<?php echo $vl['id'];  ?>" onclick="return (confirm('Bạn Có muốn xóa <?php  echo $vl['name'];   ?>'))"><i class="bi bi-trash"></i></a>
          </td>

        </form>
      </tr>
      <?php
    } ?>
  </tbody>
</table>
<div class="add_form">
  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Create Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Tên</label>
              <input required name="name" type="text" id="name" class="form-control" placeholder="Tên ">
            </div>
            <div class="form-group">
              <label >Parent</label>
              <select name="parent_id"  class="form-control">
                <option value="0">No Parent</option>
                <?php foreach ($data as $key => $value) {
                  if ($value['childen']==1) {
                  
                  ?>
                  <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                  <?php

                  }
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="password1">Vị Trí </label>
              <input required name="order_tb"  type="number" class="form-control" id="password1" placeholder="Vị Trí">
            </div>
            <div class="form-group">
              <label for="sel1">Visible</label>
              <select id="sel1" class="form-control" name="visible">
                <option selected value="0">Hide</option>
                <option value="1">Show</option>
              </select>
            </div>
          </div>
          <div class="modal-footer border-top-0 d-flex justify-content-center">
            <button type="submit" name="add"  class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.save').hide();
    var x= $('.edit');
    for (a of x) {
      a.addEventListener('click', (e)=>{
        e.preventDefault();
        $('.save').hide();
        $('.edit').show();
        $('tr').removeClass('show');
        var tam = e.path[3];
        $(tam).addClass('show');
        var tam2=e.path[1];

        $(tam2).hide();
        tam2=e.path[2].childNodes[2].nextElementSibling;
        $(tam2).show();

      }
      );
    }
  });

</script>