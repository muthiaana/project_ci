<form action="<?php echo site_url("pelanggan/submit"); ?>" method="POST">
<div class="form-group row">
      <div class="col-sm-10">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pelanggan</label>
      <input type="text" class="form-control" name="namapelanggan">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" class="form-control" name="email">
    </div>
    <div>
      <label for="exampleSelect2">Telefon</label>
      <input type="text" class="form-control" name="telefon">
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Alamat</label>
      <textarea class="form-control" name="alamat" rows="3"></textarea>
    </div>
    <fieldset class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
-----------------