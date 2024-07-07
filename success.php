

<?php
$pdo = new PDO("mysql:host=localhost;dbname=client", "root", "");

include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/connection.php");
$uid=$_SESSION['USER'];

$statementuid = $pdo->prepare("SELECT * from register where id=?");
$statementuid->execute(array($uid));
$row = $statementuid->fetch();
$uid=$row['id'];

$statement = $pdo->prepare("SELECT * from form_no_302 where User_id=?");
$statement->execute(array($uid));
$statement->execute();

$record = $statement->fetchAll();

?>
<!-- 

<div class="row justify-content-end">
    <div class="col-xl-2">
        <a href="./form_no_302.php"><input type="button" class="addbtn form-control  border border-primary border-1 mb-1 mt-3" style="background-color:blue; color:white;" value="Form No : 302"> </input></a>
    </div>
</div> -->
    <div class="table-responsive">
        <table class="m-auto table table-striped table-hover mt-4 mb-4" border="2" id="mt" align="center" style="overflow-x: hidden;margin-top: 100px;">
            <!-- <thead class="thead-dark"> -->

            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <th>નામ : શ્રી/શ્રીમતી/શ્રીમાન</th>
                    <th>પિતાનું પૂરું નામ</th>
                    <th>માતાનું પૂરું નામ</th>
                    <th>પત્નીનું પરું નામ</th>
                    <!-- <th>જાતિ પુરૂષ / સ્ત્રી- તૃતીય જાતિ</th> -->
                    <th>વૈવાહિક દરજજો</th>
                    <!-- <th>જન્મ તારીખ</th> -->
                    <th>ઉમર વર્ષ</th>
                    <!-- <th>પૂરો પાડેલ ઉમરનો પુરાવો</th> -->
                    <!-- <th>જન્મ સ્થળ / શહેર</th> -->
                    <!-- <th>રાષ્ટ્રીયતા</th> -->
                    <!-- <th>નાગરિકતા</th> -->
                    <!-- <th>પત્રવ્યવહારનું સરનામું</th> -->
                    <!-- <th>ઘર નંબર તથા રોરી કે સોસાયટી</th> -->
                    <!-- <th>ગામ શહેર </th> -->
                    <!-- <th>જિલ્લો</th> -->
                    <!-- <th>રાજ્ય </th> -->
                    <!-- <th>દેશ</th> -->
                    <!-- <th>પીનકોડ</th> -->
                    <!-- <th>એસ.ટી.ડી.કોડ સાથે ફોન નંબર</th> -->
                    <!-- <th>કાયમી સરનામું </th> -->
                    <!-- <th>ઘર નંબર તથા રોરી કે સોસાયટી</th> -->
                    <th>ગામ/શહેર</th>
                    <th>જિલ્લો</th>
                    <th>રાજ્ય</th>
                    <!-- <th>દેશ</th> -->
                    <th>પીનકોડ</th>
                    <!-- <th>એસ.ટી.ડી. કોડ સાથે ફોન નંબર</th> -->
                    <!-- <th>વારસદારનું નામ અને સરનામું</th> -->
                    <!-- <th>હિસ્સાની ટકાવારી</th> -->
                    <!-- <th>ઉમર</th> -->
                    <!-- <th>સુચિત વિમેદાર સાથેનો સંબંધ</th> -->
                    <!-- <th>જો વારસદાર સગીર હોવ તો નિયુક્ત વ્યક્તિનું પુરું નામ, ઉમર અને સરનામું</th> -->
                    <!-- <th>વારસદાર સાથે નિયુક્ત વ્યક્તિનો સંબંધ</th> -->
                    <!-- <th>નિયુક્ત વ્યક્તિની સંમતિ દર્શાવતી સહી</th> -->
                    <!-- <th>નિયુક્તિનું ઓળખપત્ર આઈ.ડી. નંબર</th> -->
                    <!-- <th>ખાતાનો પ્રકાર</th> -->
                    <!-- <th>તમારો ખાતા નંબર</th> -->
                    <!-- <th>માઈકર કોડ</th> -->
                    <!-- <th>આઈ.એફ.એસ.સી કોડ</th> -->
                    <!-- <th>નામ અને તમારી બેંકનું સરનામું</th> -->
                    <!-- <th>વીમો લેવાનો છે તેનો ફોન નંબર</th> -->
                    <!-- <th>વીમો લેવાનો છે તેમનો ઇમેલ આઈ.ડી.</th> -->
                    <!-- <th>વીમો લેવાનો છે તેમની સહી/અંગુઠાનું નિશાન</th> -->
                    <th>More Info</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($record as $r) { ?>
                    <tr>
                        <!-- <td><?= $r["id"] ?></td> -->
                        <td><?= $r["Name"] ?></td>
                        <td><?= $r["Father_full_name"] ?></td>
                        <td><?= $r["Mother_full_name"] ?></td>
                        <td><?= $r["Wife_full_name"] ?></td>
                        <!-- <td><?= $r["Gender"] ?></td> -->
                        <td><?= $r["Merried"] ?></td>
                        <!-- <td><?= $r["Birth_date"] ?></td> -->
                        <td><?= $r["Age"] ?></td>
                        <!-- <td><?= $r["Proof_of_age_provided"] ?></td> -->
                        <!-- <td><?= $r["Birth_place"] ?></td> -->
                        <!-- <td><?= $r["Nationality"] ?></td> -->
                        <!-- <td><?= $r["Citizenship"] ?></td> -->
                        <!-- <td><?= $r["Correspondence_address"] ?></td> -->
                        <!-- <td><?= $r["House_no1"] ?></td> -->
                        <!-- <td><?= $r["City"] ?></td> -->
                        <!-- <td><?= $r["District"] ?></td> -->
                        <!-- <td><?= $r["State"] ?></td> -->
                        <!-- <td><?= $r["Country"] ?></td> -->
                        <!-- <td><?= $r["Pin_code"] ?></td> -->
                        <!-- <td><?= $r["S_T_D"] ?></td> -->
                        <!-- <td><?= $r["Address"] ?></td> -->
                        <!-- <td><?= $r["House_no2"] ?></td> -->
                        <td><?= $r["City2"] ?></td>
                        <td><?= $r["District2"] ?></td>
                        <td><?= $r["State2"] ?></td>
                        <!-- <td><?= $r["Country2"] ?></td> -->
                        <td><?= $r["Pin_code2"] ?></td>
                        <!-- <td><?= $r["S_T_D2"] ?></td> -->
                        <!-- <td><?= $r["Name_address_of_heir"] ?></td> -->
                        <!-- <td><?= $r["Percentage_share"] ?></td> -->
                        <!-- <td><?= $r["Age2"] ?></td> -->
                        <!-- <td><?= $r["Relationship_with_insured"] ?></td> -->
                        <!-- <td><?= $r["Heirs_minor"] ?></td> -->
                        <!-- <td><?= $r["Relation_of_appointee_to_heir"] ?></td> -->
                        <!-- <td><?= $r["Consent_signature_of_designated_person"] ?></td> -->
                        <!-- <td><?= $r["Id_number"] ?></td> -->
                        <!-- <td><?= $r["Types_of_account"] ?></td> -->
                        <!-- <td><?= $r["Account_no"] ?></td> -->
                        <!-- <td><?= $r["Micer_code"] ?></td> -->
                        <!-- <td><?= $r["I_F_S_C"] ?></td> -->
                        <!-- <td><?= $r["Bank_name"] ?></td> -->
                        <!-- <td><?= $r["Mobile_number"] ?></td> -->
                        <!-- <td><?= $r["Email"] ?></td> -->
                        <!-- <td><?= $r["His_signature_is_to_be_insured"] ?></td>  -->

                        <!-- <td>
                                <img src="../images/<?= $r['imagepath'] ?>" class="lic1"
                                    alt="user1" height="20" width="40">
                            </td> -->
                        <td><a href="./pdf.php?id=<?= $r["id"] ?>">read-more..</a></td>
                        <td><a href="./code/form_no_302_delete.php?id=<?= $r["id"] ?>">Delete</a></td>
                        <td><a href="./form_no_302_update_form.php?id=<?= $r["id"] ?>">Update</a></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>


<?php include("./includes/script.php"); ?>
<!-- <script>
    $(document).ready(function() {
        $('#mt').DataTable();
    });
</script> -->
<?php include("./includes/footer.php"); ?>