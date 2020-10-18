<div class="row">
    <div class="pull-left">
        <h4>Daftar Dosen</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=dosen&page=add">
            <button class="btn btn-primary">Tambah Data</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Nama</td><td>ID</td><td>NIP</td><th>ALAMAT</th><th>MENGAJAR</th><td>AKSI</td>
            </tr>
        </thead>
        <tbody>
            <?php if($dosen != NULL){ 
                $no=1;
                foreach($dosen as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_dosen']?></td><td><?=$row['id_dosen'];?></td><td><?=$row['nip']?></td>
                        <td><?=$row['alamat']?></td><td><?=$row['mengajar']?></td>                        
                        <td>
                            <a href="index.php?mod=dosen&page=edit&id=<?=md5($row['id_dosen'])?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=dosen&page=delete&id=<?=md5($row['id_dosen'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>
