<html>
<head>
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
    <script src="js/jquery.min.js"></script> <!-- Load file jquery -->
</head>
<body>
    <h2>Cetak laporan berdasarkan tahun lulus</h2><hr>

    <form id="fftgpelamar" method="GET" action="lap-pelamar.php">
        
        <div id="form-tanggal">
            <label>Dari</label><br>
            <input class="easyui-datebox" placeholder="Masukkan angka tahun" name="Dari" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px">
            <br /><br />
            <label>Sampai</label><br>
            <input class="easyui-datebox" placeholder="Masukkan angka tahun" name="Sampai" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px">
            <br /><br />
        </div>

        <input class="easyui-linkbutton c1" type="submit" name="Submit"  value="Proses" style="width:100px;height:30px">
<input class="easyui-linkbutton c3" type="reset" name="reset" value="Close" style="width:100px;height:30px" onclick="javascript:$('#dlgtglpelamar').dialog('close')">       
    </form>


    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
    <script src="plugin/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->
</body>
     