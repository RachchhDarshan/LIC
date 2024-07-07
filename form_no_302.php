<?php
include("./includes/header.php");
include("./includes/navbar.php");

$statement = $pdo->prepare("SELECT * FROM form_no_302 WHERE id=?");
$statement->execute(array($_REQUEST["id"]));
$record = $statement->fetchAll()[0];

?>
<div style="color: orangered;">
    <h3 class="text2uppercase site-section-heading text-uppercase text-center font-secondary mt-2" style="color: orangered; text-align : center;">વૈયક્તિક વિગતો</h3>
</div>



<div class="container">
    <form action="./code/form_no_302_insert.php" method="POST">

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">નામ : શ્રી/શ્રીમતી/શ્રીમાન</label><input type="text" name="Name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નામ : શ્રી/શ્રીમતી/શ્રીમાન " value="<?= $record["Name"] ?>">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">પિતાનું પૂરું નામ</label><input type="text" name="Father_full_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પિતાનું પૂરું નામ ">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">માતાનું પૂરું નામ </label><input type="text" name="Mother_full_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="માતાનું પૂરું નામ  ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">પત્નીનું પરું નામ</label><input type="text" name="Wife_full_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પત્નીનું પરું નામ">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">જાતિ પુરૂષ / સ્ત્રી- તૃતીય જાતિ</label><input type="text" name="Gender" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જાતિ પુરૂષ / સ્ત્રી- તૃતીય જાતિ ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">વૈવાહિક દરજજો</label><input type="text" name="Merried" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વૈવાહિક દરજજો">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">જન્મ તારીખ </label><input type="number" name="Birth_date" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જન્મ તારીખ ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">ઉમર વર્ષ</label><input type="number" name="Age" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ઉમર વર્ષ" value="<?= $record["Age"] ?>">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">પૂરો પાડેલ ઉમરનો પુરાવો </label><input type="text" name="Proof_of_age_provided" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પૂરો પાડેલ ઉમરનો પુરાવો ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">જન્મ સ્થળ / શહેર</label><input type="text" name="Birth_place" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જન્મ સ્થળ / શહેર">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">રાષ્ટ્રીયતા </label><input type="text" name="Nationality" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="રાષ્ટ્રીયના ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">નાગરિકતા</label><input type="text" name="Citizenship" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નાગરિકતા">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">પત્રવ્યવહારનું સરનામું : </label><input type="text" name="Correspondence_address" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પત્રવ્યવહારનું સરનામું : " value="<?= $record["Address"] ?>">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">ઘર નંબર તથા રોરી કે સોસાયટી</label><input type="text" name="House_no1" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નાગરિકતા">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">ગામ શહેર </label><input type="text" name="City" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ગામ શહેર">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">જિલ્લો</label><input type="text" name="District" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જિલ્લો">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">રાજ્ય </label><input type="text" name="State" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="રાજ્ય">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">દેશ</label><input type="text" name="Country" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="દેશ">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">પીનકોડ </label><input type="number" name="Pin_code" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પીનકોડ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">એસ.ટી.ડી.કોડ સાથે ફોન નંબર :</label><input type="number" name="S_T_D" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="એસ.ટી.ડી.કોડ સાથે ફોન નંબર :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">કાયમી સરનામું : </label><input type="text" name="Address" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="કાયમી સરનામું :">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">ઘર નંબર તથા રોરી કે સોસાયટી</label><input type="text" name="House_no2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ઘર નંબર તથા રોરી કે સોસાયટી :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">ગામ/શહેર </label><input type="text" name="City2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ગામ/શહેર">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">જિલ્લો</label><input type="text" name="District2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જિલ્લો">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">રાજ્ય</label><input type="text" name="State2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="રાજ્ય">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">દેશ</label><input type="text" name="Country2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="દેશ">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">પીનકોડ</label><input type="number" name="Pin_code2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પીનકોડ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">એસ.ટી.ડી. કોડ સાથે ફોન નંબર </label><input type="number" name="S_T_D2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="એસ.ટી.ડી. કોડ સાથે ફોન નંબર ">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">પોલીસી નું નામ</label><input type="text" name="Policy_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="પોલીસી નું નામ" >
            </div>

        </div>

        <h3 class="mt-5" style="text-align: center; color:orangered">વારસદારની મળતી સગવડતા દરખાસ્તીના હિતમાં જરૂરી છે</h3>


        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">વારસદારનું નામ અને સરનામું</label><input type="text" name="Name_address_of_heir" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વારસદારનું નામ અને સરનામું">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">હિસ્સાની ટકાવારી </label><input type="number" name="Percentage_share" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="હિસ્સાની ટકાવારી">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">ઉમર</label><input type="number" name="Age2" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ઉમર">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">સુચિત વિમેદાર સાથેનો સંબંધ</label><input type="text" name="Relationship_with_insured" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="સુચિત વિમેદાર સાથેનો સંબંધ :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">જો વારસદાર સગીર હોવ તો નિયુક્ત વ્યક્તિનું પુરું નામ, ઉમર અને સરનામું</label><input type="text" name="Heirs_minor" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="જો વારસદાર સગીર હોવ તો નિયુક્ત વ્યક્તિનું પુરું નામ, ઉમર અને સરનામું">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">વારસદાર સાથે નિયુક્ત વ્યક્તિનો સંબંધ</label><input type="text" name="Relation_of_appointee_to_heir" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વારસદાર સાથે નિયુક્ત વ્યક્તિનો સંબંધ :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">નિયુક્ત વ્યક્તિની સંમતિ દર્શાવતી સહી</label><input type="text" name="Consent_signature_of_designated_person" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નિયુક્ત વ્યક્તિની સંમતિ દર્શાવતી સહી">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">નિયુક્તિનું ઓળખપત્ર આઈ.ડી. નંબર :</label><input type="number" name="Id_number" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નિયુક્તિનું ઓળખપત્ર આઈ.ડી. નંબર ::">
            </div>

        </div>

        

        <h3 class="mt-5" style="text-align: center; color:orangered">બેંકની વિગતો</h3>

        <h2 class="mt-3" style="text-align: left;">બેંક ખાતાની વિગતો</h2>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">ખાતાનો પ્રકાર</label><input type="text" name="Types_of_account" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="ખાતાનો પ્રકાર">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">તમારો ખાતા નંબર :</label><input type="number" name="Account_no" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="તમારો ખાતા નંબર :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">માઈકર કોડ</label><input type="number" name="Micer_code" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="માઈકર કોડ">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">આઈ.એફ.એસ.સી કોડ :</label><input type="number" name="I_F_S_C" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="આઈ.એફ.એસ.સી કોડ :">
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">નામ અને તમારી બેંકનું સરનામું</label><input type="text" name="Bank_name" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="નામ અને તમારી બેંકનું સરનામું">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">વીમો લેવાનો છે તેનો ફોન નંબર</label><input type="number" name="Mobile_number" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વીમો લેવાનો છે તેનો ફોન નંબર :" value="<?= $record["Mobile_number"] ?>">
            </div>

        </div>

        

        <div class="row">

            <div class="col-xl-6">
                <label style="font-weight: bolder; margin-top: 20px;">વીમો લેવાનો છે તેમનો ઇમેલ આઈ.ડી.</label><input type="Email" name="Email" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વીમો લેવાનો છે તેમનો ઇમેલ આઈ.ડી." value="<?= $record["Email"] ?>">
            </div>

            <div class="col-xl-6">
                <label style="font-weight: bolder;margin-top: 20px; ">વીમો લેવાનો છે તેમની સહી/અંગુઠાનું નિશાન</label><input type="text" name="His_signature_is_to_be_insured" style="margin-top: 5px;" class="form-control border border-primary border-1" placeholder="વીમો લેવાનો છે તેમની સહી/અંગુઠાનું નિશાન">
            </div>

        </div>


        <div class="col-xl-3">
            <button class="addbtn form-control mb-4 border border-primary border-1" style="background-color:blue; color:white; margin-top: 15px" type="submit">Submit</button>
        </div>

    
        </from>

</div>



<?php
include("./includes/script.php");
include("./includes/footer.php");

?>