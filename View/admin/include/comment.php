<div class="content__main">
  <div class="row">
    <div class="col-sm-6">
      <input type="text">
    </div>
    <div class="col-sm-6">
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID_POST</th>
      <th scope="col">Parent_id</th>
      <th scope="col">Content</th>
      <th scope="col">Censor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php  $stt=1; if ($data!=0)foreach ($data as $key => $vl) {
      ?>
      
      <tr>
        <form method="POST" action="<?php   echo url_admin; ?>"> 
          <th scope="row"><?php echo $stt++; ?></th>
          <td><span><?php echo $vl['id_post']; ?></span>
          </td>
          <td>
            <span> <?php echo $vl['parent_id']; ?> </span>
          </td>
          <td>
            <span> <?php echo $vl['content']; ?> </span>
          </td>
          <td class="no_show"><span> <?php echo $vl['id']; ?></span></td>
          <td><?php if ($vl['Censor']==0) {
            ?><span style="color: #c0392b">
              <?php echo "Pendding"; ?>
            </span><?php
            
          }else if ($vl['Censor']==1) {
            ?><span style="color: #3498db">
            <?php echo "Pass"; ?>
            </span><?php
          }?>
            
          </td>
          <td class="trash">
            <a href="" class="cmt"  data-toggle="modal" data-target="#form"><i class="bi bi-clipboard-plus"></i></a>
            <a href="<?php echo url_admin; ?>&view=comment&del=<?php echo $vl['id'];  ?>" onclick="return (confirm('Bạn có muốn xóa comment này ??'))"><i class="bi bi-trash"></i></a>
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
          <h5 class="modal-title" id="exampleModalLabel">Rep Comment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST">
          <div class="modal-body">
            <input name="id_post" type="hidden"  id="id_post" >
            <input name="prant_id" type="hidden" id="prant_id">
            <div class="form-group">
              <label for="name">Comment</label>
              <input type="text" disabled id="name" class="form-control" placeholder="Tên ">
            </div>
            <div class="form-group">
              <label for="email1">Rep Comment</label>
              <textarea required name="content" class="form-control" id="email1" placeholder="Comment"></textarea>
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
  

</script>