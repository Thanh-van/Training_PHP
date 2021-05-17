<div class="content__main">
  <div class="row">
    <div class="col-sm-6">
      <input required type="text">
    </div>
    <div class="col-sm-6">
      <a href="" class="float-right"  data-toggle="modal" data-target="#form"><i class="bi bi-patch-plus"></i></a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên</th>
      <th scope="col">Mail</th>
      <th scope="col">Chức Vụ</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php   $stt=1; if (isset($data)&&$data!=0) foreach ($data as $key => $vl) {
      if ($vl['id']!= $_SESSION['login'][0]['id']){
      ?>
      <form method="POST">
        <tr>

          <th scope="row"><?php echo $stt++; ?></th>
          <td><span><?php echo $vl['name']; ?></span>
            <input required  type="text" name="name" value="<?php echo $vl['name']; ?>">
          </td>
          <td><span> <?php echo $vl['mail']; ?> </span>
            <input required type="text" name="mail" value="<?php echo $vl['mail']; ?>">
          </td>
          <td>
            <span> <?php echo $vl['level']; ?> </span>
            <select required name="level">
              <?php if ($vl['level']==0) {
                ?>
                <option selected value="0">Quản Lý</option>
                <option value="1">Khách Hàng</option>
                <?php
              }else{
                ?>
                <option value="0">Quản Lý</option>
                <option selected value="1">Khách Hàng</option>
                <?php
              }

              ?>
              
            </select>
          </td>
          <td class="trash">

           <a href="" class="edit"><i class="bi bi-pencil-square"></i></a>
           <button type="submit" class="save" value=" <?php echo $vl['id']; ?>" name="edit" onclick="return (confirm('Bạn Có muốn sửa ??'))"><i class="bi bi-save"></i></button>
           <a href="<?php echo url_admin; ?>&view=user&del=<?php echo $vl['id'];  ?>" onclick="return (confirm('Bạn Có muốn xóa <?php  echo $vl['name'];   ?>'))"><i class="bi bi-trash"></i></a>
         </td>

       </tr>
     </form>
     <?php
   }
   } ?>
 </tbody>
</table>
<div class="add_form">
  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input required name="name" type="text" id="name" class="form-control" placeholder="Name ">
            </div>
            <div class="form-group">
              <label for="email1">Email address</label>
              <input required name="mail"  type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
            </div>
            <div class="form-group">
              <label for="password1">Password</label>
              <input required name="pas"  type="password" class="form-control" id="password1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="sel1">Position list:</label>
              <select required name="level"  class="form-control" id="sel1">
                <option value="1">Khách Hàng</option>
                <option value="0">Quản Lý</option>
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