<?php
$con->auth();
$conn=$con-> koneksi();
switch(@$_GET['page']){
	case'add':
		$dosen="select*from dosen";
		$dosen=$conn->query($dosen);
		$content="views/dosen/tambah.php";
		include_once 'views/template.php';
	break;
	
	case'save':
		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(empty($_POST['nama_dosen'])){
                $err['nama_dosen']="Nama dosen wajib diisi";
            }
			if(empty($_POST['id_dosen'])){
                $err['id_dosen']="id dosen wajib diisi";
            }
			if(empty($_POST['nip'])){
                $err['nip']="NIP wajib diisi";
            }
            if(empty($_POST['alamat'])){
                $err['alamat']="Alamat wajib diisi";
            }
            if(empty($_POST['alamat'])){
                $err['alamat']="Alamat wajib diisi";
            }
            if(empty($_POST['mengajar'])){
                $err['mengajar']="Mengajar wajib diisi";
            }
		if(!isset($err)){
				$dosen=$_SESSION['login']['id_dosen'];
					
					if(isset($_POST['edit'])){
					$nama_dosen=$_POST['nama_dosen'];
					$id_dosen=$_POST['id_dosen'];
					$nip=$_POST['nip'];
                    $alamat=$_POST['alamat'];
                    $mengajar=$_POST['mengajar'];
					// update user data
					$sql = "UPDATE dosen SET nama_dosen='$_POST[nama_dosen]', id_dosen='$_POST[id_dosen]', nip='$_POST[nip]', alamat='$_POST[alamat]', mengajar='$_POST[mengajar]', WHERE md5(id)='$_POST[id]'";

					}else{
						//save 
						$sql ="INSERT INTO dosen (nama_dosen, id_dosen, nip, alamat, mengajar) VALUES('$_POST[nama_dosen]','$_POST[id_dosen]','$_POST[nip]'), '$_POST[alamat]', '$_POST[mengajar]'";
					}
					if($conn->query($sql)==TRUE){
						header('Location:'.$con->site_url().'/admin/index.php?mod=dosen');
					}else{
					$err['msg']="Error: " . $sql . "<br>" . $conn->error;
					}
		}
		}else{
			$err['msg']="tidak diijinkan";
		}
		if(isset($err)){
            $dosen="select*from dosen";
            $dosen=$conn->query($dosen);
            $content="views/dosen/tambah.php";
            include_once 'views/template.php';
		}
        break;
        case'edit':
			$dosen="select*from dosen where md5(id_dosen)='$_GET[id]'";
            $dosen=$conn->query($dosen);
            $_POST=$dosen->fetch_assoc();

            $content="views/dosen/tambah.php";
            include_once 'views/template.php';
		break;
			
		case'delete':
			$dosen="delete*from dosen where md5(id_dosen)='$_GET[id]'";
			$dosen=$conn->query($dosen);
			header('Location:'.$con->site_url().'/admin/index.php?mod=dosen');
		break;
	default:
		$dosen="select * from dosen";
		$dosen=$conn->query($dosen);
		$conn->close();
		$content="views/dosen/tampil.php";
		include_once 'views/template.php';

}
?>	