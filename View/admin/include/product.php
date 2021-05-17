<div class="content__main">
  <div class="row">
    <div class="col-sm-6">
      <input type="text">
    </div>
    <div class="col-sm-6">
      <a href="" class="float-right add_poup"  data-toggle="modal" data-target="#form"><i class="bi bi-patch-plus"></i></a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">IMG</th>
      <th  scope="col">Name Product</th>
      <th scope="col">Catalog</th>
      <th scope="col">Sale</th>
      <th scope="col">Price</th>
      <th scope="col">view</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $stt=1; if($data!=0) foreach ($data as $key => $vl) {
      ?>
      
      <tr>
        <form method="POST" action="<?php   echo url_admin; ?>"> 
          <th scope="row"><?php echo $stt++; ?></th>
          <td style="width: 100px;"><img  src="View/public/img/<?php echo $vl['img']; ?>" alt=""></span>
            <td><span><?php echo $vl['name']; ?></span>
             
            </td>
            <td>
              <?php foreach ($menu as $key => $value) {
                if ($vl['id_category']== $value['id']) {
                  ?>
                  <span><?php echo $value['name']; ?></span>
                  <?php
                }
              } ?></td>

              <td><span> <?php echo $vl['sale']; ?> </span>
               <span hidden><?php echo $vl['introduce']; ?></span>
              </td>
              <td>
                <span> <?php echo $vl['price_new']; ?> </span>
              </td>
              <td>
                <span> <?php echo $vl['view']; ?> </span>
              </td>
              <td>
                <span> <?php echo $vl['date']; ?> </span>
              </td>
              <td class="trash">

                <a href="" class="edit"  data-toggle="modal" data-target="#form"><i class="bi bi-pencil-square"></i></a>
                <!--             <button type="submit" class="save" value=" <?php echo $vl['id']; ?>" name="edit" onclick="return (confirm('Bạn Có muốn sửa ??'))"><i class="bi bi-save"></i></button> -->
                <a href="<?php echo url_admin; ?>&view=product&del=<?php echo $vl['id'];  ?>" onclick="return (confirm('Bạn Có muốn xóa <?php  echo $vl['name'];   ?>'))"><i class="bi bi-trash"></i></a>
              </td>

            </form>
          </tr>
          <?php
        } ?>
      </tbody>
    </table>
    <div class="add_form post_form">
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
                  <input required name="name" type="text" class="name form-control" placeholder="Tên ">
                </div>

                <div class="input-group-prepend ">
                  <div class="form-group">
                    <label for="danhmuc">Danh Mục</label>
                    <select class="form-control" id="danhmuc" name="id_category">
                      <?php foreach ($menu as $key => $ve) {
                        if ($ve['childen']==0) {

                          ?>
                          <option value="<?php echo $ve['id']; ?>"><?php echo $ve['name']; ?></option>
                          <?php
                        }
                      } ?>
                    </select>
                  </div>
                  <div class="form-group" style="margin-left: 1em">
                    <label for="name">IMG</label>
                    <input required name="img" type="file" accept=".png, .jpg, .jpeg" class="form-control" placeholder="Tên ">
                  </div>

                </div>
                <div class="form-group">
                  <label for="name">sale</label>
                  <input required name="sale" type="number" class="sale form-control" placeholder="0">
                </div>
                <div class="form-group">
                  <label for="name">Price</label>
                  <input required name="price_new" type="number" class="price form-control" placeholder="0">
                </div>
                <div class="form-group">
                  <label for="email1">introduce</label>

                  <textarea  class="form-control" name="introduce" id="editor"></textarea>
                </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" name="add"  class="btn btn-success aa">Submit</button>
                <button type="submit" name="edit"  class="btn btn-success ee">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
     $(document).ready(function() {
    var cmt=$('.edit');
    for (a of cmt) {
      a.addEventListener('click', (e)=>{
        e.preventDefault();
        console.log(e.path[3].childNodes);
        $('.name').val(e.path[3].childNodes[6].innerText);
        $('.sale').val(e.path[3].childNodes[10].innerText);
        $('.price').val(e.path[3].childNodes[12].innerText);
        $('.ee').val(e.path[3].childNodes[3].innerText);
         // console.log(e.path[3].childNodes[12]);
         $('#editor').val(e.path[3].childNodes[10].children[1].innerText);
        // $('#editor').val(e.path[3].childNodes[5].innerText);
        // $('#prant_id').val(e.path[3].childNodes[11].innerText);
        $('.aa').css("display","none");
        $('.ee').css("display","block");
      });
    }
    $('.add_poup').click(function(){
      $('.ee').css("display","none");
        $('.aa').css("display","block");
      $('.edit').hidden();
       $('.name').val("");
        $('.sale').val("");
        $('.price').val("");
    });

  });

  </script>