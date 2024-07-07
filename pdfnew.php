<?php

$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");
$statement = $pdo->prepare("SELECT * from form_no_302 where id=?");
$statement->execute(array($id));
$statement->execute();

$record = $statement->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<body>
    <!-- <div class="container"> -->

    <button type="submit" class="btn"onclick="downloadPDF()">
            Download</button>

        <div class="table-responsive">
            <table class="m-auto table table-bordered table-striped table-hover" border="1" id="mt" align="center" style="overflow-x: hidden;">
                <!-- <thead class="thead-dark"> -->

                <?php foreach ($record as $r) { ?>
                <tbody>
                    <tr>
                        <th>નામ : શ્રી/શ્રીમતી/શ્રીમાન</th>
                        <td><?= $r["Name"] ?></td>
                    </tr>
                    <tr>
                        <th>પિતાનું પૂરું નામ</th>
                        <td><?= $r["Father_full_name"] ?></td>
                    </tr>
                    <tr>
                        <th>માતાનું પૂરું નામ</th>
                        <td><?= $r["Mother_full_name"] ?></td>
                    </tr>
                    <tr>
                        <th>પત્નીનું પરું નામ</th>
                        <td><?= $r["Wife_full_name"] ?></td>
                    </tr>
                    <tr>
                        <th>જાતિ પુરૂષ / સ્ત્રી- તૃતીય જાતિ</th>
                        <td><?= $r["Gender"] ?></td>
                    </tr>
                    <tr>
                        <th>વૈવાહિક દરજજો</th>
                        <td><?= $r["Merried"] ?></td>
                    </tr>
                    <tr>
                        <th>જન્મ તારીખ</th>
                        <td><?= $r["Birth_date"] ?></td>
                    </tr>
                    <tr>
                        <th>ઉમર વર્ષ</th>
                        <td><?= $r["Age"] ?></td>
                    </tr>
                    <tr>
                        <th>પૂરો પાડેલ ઉમરનો પુરાવો</th>
                        <td><?= $r["Proof_of_age_provided"] ?></td>
                    </tr>
                    <tr>
                        <th>જન્મ સ્થળ / શહેર</th>
                        <td><?= $r["Birth_place"] ?></td>
                    </tr>
                    <tr>
                        <th>રાષ્ટ્રીયતા</th>
                        <td><?= $r["Nationality"] ?></td>
                    </tr>
                    <tr>
                        <th>નાગરિકતા</th>
                        <td><?= $r["Citizenship"] ?></td>
                    </tr>
                    <tr>
                        <th>પત્રવ્યવહારનું સરનામું</th>
                        <td><?= $r["Correspondence_address"] ?></td>
                    </tr>
                    <tr>
                        <th>ઘર નંબર તથા રોરી કે સોસાયટી</th>
                        <td><?= $r["House_no1"] ?></td>
                    </tr>
                    <tr>
                        <th>ગામ શહેર </th>
                        <td><?= $r["City"] ?></td>
                    </tr>
                    <tr>
                        <th>જિલ્લો</th>
                        <td><?= $r["District"] ?></td>
                    </tr>
                    <tr>
                        <th>રાજ્ય </th>
                        <td><?= $r["State"] ?></td>
                    </tr>
                    <tr>
                        <th>દેશ</th>
                        <td><?= $r["Country"] ?></td>
                    </tr>
                    <tr>
                        <th>પીનકોડ</th>
                        <td><?= $r["Pin_code"] ?></td>
                    </tr>
                    <tr>
                        <th>એસ.ટી.ડી.કોડ સાથે ફોન નંબર</th>
                        <td><?= $r["S_T_D"] ?></td>
                    </tr>
                    <tr>
                        <th>કાયમી સરનામું </th>
                        <td><?= $r["Address"] ?></td>
                    </tr>
                    <tr>
                        <th>ઘર નંબર તથા રોરી કે સોસાયટી</th>
                        <td><?= $r["House_no2"] ?></td>
                    </tr>
                    <tr>
                        <th>ગામ/શહેર</th>
                        <td><?= $r["City2"] ?></td>
                    </tr>
                    <tr>
                        <th>જિલ્લો</th>
                        <td><?= $r["District2"] ?></td>
                    </tr>
                    <tr>
                        <th>રાજ્ય</th>
                        <td><?= $r["State2"] ?></td>
                    </tr>
                    <tr>
                        <th>દેશ</th>
                        <td><?= $r["Country2"] ?></td>
                    </tr>
                    <tr>
                        <th>પીનકોડ</th>
                        <td><?= $r["Pin_code2"] ?></td>
                    </tr>
                    <tr>
                        <th>એસ.ટી.ડી. કોડ સાથે ફોન નંબર</th>
                        <td><?= $r["S_T_D2"] ?></td>
                    </tr>
                    <tr>
                        <th>વારસદારનું નામ અને સરનામું</th>
                        <td><?= $r["Name_address_of_heir"] ?></td>
                    </tr>
                    <tr>
                        <th>હિસ્સાની ટકાવારી</th>
                        <td><?= $r["Percentage_share"] ?></td>
                    </tr>
                    <tr>
                        <th>ઉમર</th>
                        <td><?= $r["Age2"] ?></td>
                    </tr>
                    <tr>
                        <th>સુચિત વિમેદાર સાથેનો સંબંધ</th>
                        <td><?= $r["Relationship_with_insured"] ?></td>
                    </tr>
                    <tr>
                        <th>જો વારસદાર સગીર હોવ તો નિયુક્ત વ્યક્તિનું પુરું નામ, ઉમર અને સરનામું</th>
                        <td><?= $r["Heirs_minor"] ?></td>
                    </tr>
                    <tr>
                        <th>વારસદાર સાથે નિયુક્ત વ્યક્તિનો સંબંધ</th>
                        <td><?= $r["Relation_of_appointee_to_heir"] ?></td>
                    </tr>
                    <tr>
                        <th>નિયુક્ત વ્યક્તિની સંમતિ દર્શાવતી સહી</th>
                        <td><?= $r["Consent_signature_of_designated_person"] ?></td>
                    </tr>
                    <tr>
                        <th>નિયુક્તિનું ઓળખપત્ર આઈ.ડી. નંબર</th>
                        <td><?= $r["Id_number"] ?></td>
                    </tr>
                    <tr>
                        <th>ખાતાનો પ્રકાર</th>
                        <td><?= $r["Types_of_account"] ?></td>
                    </tr>
                    <tr>
                        <th>તમારો ખાતા નંબર</th>
                        <td><?= $r["Account_no"] ?></td>
                    </tr>
                    <tr>
                        <th>માઈકર કોડ</th>
                        <td><?= $r["Micer_code"] ?></td>
                    </tr>
                    <tr>
                        <th>આઈ.એફ.એસ.સી કોડ</th>
                        <td><?= $r["I_F_S_C"] ?></td>
                    </tr>
                    <tr>
                        <th>નામ અને તમારી બેંકનું સરનામું</th>
                        <td><?= $r["Bank_name"] ?></td>
                    </tr>
                    <tr>
                        <th>વીમો લેવાનો છે તેનો ફોન નંબર</th>
                        <td><?= $r["Mobile_number"] ?></td>
                    </tr>
                    <tr>
                        <th>વીમો લેવાનો છે તેમનો ઇમેલ આઈ.ડી.</th>
                        <td><?= $r["Email"] ?></td>
                    </tr>
                    <tr>
                        <th>વીમો લેવાનો છે તેમની સહી/અંગુઠાનું નિશાન</th>
                        <td><?= $r["His_signature_is_to_be_insured"] ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js%2bjquery-ui.js%2bpopper.min.js.pagespeed.jc.DenuEnF4qx.js"></script>
<script src="https://kit.fontawesome.com/e489468df6.js" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js%2bjquery.stellar.min.js%2bjquery.countdown.min.js%2bjquery.magnific-popup.min.js.pagespeed.jc.AMbaSHvPTQ.js"></script>
<script>function downloadPDF() {
    let tbody = document.getElementById("mt").innerHTML;
    let options = {
        margin: 1,
        filename: 'output.pdf',
        image: {
            type: 'png',
            quality: 1

        },
        html2canvas: {
            scale: 2
        },
        jsPDF: {
            unit: 'in',
            format: 'tabloid',
            orientation: 'portrait'
        }
    }
    $.post({
        url: './code/fees_paid_report.php',
        data: 'data=' + tbody,
        success: function(html) {
            html2pdf().from(html).set(options).save();
        }
    });
}</script>
</body>

</html>
