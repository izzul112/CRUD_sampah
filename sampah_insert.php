<html>
    <head>
        <title>
            form sampah
        </title>
    </head>
    <body>
    <form action="proses_insert.php" method="POST">

        <p>
        <label for="id_sampah"> Id Sampah </label>
        <input type="text" name="id_sampah">
        </p>

        <p> 
        <label for="nama_sampah"> Nama Sampah </label>
        <input type="text" name="nama_sampah">
        </p>

        <p>
        <label for="jenis_sampah"> Jenis Sampah </label>
            <select name="jenis_sampah">
                <option value="alami">alami</option>
                <option value="hewani">hewani</option>
                <option value="plastik">plastik</option>
                <option value="kertas">kertas</option>
            </select>
        </p>
        
        <p>
        <label for="fungsi_3R"> Fungsi 3R </label>
        <input type="text" name="fungsi_3R">
        </p>
        
        <p>
        <label for="organik_anorganik"> Organik/Anorganik </label>
        <label><input type="radio"name="organik_anorganik"value="organik">organik</label>
        <input type="radio"name="organik_anorganik" value="anorganik">anorganik<br>
        </p>
        
        <p>
        <label for="basah_kering"> Basah/Kering </label>
        <input type="text" name="basah_kering">
        </p>

        <p>
        <label for="manfaat"> Manfaat </label>
        <label><input type="checkbox" name="manfaat" value="buat narok juz">buat pupuk </label>
        <label><input type="checkbox"name="manfaat"value="buat hiasan">buat hiasan </label>
        </p>
                
      
        
        <input type="submit" value="Submit Query" name="daftar">
       
        </form>
    </body>
</html>