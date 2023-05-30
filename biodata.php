<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Biodata</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="Nama" id="" required autocomplete="off" placeholder="Masukan Nama"><br><br>
        <input type="number" name="Umur" id="" required autocomplete="off" placeholder="Masukan Umur"><br><br>
        <input type="text" name="Jk" id="" required autocomplete="off" placeholder="Masukan jenis kelamin"><br><br>
        <input type="submit" value="Simpan" name="btnSimpan"><br><br>
        <?php
    class Biodata {
        public $nama;
        public $umur;
        public $jk;


        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama != "") {
                return $nama;
            } else
            echo "Data Masih Kosong!";
        }
        public function setUmur($umur) {
            $this->umur = $umur;
            if ($this->umur != "") {
                return $umur;
            } else
            echo "Data Masih Kosong!";
        }
        public function setJk($jk) {
            $this->jk = $jk;
            if ($this->jk != "") {
                return $jk;
            } else
            echo "Data Masih Kosong!";
        }
    }
    
    $nama = trim($_POST['Nama']);
    $umur = trim($_POST['Umur']);
    $jk = trim($_POST['Jk']);
    
    $biodata = new Biodata();
    if(isset($_POST['btnSimpan'])) {
        echo "Nama : " . $biodata->setNama($_POST['Nama']) ;
        if(!empty($Nama))
        $simpan1 = is_numeric($Nama);
        if ($simpan1 == true) { 
        echo " (ini adalah Angka) ";
        } else {
        echo " (ini adalah huruf) ";
    }
    echo "<br>";
    echo "Umur : " . $biodata->setUmur($_POST['Umur']);
    if(!empty($umur))
        $simpan2 = is_numeric($umur);
        if ($simpan2 == true) { 
        echo " (ini adalah Angka) ";
    } else {
        echo " (ini adalah huruf) ";
    }
    echo "<br>";
    echo "jenis kelamin : " . $biodata->setJk($_POST['Jk']);
    if(!empty($Jk))
    $simpan3 = is_numeric($Jk);
    if ($simpan3 == true) { 
        echo " (ini adalah Angka) ";
    } else {
        echo " (ini adalah huruf) ";
    }
}
?>
</form>
</body>
</html>