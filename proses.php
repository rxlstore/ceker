<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function generateRandomToken($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';
    for ($i = 0; $i < $length; $i++) {
        $token .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $token;
}


system("clear");
// Teks tambahan
echo "\n\n";
echo "================================================================\n";
echo "             SELAMAT MENGGUNAKAN SCRIPT RXLSTORE \n";
echo "================================================================\n";
echo "  \\                    / \\  //\\       \n";
echo "       \\    |\\___/|      /   \\//  \\\\      \n";
echo "            /0  0  \\__  /    //  | \\ \\    \n";
echo "           /     /  \\/_/    //   |  \\  \\  \n";
echo "           @_^_@'/   \\/_   //    |   \\   \\\n";
echo "           //_^_/     \\/_ //     |    \\    \\\n";
echo "        ( //) |        \\\\\\      |     \     \n";
echo "      ( / /) _|_ /   )  //       |      \\     _\\\n";
echo "    ( // /) '/,_ _ _/  ( ; -.    |    _ _\\.-~        .-~~~^-.\n";
echo "  (( / / )) ,-{        _      `-.|.-~-.           .~         `.\n";
echo " (( // / ))  '/\\      /                 ~-. _ .-~      .-~^-.  \\\n";
echo " (( /// ))      `.   {            }                   /      \\  \\\n";
echo "  (( / ))     .----~-.\\        \\-'                 .~         \\  `. \\^-.\n";
echo "             ///.----..>        \\             _ -~             `.  ^-`  ^-_\n";
echo "               ///-._ _ _ _ _ _ _}^ - - - - ~                     ~-- ,.-~\n";
echo "                                                                  /.-~\n";
echo "===============================================================\n";


$smtpUsername = 'ridwanxlivia@gmail.com';
$smtpPassword = 'jbjxjbuhjtpkuaam';

// Meminta alamat email penerima dari pengguna
echo "|| Em : ridwanxlivia@gmail.com\n";
echo "|| ® FB : RIDWAN X LIVIA\n";
echo "|| ® IG : RXLSTORE.ME\n";
echo "|| ® GIT : github.com/rxlstore\n";


echo "==========================================\n";
echo "MASUKKAN EMAIL AKTIF KAMU UNTUK \n MENERIMA KODE PENGGUNAAN SCRIPT\n"; 
echo "==========================================\n";
$toEmail = readline("Masukkan alamat EMAIL KAMU: ");

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;

    // Mengatur alamat email pengirim menjadi 'ridwanxlivia@gmail.com'
    $mail->setFrom('ridwanxlivia@gmail.com');

    $mail->addAddress($toEmail);

    $randomToken = generateRandomToken(10);

    $mail->Subject = 'TOKEN JASTEB DANA';

    $mail->isHTML(true); // Set pesan sebagai HTML
    $mail->Body = <<<HTML
        <!-- Isi email dalam format HTML -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Selamat Bergabung di Komunitas RXLSTORE</title>
            <style>
                body {
                    background-color: orange;
                    color: black;
                    font-family: Arial, sans-serif;
                }
                .container {
                    background-color: white;
                    padding: 20px;
                    border-radius: 10px;
                    margin: 20px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    background-color: green;
                }
                table, th, td {
                    border: 1px solid white;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    color: white;
                }
            </style>
        </head>
        <body>
            <h2>Selamat Bergabung Di Komunitas RXLSTORE <br> TERIMAKASIH SUDAH MENGGUNAKAN SCRIPT KAMI. </h2>
            <p>KALIAN BISA MEMAKAI NAMA KAMI JIKA INGIN FAMES, <br> RXL~NAMAKALIAN</p>
            <div class="container">
                <table>
                    <tr>
                        <th>Email Kamu</th>
                        <th>Token</th>
                    </tr>
                    <tr>
                        <td>$toEmail</td>
                        <td>$randomToken</td>
                    </tr>
                </table>
            </div>
        </body>
        </html>
    HTML;

    $mail->send();

    echo "Email telah dikirim dengan sukses!\n";

    // Meminta pengguna untuk memasukkan kode (token) tanpa menampilkannya
    while (true) {
        $userInput = readline("Masukkan kode (token) yang Anda terima (tanpa menampilkan): ");

        // Periksa apakah kode yang dimasukkan oleh pengguna benar
        if ($userInput === $randomToken) {
            echo "Kode yang Anda masukkan benar!\n";
            break; // Keluar dari perulangan jika kode benar
        } else {
            echo "Kode yang Anda masukkan salah. Silakan coba lagi.\n";
        }
    }

    
    system("clear");
    // Fungsi untuk menampilkan animasi loading
function showLoadingAnimation() {
    $animationFrames = ['[       ]', '[===    ]', '[=====  ]', '[======]', '[ ======= ]', '[  ====== ]', '[   ===== ]', '[      ===]'];
    $frameCount = count($animationFrames);

    // Simpan posisi kursor saat ini
    echo "\033[s";

    for ($i = 0; $i < 5; $i++) {
        foreach ($animationFrames as $frame) {
            echo "\033[u"; // Kembali ke posisi kursor sebelumnya
            echo $frame;
            usleep(200000); // Tunda 200 ms
        }
    }

    echo "\033[u"; // Kembali ke posisi kursor sebelumnya
    echo "[DONE]\n"; // Tandai bahwa proses telah selesai
}

echo "Sabar, izin ke WhatsApp admin dulu biar work...\n";
showLoadingAnimation(); // Tampilkan animasi loading

// URL WhatsApp yang akan dibuka
$urlWhatsApp = "https://wa.me/6285735176988?text=Bang+izin+pakai+jasteb+dana";

// Membuka URL di peramban default Termux
system("termux-open-url $urlWhatsApp");

function sendMessage($message, $chatId, $botToken) {
    $telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
    $params = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    $response = file_get_contents($telegramApiUrl . '?' . http_build_query($params));
    $responseData = json_decode($response, true);

    if ($responseData['ok'] !== true) {
        echo "Error sending message: " . $responseData['description'] . "\n";
    } else {
        echo "Message sent successfully!\n";
    }
}
sleep(8);

system("clear");
system("clear");
// Teks tambahan
echo "\n\n";
echo "================================================================\n";
echo "             SELAMAT MENGGUNAKAN SCRIPT RXLSTORE \n";
echo "================================================================\n";
echo "  \\                    / \\  //\\       \n";
echo "       \\    |\\___/|      /   \\//  \\\\      \n";
echo "            /0  0  \\__  /    //  | \\ \\    \n";
echo "           /     /  \\/_/    //   |  \\  \\  \n";
echo "           @_^_@'/   \\/_   //    |   \\   \\\n";
echo "           //_^_/     \\/_ //     |    \\    \\\n";
echo "        ( //) |        \\\\\\      |     \     \n";
echo "      ( / /) _|_ /   )  //       |      \\     _\\\n";
echo "    ( // /) '/,_ _ _/  ( ; -.    |    _ _\\.-~        .-~~~^-.\n";
echo "  (( / / )) ,-{        _      `-.|.-~-.           .~         `.\n";
echo " (( // / ))  '/\\      /                 ~-. _ .-~      .-~^-.  \\\n";
echo " (( /// ))      `.   {            }                   /      \\  \\\n";
echo "  (( / ))     .----~-.\\        \\-'                 .~         \\  `. \\^-.\n";
echo "             ///.----..>        \\             _ -~             `.  ^-`  ^-_\n";
echo "               ///-._ _ _ _ _ _ _}^ - - - - ~                     ~-- ,.-~\n";
echo "                                                                  /.-~\n";
echo "===============================================================\n";

// Meminta alamat email penerima dari pengguna
echo "|| Em : ridwanxlivia@gmail.com\n";
echo "|| ® FB : RIDWAN X LIVIA\n";
echo "|| ® IG : RXLSTORE.ME\n";
echo "|| ® GIT : github.com/rxlstore\n";


echo "==========================================\n";

system("clear");

// Menjalankan file as.php dengan shell_exec
$output = shell_exec('php as.php'); // Gantilah path dengan path yang sesuai

if ($output !== null) {
    echo "Hasil eksekusi as.php:\n";
    echo $output;
} else {
    echo "Gagal menjalankan next.php.";
}



    // Tambahkan kode berikutnya di sini...
} catch (Exception $e) {
    echo "Gagal mengirim email: " . $mail->ErrorInfo;
}
?>