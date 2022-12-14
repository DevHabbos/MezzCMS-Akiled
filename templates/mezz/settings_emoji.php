<?php
$emoji_active = 'active';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/emoji.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: <?= $lang["TittleHader6"] ?></title>
</head>

<body class="container">
    <script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">
        <?php
        if (!isset($_SESSION['id'])) {
            include('auth/login.php');
        } else {
            include('auth/logged.php');
        }
        ?>
        <?php include_once("includes/menu.php"); ?>
        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-settings">
                            <?php include_once("includes/menu_settings.php"); ?>
                            <link rel="stylesheet" href="/templates/brain/style/css/main2.css?v=22" type="text/css">
                            <div class="bottomBar-emoji-secim-box">
                                <fieldset class="form__fieldset form__fieldset--box" style="margin-top: 15px;">
                                    <h4><?= $lang["emojititle"]; ?></h4>
                                    <p align="justify" style=" width: 90%; "><?= $lang["emojidec"]; ?></p>
                                    <div class="emoji-list">
                                        <form action="" method="POST">
                                            <?php User::EditEmoji(); ?>
                                            <div class="emoji-kategori-box">???? Emoticonos ???</div>
                                            <input none="S??r??tan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len G??zlerle Parlayan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sevin?? G??zya??lar??yla Y??zle??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yuvarlan??p G??lmek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ri G??zl?? S??r??tan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len G??zlerle S??r??tan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Terle S??r??tan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??a???? ??a???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??z K??rpan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len G??zlerle G??len Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ahane Yemek G??ren Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??ne?? G??zl?????? ??le G??len Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A????k Olmu?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??p??c??k G??nderen Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??p????en Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len G??zlerle ??p????me Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kapal?? G??zlerle ??p????me Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Biraz G??len Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sar??lan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Par??ldayan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D??????nen Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ka?? Kald??rm???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="N??tr Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??fadesiz Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A????zs??z Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yuvarlanan G??zlerle Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="S??r??tan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Azimli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??zg??n ama Rahatlam???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??z?? A????k Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Konu??mayan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??a????rm???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Uykulu Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yorgun Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Uyuyan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Rahatlam???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dil ????karan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dil ????kar??p G??z K??rpan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dil ????kar??p ??a???? Bakan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Salya Akan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="E??lenmeyen Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Terli Seksi Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dalg??n Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??a??k??n Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ba?? A??a???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Parag??z Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??a??k??n Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hafifce As??k Surat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??a??k??n Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hayal K??r??kl??????na U??ram???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Endi??eli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??zg??n Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??layan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="H??ng??r H??ng??r A??layan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??z?? A????k Kalm???? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kederli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Korkun?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yorgun Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Patlayan Kafa" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Di?? G??steren Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Terli ve Endi??eli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Korkudan ??????l??k Atan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??zarm???? Surat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="E??lenceli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ba???? D??nen Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Surat Asan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??zg??n Surat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Argo Kullanan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Maske Takan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Termometreli Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ba?? Bandajl?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mi??desi Bulanan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kusan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hap????ran Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Melek Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kovboy ??apkal?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Palya??o Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yalanc?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sus ????areti Yapan Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tek G??zl??kl?? Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??nek Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Boynuzlu K??rm??z?? ??eytan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Boynuzlu K??rm??z?? ??eytan Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Canavar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Goblin" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kafatas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hayalet" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Uzayl??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Robot Y??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kaka Y??????n??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Personas ???</div>
                                            <input none="O??lan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bebek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ya??l?? Adam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ya??l?? Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Uzayl?? Canavar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Doktor" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Doktor" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek ????renci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n ????renci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Yarg????" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Yarg????" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek ??ift??i" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n ??ift??i" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek A??????" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n A??????" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Tamirci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Tamirci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Fabrika ??????isi" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Fabrika ??????isi" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Ofis ??al????an??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Ofis ??al????an??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Bilim ??nsan??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Bilim ??nsan??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Teknoloji Uzman??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Teknoloji Uzman??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek ??ark??c??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n ??ark??c??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Sanatc??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Sanatc??" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek Pilot" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Pilot" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Astronot" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n Astronot" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Erkek ??tfaiyeci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Kad??n ??tfaiyeci" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Polis Memuru" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Dedektif" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Dedektif" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="Kad??n Dedektif" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="Muhaf??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Muhaf??z" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Muhaf??z" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="??n??aat ??????isi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek ??n??aat ??????isi" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n ??n??aat ??????isi" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Prens" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Prenses" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="T??rban Giyen Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="T??rban Giyen Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="T??rban Giyen Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="??in ??apkal?? Adam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ba????rt??l?? Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sakall?? Adam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sar??????n Erkek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sar??????n Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Sar??????n Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Smokinli Erkek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pe??eli Gelin" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hamile Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Emzirme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bebek Melek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Noel Baba" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Noel Anne" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n B??y??c??" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek B??y??c??" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Peri" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Peri" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Vampir" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Vampir" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Deniz K??z??" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Deniz Erke??i" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Elf" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Elf" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Cin" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Cin" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Zombi" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Erkek Zombi" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Ka??lar??n?? ??atan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ka??lar??n?? ??atan Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Ka??lar??n?? ??atan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Surat Asan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Somurtkan Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Somurtkan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Hay??r ????areti Yapan Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hay??r Yapan Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Hay??r Yapan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="??yi Hareket Eden Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tamam El Hareketi Yapan Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Tamam El Hareketi Yapan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Elini Deviren Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Elini Deviren Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Elini Deviren Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="El Kald??ran Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Kald??ran Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="El Kald??ran Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="E??ilen Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="E??ilen Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="E??ilen Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Elini Ba????na Atan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Elini Ba????na Atan Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Elini Ba????na Atan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Omuz Silken Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Omuz Silken Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Omuz Silken Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Masaj Yapt??ran Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Masaj Yapt??ran Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Masaj Yapt??ran Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Sa?? Kestiren Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sa?? Kestiren Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Sa?? Kestiren Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Y??r??yen Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??r??yen Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Y??r??yen Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Ko??an Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ko??an Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Ko??an Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Dans Eden Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dans Eden Erkek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tav??an Kulakl?? ??nsanlar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tav??an Kulakl?? Erkekler" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Tav??an Kulakl?? Kad??nlar" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Buhar Odas??ndaki Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Buhar Odas??ndaki Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Tak??m Elbise Giyen Adam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Siluette G??????s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Siluette B??stler" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Ele Tutu??an Erkek ve Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Ele Tutu??an ??ki Adam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Ele Tutu??an ??ki Kad??n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??p??c??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??p??c??k: Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="???????????????????????????"></input>
                                            <input none="??p??c??k: Kad??n, Kad??n" class="emojibox" type="submit" name="emojiuser" value="???????????????????????????"></input>
                                            <input none="??ift ile Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kalpli ??ift: Adam, Adam" class="emojibox" type="submit" name="emojiuser" value="????????????????????"></input>
                                            <input none="Kalpli ??ift: Kad??n, Kad??n" class="emojibox" type="submit" name="emojiuser" value="????????????????????"></input>
                                            <input none="Aile" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Aile: Erkek, Kad??n, Erkek" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Erkek, Kad??n, K??z" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, K??z, Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Kad??n, O??lan, O??lan" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Kad??n, K??z, K??z" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Erkek, O??lan" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Erkek, Erkek, K??z" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Erkek, Erkek, K??z, O??lan" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Erkek, O??lan, O??lan" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Erkek, K??z, K??z" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Kad??n, Kad??n, Erkek" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, Kad??n, K??z" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, Kad??n, K??z, Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Kad??n, Kad??n, O??lan, O??lan" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Kad??n, Kad??n, K??z, K??z" class="emojibox" type="submit" name="emojiuser" value="?????????????????????????"></input>
                                            <input none="Aile: Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Aile: Erkek, O??lan, O??lan" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Erkek, K??z" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Aile: Erkek, K??z, Erkek" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Erkek, K??z, K??z" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, Erkek" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Aile: Kad??n, Erkek, Erkek" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, K??z" class="emojibox" type="submit" name="emojiuser" value="???????????"></input>
                                            <input none="Aile: Kad??n, K??z, Erkek" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <input none="Aile: Kad??n, K??z, K??z" class="emojibox" type="submit" name="emojiuser" value="??????????????????"></input>
                                            <div class="emoji-kategori-box">???? Animales ???</div>
                                            <input none="S??r??tan Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??len G??zlerle S??r??tan Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sevin?? G??zya??lar??yla Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kalp G??zl?? G??l??mseyen Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Alayc?? Bir G??l??mseme ile Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kedi Y??z?? ??p????me" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yorgun Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??layan Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Somurtkan Kedi Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??z??n?? Kapatan Maymun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Duymayan Maymun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??z??n?? Kapatan Maymun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??arp????ma" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Maymun Surat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Maymun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Goril" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??pek Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??pek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kani??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kurt Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tilki Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kedi Surat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kedi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Aslan Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kaplan Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kaplan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Leopar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="At Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="At" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tek Boynuzlu At" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Zebra" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??nek Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??k??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Manda" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??nek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domuz Surat??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domuz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domuz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domuz Burnu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Koyun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Koyun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ke??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Deve" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Deve" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Z??rafa" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fil" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gergedan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fare Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fare" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="S????an" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hamster Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tav??an Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tav??an" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kirpi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yarasa" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ay?? Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Koala" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Panda Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pati ??zleri" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Horoz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tavuk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Horoz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Civciv" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Civciv" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ne Bakan Civciv" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ku??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Penguen" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kartal" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??rdek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bayku??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kurba??a Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Timsah" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kaplumba??a" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kertenkele" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??lan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ejderha Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ejderha" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sauropod" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="T-Rex" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="F????k??ran Balina" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Balina" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yunus" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bal??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tropikal Bal??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Balon Bal??????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??pek Bal??????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ahtapot" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Spiral Kabuk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yenge??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Karides" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kalamar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Salyangoz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kelebek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="T??rt??l" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kar??nca" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bal Ar??s??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="U??ur B??ce??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kriket" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Akrep" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Flores???</div>
                                            <input none="Buket" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kiraz ??i??e??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Beyaz ??i??ek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??l" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Solmu?? G??l" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ebeg??meci" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ay??i??e??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??i??ek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Lale" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fidan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yaprak D??kmeyen A??a??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yaprak D??ken A??a??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Palmiye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kakt??s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pirin?? Demeti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ot" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D??rt Yaprakl?? Yonca" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ak??aa??a?? Yapra????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D????en Yaprak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="R??zgarda ????rp??nan Yaprak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mantar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kestane" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Mundo ???</div>
                                            <input none="Avrupa-Afrika G??steren D??nya" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Amerikay?? G??steren D??nya" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Asya-Avustralya G??steren D??nya" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Meridyenli K??re" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yeni Ay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hilal Ay??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??lk ??eyrek Ay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kambur Ay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dolunay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??????len Ay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Son ??eyrek Ay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hilal Ay??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hilal" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yeni Ay Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??lk ??eyrek Ay Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Son ??eyrek Ay Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dolunay Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??ne?? Y??z??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Beyaz Orta Y??ld??z" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Parlayan Y??ld??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kayan Y??ld??z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bulut" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Bulut Arkas??ndaki G??ne??" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="G??kku??a????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ya??mur Damlal?? ??emsiye" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="??im??ek" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Kardan Adam" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Ate??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Damlac??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Su Dalgas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Noel A??ac??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Par??lt??" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Tanabata A??ac??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??am Dekorasyonu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Comida???</div>
                                            <input none="??z??m" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kavun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Karpuz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mandalina" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Limon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Muz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ananas" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??rm??z?? Elma" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ye??il Elma" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Armut" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??eftali" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kiraz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ilek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kivi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domates" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hindistan Cevizi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Avokado" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Patl??can" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Patates" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Havu??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="M??s??r" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Salatal??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Brokoli" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yer F??st??????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ekmek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kruvasan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Baget Ekmek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ubuk Kraker" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Krep" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Peynir Dilimi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kemikli Et" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kanat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kesilmi?? Et" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Domuz Past??rmas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hamburger" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Patates K??zartmas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pizza" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sosisli" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sandvi??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Taco" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Burrito" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yemek Pi??irme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kap Yemek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ka????kl?? Kase" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ye??il Salata" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Patlam???? M??s??r" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Konserve" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bento Kutusu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pirin?? Kraker" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pirin?? Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pi??mi?? Pirin??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??ri Pirin??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Buharlama Kasesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Spagetti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kavrulmu?? Tatl?? Patates" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Oden" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Su??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??zarm???? Karides" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Girdapl?? Bal??k Kek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dango" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hamur Tatl??s??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ans Kurabiyesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Paket Servisi Kutusu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yumu??ak Dondurma" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tra??lanm???? Buz" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dondurma" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tatl?? ????rek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kurabiye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Do??um G??n?? Pastas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pasta Dilimi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Turta" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??ikolata" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??eker" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Lolipop" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Muhallebi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bal K??p??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Biberon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bir Bardak S??t" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bir Fincan S??cak ????ecek" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Saps??z ??ay Fincan??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hat??r" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ha??ha?? Mantarl?? ??i??e" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??arap Barda????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kokteyl Barda????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tropikal ????ecek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bira Kupas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tungur Bira Kupalar??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Toku??turulan Bira Bardaklar??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="????ki Olan Bardak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pipetli Bardak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yemek ??ubuklar??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??atal ve B????ak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ka????k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Deportes ???</div>
                                            <input none="At Yar??????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kayak????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n T??rmanma" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="T??rmanan Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Lotus Pozisyonunda Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Lotus Pozisyonunda Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Golf Oynayan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Golf" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="Kad??n Golf" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="S??rf Yapan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek S??rf????" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n S??rf????" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Teknede K??rek ??eken Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Adam K??rekli Tekne" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Teknede K??rek ??eken Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Y??zen Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??zen Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Y??zen Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Z??playan Top" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Adam Z??playan Top" class="emojibox" type="submit" name="emojiuser" value="???????????????"></input>
                                            <input none="Kad??n Z??playan Top" class="emojibox" type="submit" name="emojiuser" value="???????????????"></input>
                                            <input none="A????rl??k Kald??ran Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A????rl??k Kald??ran Adam" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="A????rl??k Kald??ran Kad??n" class="emojibox" type="submit" name="emojiuser" value="????????????????"></input>
                                            <input none="Bisiklet S??ren Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bisiklet S??ren Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Bisiklet S??ren Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Da??da Bisiklet S??ren Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Da??da Bisiklet S??ren Adam" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Da??da Bisiklet S??ren Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Amuda Kalkan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Amuda Kalkan Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Amuda Kalkan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="G??re??en ??nsanlar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkekler G??re??" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??nlar G??re??" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Su Topu Oynayan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Su Topu Oynayan Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Su Topu Oynayan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Hentbol Oynayan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hentbol Oynayan Erkek" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Hentbol Oynayan Kad??n" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Hokkabazl??k Yapan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Erkek Hokkabazl??k" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Kad??n Hokkabazl??k" class="emojibox" type="submit" name="emojiuser" value="?????????????"></input>
                                            <input none="Sirk ??ad??r??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bilet" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kupa" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Spor Madalyas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="1.lik Madalyas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="2.lik Madalyas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="3.l??k Madalyas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Futbol Topu" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Beyzbol Topu" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Basketbol Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Voleybol Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Amerikan Futbolu Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ragbi Futbolu Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tenis Raketi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bowling" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kriket Oyunu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??im Jokeyi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Buz Hokeyi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Masa Tenisi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Badminton" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Boks Eldiveni" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D??v???? Sanatlar?? ??niformas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Delik ile Bayrak" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Buz Pateni" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Olta Kam??????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ko??u ??st??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kayaklar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??zak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Curling Ta????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dart" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bilardo Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Konsol" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kumar Makinesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Zar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tiyatro" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sanat???? Paleti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="M??zik" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mikrofon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kulakl??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Saksafon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gitar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="M??zikal Klavye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Trompet" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Keman" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Davul" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Clepper" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yay ve Ok" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Lugares y Viajes???</div>
                                            <input none="Japonya Haritas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Volkan" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fuji Da????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ev" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bah??eli Ev" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ofis Binas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Japon Postanesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Postane" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hastane" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Banka" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Otel" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??k Oteli" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bakkal" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Okul" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="B??y??k Ma??aza" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Fabrika" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Japon Kalesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kale" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D??????n" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tokyo Kulesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??zg??rl??k An??t??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kilise" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Cami" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sinagog" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kabe" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??e??me" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="??ad??r" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Sisli" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??ld??zlarla Gece" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Da??lar??n ??zerinde G??n Do??umu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??ndo??umu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Alacakaranl??k Alt??ndaki ??ehir" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??n Bat??m??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gece K??pr??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Samanyolu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Atl??kar??nca" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="D??nmedolap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Lunapark H??z Treni" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Lokomotif" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Vagon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??ksek H??zl?? Tren" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="H??zl?? Tren" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tren" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Metro" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hafif Rayl??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??stasyon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tramvay" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Monorey" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Da?? Demiryolu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tramvay Arabas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Otob??s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gelen Otob??s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Troleyb??s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Minib??s" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ambulans" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??tfaiye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Polis Arabas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yakla??an Polis Arabas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Taksi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gelen Taksi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Otomobil" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yakla??an Otomobil" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Teslimat Kamyonu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Masfall?? Kamyon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Trakt??r" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bisiklet" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Scooter" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Motorlu Scooter" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Otob??s Dura????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Benzin Pompas??" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Polis Arabas?? I????????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tekne" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="S??rat Teknesi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Gemi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="U??ak Kalk????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="U??ak Var????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Oturma Yeri" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Helikopter" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="S??spansiyon Demiryolu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Da?? Teleferi??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hava Tramvay??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Roket" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="U??an Daire" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Havai Fi??ek" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Maytap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ay G??r??nt??leme T??reni" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Moai Heykeli" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pasaport Kontrol??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??mr??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bagaj Teslim Yeri" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sol Bagaj" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Objetos ???</div>
                                            <input none="De??erli Ta??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="G??zl??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kravat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ti????rt" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kot" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="E??arp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Eldiven" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ceket" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??orap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Elbise" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kimono" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bikini" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n Giysisi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??anta" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El ??antas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Debriyaj ??antas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Okul S??rt ??antas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kundura" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ko??u Ayakkab??s??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Topuklu Ayakkab??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n Sandaleti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n Botu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ta??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kad??n ??apkas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sihirbaz ??apkas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mezuniyet Kepi" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Normal ??apka" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ruj" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Y??z??k" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kapal?? ??emsiye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="???? ??antas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Banyo Yapan Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yataktaki Ki??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??k Mektubu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bomba" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yatay Trafik Lambas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dik Trafik Lambas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??n??aat" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??apa" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Tespih" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mutfak B????a????" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Vazo" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Berber Dire??i" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ya?? Varili" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kum Saati Biti??" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Kum Saati Doldurma" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Cep Saati" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Alarm Saati" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Kronometre" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Zamanlay??c?? Saat" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Balon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Parti Bombas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Konfeti Topu" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Japon Bebekler" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Olta" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="R??zgar ??an??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kurdele" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Hediye" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kristal Top" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Radyo" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Telefon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ev Telefonu" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Telefon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Pil" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kablo" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Bilgisayar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Disket" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="CD" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Film Kameras??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Televizyon" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kamera" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Video Kamera" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="B??y??te??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kitap" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Rapor" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dosya" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Takvim" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Takvim" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Cetvel" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kilit" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??eki??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Silah" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kap??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sigara" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Oklu Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="K??r??k Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??kili Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Parlayan Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="B??y??yen Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Mavi Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ye??il Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sar?? Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kurdeleli Kalp" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ter Damlac??klar??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Ossuruk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <div class="emoji-kategori-box">???? Se??as???</div>
                                            <input none="Be??enme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Be??enmeme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kasl?? Kollar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="??z ??ekim" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sa?? ????aret Etme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yukar?? ????aret Etme" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Orta Parmak ????areti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A??a???? ????aret Etme" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Zafer Eli" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="??apraz Parmaklar" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Vulkan Selam??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Boynuz ????areti" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Merhaba" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Tamam" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yumruk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sa?? Yumruk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Sol Yumruk" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Arkas??" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="El Sallamak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Yaz?? Yazmak" class="emojibox" type="submit" name="emojiuser" value="???"></input>
                                            <input none="Alk????lamak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Katlanm???? Eller" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Kulak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Burun" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dil" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="A????z" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                            <input none="Dudak" class="emojibox" type="submit" name="emojiuser" value="????"></input>
                                        </form>
                                    </div>
                            </div>

                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.php'); ?>
    </div>
    <script src="/assets/scripts/app.js"></script>
</body>

</html>