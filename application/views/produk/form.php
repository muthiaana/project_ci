<form action="<?php echo site_url("pelanggan/submit"); ?>" method="POST">
<div class="form-group row">
      <div class="col-sm-10">
      </div>
    </div>
    <div class="form-group">
      <label for="inputnama">Nama Produk</label>
      <input type="text" class="form-control" name="namaproduk" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Harga</label>
      <input type="password" class="form-control" name="harga">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Satuan</label>
      <select class="form-control" name="satuan">
      	<option>----</option>
        <option>Buah</option>
        <option>Box</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect2">Qty</label>
      <input type="text" class="form-control" name="qty" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Image</label>
      <input type="file" class="form-control-file" name="image" aria-describedby="fileHelp">
    </div>
    <fieldset class="form-group">
      <legend>Radio buttons</legend>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
-----------------