<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
    <div>
        NIM
        <input type="text" name="txNIM">
    </div>

    <div>
        Nama
        <input type="text" name="txNAMA">
    </div>

    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" value="P">Perempuan
    </div>
    
    <div>
        Jurusan

       <select name="txJURUSAN">
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
       <input type="checkbox" name="Musik"> Dengar Musik
       <input type="checkbox" name="Menari">Menari
       <input type="checkbox" name="Tidur">Tidur
       <input type="checkbox" name="Joging">Joging
       <input type="checkbox" name="Baca Wattpad">Membaca
       <input type="checkbox" name="Main Game">Main Game
    </div>

    <div>
        <button type="submit"> Kirim Data </button>
    </div>
    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jkel = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("Musik").checked;
            let hobi_Menari = f.namedItem("Menari").checked;
            let hobi_Tidur = f.namedItem("Tidur").checked;
            let hobi_Joging = f.namedItem("Joging").checked;
            let hobi_Membaca = f.namedItem("Baca Wattpad").checked;
            let hobi_Main = f.namedItem("Main Game").checked;

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