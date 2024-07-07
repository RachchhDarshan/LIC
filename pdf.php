<!-- <?php

        echo ("Successfully record insert");

        ?> -->

<?php


$pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");


include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");

$id = $_GET['id'];
$statement = $pdo->prepare("SELECT * from form_no_302 where id=?");
$statement->execute(array($id));
$statement->execute();

$record = $statement->fetchAll();
// $statementuid = $pdo->prepare("SELECT * from register where Email_id=?");
// $statementuid->execute(array($email));
// $row = $statementuid->fetch();
// $uid=$row['id'];

?>
<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background: url("./images/loading2.gif") no-repeat center;
        /* margin-right: 1000px; */
        right: 20px;
        left: 5px;
        bottom: 45px;
        
    }
</style>
<div class="container">

    <div class="col-xl-3">

        <button type="submit" name="button1" class="addbtn form-control  border border-primary border-1" style="background-color:blue; color:white; margin-top: 15px" onclick="downloadPDF()">Download</button>

    </div>
    <div id="load" style="display:none"></div>
    <div class="table-responsive" class="contents">
        <table class="m-auto table table-bordered table-striped table-hover mt-4 mb-4" border="2" id="mt" align="center" style="overflow-x: hidden;margin-top: 100px;">
            <!-- <thead id="head" class="hfsize"> -->
            <tbody>
                <?php foreach ($record as $r) { ?>
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
                        <th>પોલીસી નું નામ</th>
                        <td><?= $r["Policy_name"] ?></td>
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
</div>
<script src="./js/jquery-3.6.1.min.js"></script>
<script>
   
    function downloadPDF() {
        $('#load').show();
        
        let tbody = document.getElementById("mt").innerHTML;
        let options = {
            margin: 1,
            filename: 'output.pdf',
            image: {
                type: 'png',
                quality: 0.5

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
            url: './pdf_design.php',
            data: 'data=' + tbody,
            success: function(html) {
                html2pdf().from(html).set(options).save().then(() => $("#load").hide());
            }
        });
    }
    
</script>


<?php include("./includes/script.php"); ?>
<!-- <script>
    $(document).ready(function() {
        $('#mt').DataTable();
    });
</script> -->
<?php include("./includes/footer.php"); ?>