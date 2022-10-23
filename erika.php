<!DOCTYPE html>
<html lang="en">
<head>
    <title>erika quizz</title>
</head>
<body>
<h1>pertanyaan</h1>
  <form name="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <input type="text" name="username" placeholder="isi nama kamu..">
  <p> aku sedang mencoba menebak mood kamu dengan mengisi nomer dari 1-5 dibawah ini</p></br>
  <input type="number" name="number" placeholder="isi  nomor 1-5"></br></br>
  <p>jika kamu binggung mau melakukan apa hari ini silahkan isi nomer dari 1 - 5</p>
  <input type="number1" name="number1" placeholder="isi  nomor 1-5"></br></br>
  <p>kamu bingung mau makan apa hari ini? coba ini nomer 1-5 dibawah ini</p>
  <input type="number2" name="number2" placeholder="isi  nomor 1-5"></br></br>
  <p>kamu bingung mau belajar apa hari ini? coba isi kolom dibawa dengan nomer 1-5</p>
  <input type="number3" name="number3" placeholder="isi  nomor 1-5"></br></br>
  <button type="submit" name="submit">klik disini</button>  
</form>
<?php
if (isset($_POST['submit']) && !empty($_POST['username'])&& !empty($_POST['number'])){
    $username=$_POST['username'];
    $number=$_POST['number'];
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $number3=$_POST['number3'];
    echo "<br>";
    echo "Selamat Datang  ".$username."!";
    echo "<br>";
    echo "<br>";
    switch ($number) {
        case '1':
            echo "hari ini senang";
            break;
            case '2':
                echo "hari ini biasa saja";
                break;
                case '3':
                    echo "hari ini membosankan";
                    break;
                    case '4':
                        echo "moodnya kurang";
                        break;
                        case '5':
                            echo "badmood";
                            break;
        
        default:
            echo " ups sepertinya kamu mengisi data yang salah";
            break;
    }
    echo "<br>";
    echo "<br>";
    switch ($number1) {
        case '1':
            echo "mungkin kamu perlu ngopi hari ini  ";
            break;
            case '2':
                echo "mungkin lebih baik kamu belajar hari ini  ";
                break;
                case '3':
                    echo "sepertinya kamu butuh hiburan  ";
                    break;
                    case '4':
                        echo "coba deh nyeblak hari ini   ";
                        break;
                        case '5':
                            echo "kamu harus olahraga deh hari ini  ";
                            break;
        
        default:
            echo " ups sepertinya kamu mengisi data yang salah";
            break;
}
echo "<br>";
echo "<br>";
switch ($number2) {
    case '1':
        echo "seblak enak deh hari ini";
        break;
        case '2':
            echo "menurutku sate adalah pilihan terbaik";
            break;
            case '3':
                echo "batagor enak deh buat ngeganjel perut";
                break;
                case '4':
                    echo "mungkin mie ayam rekomendasi dari aku";
                    break;
                    case '5':
                        echo "chicken sabi deh";
                        break;
    
    default:
        echo " ups sepertinya kamu mengisi data yang salah";
        break;
}
echo "<br>";
echo "<br>";
switch ($number3) {
    case '1':
        echo "belajar konsep PBO Sabi lah";
        break;
        case '2':
            echo "kayaknya keren deh kalo bisa bahasa inggris";
            break;
            case '3':
                echo "php seru lohh coba deh";
                break;
                case '4':
                    echo "menurutku matematika menyenangkan";
                    break;
                    case '5':
                        echo "rekomendasi aku pemrograman web lagi hits nih coba deh";
                        break;
    
    default:
        echo " ups sepertinya kamu mengisi data yang salah";
        break;
}
}
else{
    echo "tolong isi kolom nama dan pertanyaan di atas";

}

?>

</body>
</html>