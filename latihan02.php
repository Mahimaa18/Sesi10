<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>
    
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
    <div>
        NIM
        <input type="text" id="nim" name="txNIM">
    </div>

    <div>
        Nama
        <input type="text" id="nama" name="txNAMA">
    </div>

    <div>
        Jenis Kelamin
        <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
        <input type="radio" id="jk" name="txJK" value="P">Perempuan
    </div>
    
    <div>
        Jurusan

       <select name="txJURUSAN" id="jurusan">
        <option value = "KAB">TI KAB</option>
        <option value = "MTI">TI MTI</option>
        <option value = "DKV">Desain Komunikasi Visual</option>
        <option value = "DGM">TI DGM</option>
        <option value = "TIPAR">TI PAR</option>
        <option value = "SK">Sistem Komputer</option>
        <option value = "BD">Bisnis Digital</option>
       </select>
    </div>

    <div>
        Hobby
       <input type="checkbox" id="txhobi" name="Musik"> Dengar Musik
       <input type="checkbox" id="txhobi" name="Menari">Menari
       <input type="checkbox" id="txhobi" name="Tidur">Tidur
       <input type="checkbox" id="txhobi" name="Joging">Joging
       <input type="checkbox" id="txhobi" name="Baca Wattpad">Membaca
       <input type="checkbox" id="txhobi" name="Main Game">Main Game
    </div>

    <div>
        <button type="submit"> Kirim Data </button>
    </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementById ("Latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jkel = f.jk.value;
            let jurusan = f.jurusan.value;
            let hobi_musik = f.txhobi[0].checked;
            let hobi_Menari = f.txhobi[1].checked;
            let hobi_Tidur = f.txhobi[2].checked;
            let hobi_Joging = f.txhobi[3].checked;
            let hobi_Membaca = f.txhobi[4].checked;
            let hobi_Main = f.txhobi[5].checked;

            console.log("NIM: "+nim)
            console.log("Nama: "+nama)
            console.log("Jenis Kelamin: "+jkel)
            console.log("Jurusan: "+jurusan)
            console.log("Musik: "+hobi_musik)
            console.log("Menari: "+hobi_Menari)
            console.log("Tidur: "+hobi_Tidur)
            console.log("Joging: "+hobi_Joging)
            console.log("Baca Wattpad: "+hobi_Membaca)
            console.log("Main Game: "+hobi_Main)
            return false;
        }
    </script>
</body>
</html>