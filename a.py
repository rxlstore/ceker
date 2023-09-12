import os
import time

# Fungsi untuk membersihkan layar di Termux
def clear_termux_screen():
    os.system('clear')  # Untuk Termux di beberapa perangkat Android

# Menggunakan fungsi untuk membersihkan layar
clear_termux_screen()

print("\n\n")
print("================================================================")
print("             SELAMAT MENGGUNAKAN SCRIPT RXLSTORE ")
print("================================================================")
print("  \\                    / \\  //\\       ")
print("       \\    |\\___/|      /   \\//  \\\\      ")
print("            /0  0  \\__  /    //  | \\ \\    ")
print("           /     /  \\/_/    //   |  \\  \\  ")
print("           @_^_@'/   \\/_   //    |   \\   \\")
print("           //_^_/     \\/_ //     |    \\    \\")
print("        ( //) |        \\\\\\      |     \     ")
print("      ( / /) _|_ /   )  //       |      \\     _\\")
print("    ( // /) '/,_ _ _/  ( ; -.    |    _ _\\.-~        .-~~~^-.")
print("  (( / / )) ,-{        _      `-.|.-~-.           .~         `.")
print(" (( // / ))  '/\\      /                 ~-. _ .-~      .-~^-.  \\")
print(" (( /// ))      `.   {            }                   /      \\  \\")
print("  (( / ))     .----~-.\\        \\-'                 .~         \\  `. \\^-.")
print("             ///.----..>        \\             _ -~             `.  ^-`  ^-_")
print("               ///-._ _ _ _ _ _ _}^ - - - - ~                     ~-- ,.-~")
print("                                                                  /.-~")
print("===============================================================")

# Meminta alamat email penerima dari pengguna
print("|| Em : ridwanxlivia@gmail.com")
print("|| ® FB : RIDWAN X LIVIA")
print("|| ® IG : RXLSTORE.ME")
print("|| ® GIT : github.com/rxlstore")
print("==========================================")

# Animasi loading selama 3 detik
for _ in range(9):
    print(".", end='', flush=True)
    time.sleep(0.5)
print()  # Membuat baris kosong setelah loading

# Menunggu 2 detik
time.sleep(2)

# Membuka dan menjalankan proses.php
proses_php_file = "proses.php"
os.system(f"php {proses_php_file}")

# Selesai
print("Proses selesai.")
