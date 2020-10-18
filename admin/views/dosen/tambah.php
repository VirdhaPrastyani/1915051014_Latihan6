<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=dosen&page=save" Method="POST">
	<div class="col-md-6">
	<div class="form group">
		<label for="">Nama Dosen</label>
		<input type="text" name="nama_dosen" required value="<?=(isset($_POST['nama_dosen']))?$_POST['nama_dosen']:'';?>" class="form-control"> 
		 <span class="text-danger"><?=(isset($err['nama_dosen']))?$err['nama_dosen']:'';?></span>
	</div>
	<div class="form-group">
        <label for="">ID</label>
        <input type="text" name="id_dosen" required value="<?=(isset($_POST['id_dosen']))?$_POST['id_dosen']:'';?>" class="form-control">
		 <span class="text-danger"><?=(isset($err['id_dosen']))?$err['id_dosen']:'';?></span>
        </div>
	<div class="form group">
		<label for="">nip</label>
		<input type="text" name="nip" required value="<?=(isset($_POST['nip']))?$_POST['nip']:'';?>" class="form-control">
		 <span class="text-danger"><?=(isset($err['nip']))?$err['nip']:'';?></span>
	</div>
    <div class="form group">
		<label for="">Alamat</label>
		<input type="text" name="alamat" required value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
		 <span class="text-danger"><?=(isset($err['alamat']))?$err['alamat']:'';?></span>
	</div>		
    <div class="form group">
		<label for="">Mengajar</label>
		<input type="text" name="mengajar" required value="<?=(isset($_POST['mengajar']))?$_POST['mengajar']:'';?>" class="form-control">
		 <span class="text-danger"><?=(isset($err['mengajar']))?$err['mengajar']:'';?></span>
	</div>
	 <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>
