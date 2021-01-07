<?php 
    // Pengulangan
    // For
        // Insialisasi -> menentukan variable awal untuk pengulangan
        // Terminasi -> memberhentikan pengulangan
        // Increment -> agar pengulangan bisa maju atau mundur
    // While
    // Do.. While
    // Foreach

    // Pengulangan For
    // for( $i = 0; $i < 5; $i++ ) {
    //     echo "Hello people <br>";
    // }

    // --------------------------------------------------------------------

    // Pengulangan While
    // Tidak akan dijalankan ketika kondisi FALSE

    // nilai awal
    // $i = 0; 
    
    // kondisi
    // while($i < 5 ) {
    //     echo "Well Hello People <br>";

        // increment
        // $i++;
    // }

    // --------------------------------------------------------------------

    // Pengulangan Do While
    // Ketika kondisi bernilai FALSE, maka blok akan dijalankan 1 kali

    // $i = 0;
    // do{
    //     echo "Well Hello People <br>";
    //     $i++;
    // } while ( $i < 5 );

    // --------------------------------------------------------------------
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

        <table border="1" cellpadding="10" cellspacing="0" >
            
            <!-- <?php 
                for ( $i = 1; $i <= 3;  $i++) {
                    echo "<tr>";
                    for( $j = 1; $j <= 5; $j++ ) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
            ?> -->
            
            <!-- Gaya Templeting -->
            <!-- Kurung buka { bisa diganti dengan : dan kurung tutup } bida diganti dengan endfor; -->
            <!-- Begitu juga pengulangan yang lainnya (if, foreach) -->
            
            <?php for ( $i = 1; $i <= 5; $i++ ) { ?>

                <?php if( $i % 2 == 1) : ?>
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>

                    <?php for ( $j = 1; $j <=5; $j++) : ?>
                        <td>
                            <!-- php echo bisa diganti dengan = -->
                            <?php echo "$i, $j"?> 
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php 
                }
            ?>

        </table>
    
</body>
</html>