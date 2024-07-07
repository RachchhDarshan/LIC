<?php              
    session_start();    
    $Name                                     = $_REQUEST["Name"];
    $Father_full_name                         = $_REQUEST["Father_full_name"];
    $Mother_full_name                         = $_REQUEST["Mother_full_name"];
    $Wife_full_name                           = $_REQUEST["Wife_full_name"];
    $Gender                                   = $_REQUEST["Gender"];
    $Merried                                  = $_REQUEST["Merried"];
    $Birth_date                               = $_REQUEST["Birth_date"];
    $Age                                      = $_REQUEST["Age"];
    $Proof_of_age_provided                    = $_REQUEST["Proof_of_age_provided"];
    $Birth_place                              = $_REQUEST["Birth_place"];
    $Nationality                              = $_REQUEST["Nationality"];
    $Citizenship                              = $_REQUEST["Citizenship"];
    $Correspondence_address                   = $_REQUEST["Correspondence_address"];
    $House_no1                                = $_REQUEST["House_no1"];
    $City                                     = $_REQUEST["City"];
    $District                                 = $_REQUEST["District"];
    $State                                    = $_REQUEST["State"];
    $Country                                  = $_REQUEST["Country"];
    $Pin_code                                 = $_REQUEST["Pin_code"];
    $S_T_D                                    = $_REQUEST["S_T_D"];
    $Policy_name                              = $_REQUEST["Policy_name"];
    $Address                                  = $_REQUEST["Address"];
    $House_no2                                = $_REQUEST["House_no2"];
    $City2                                    = $_REQUEST["City2"];
    $District2                                = $_REQUEST["District2"];
    $State2                                   = $_REQUEST["State2"];
    $Country2                                 = $_REQUEST["Country2"];
    $Pin_code2                                = $_REQUEST["Pin_code2"];
    $S_T_D2                                   = $_REQUEST["S_T_D2"];
    $Name_address_of_heir                     = $_REQUEST["Name_address_of_heir"];
    $Percentage_share                         = $_REQUEST["Percentage_share"];
    $Age2                                     = $_REQUEST["Age2"];
    $Relationship_with_insured                = $_REQUEST["Relationship_with_insured"];   
    $Heirs_minor                              = $_REQUEST["Heirs_minor"];  
    $Relation_of_appointee_to_heir            = $_REQUEST["Relation_of_appointee_to_heir"];
    $Consent_signature_of_designated_person   = $_REQUEST["Consent_signature_of_designated_person"];
    $Id_number                                = $_REQUEST["Id_number"];
    $Types_of_account                         = $_REQUEST["Types_of_account"];
    $Account_no                               = $_REQUEST["Account_no"];
    $Micer_code                               = $_REQUEST["Micer_code"];
    $I_F_S_C                                  = $_REQUEST["I_F_S_C"];
    $Bank_name                                = $_REQUEST["Bank_name"];
    $Mobile_number                            = $_REQUEST["Mobile_number"];
    $Email                                    = $_REQUEST["Email"];
    $His_signature_is_to_be_insured           = $_REQUEST["His_signature_is_to_be_insured"];
    $uid                                      = $_SESSION["USER"];



    $pdo = new PDO("mysql:host=localhost;dbname=client","root","");

    $statement =  $pdo->prepare("INSERT INTO form_no_302 (Name , Father_full_name , Mother_full_name , Wife_full_name , Gender , Merried , Birth_date , Age , Proof_of_age_provided , Birth_place , Nationality , Citizenship , Correspondence_address , House_no1 , City , District , State , Country , Pin_code , S_T_D , Policy_name , Address , House_no2 , City2 , District2 , State2 , Country2 , Pin_code2 , S_T_D2 , Name_address_of_heir , Percentage_share , Age2 , Relationship_with_insured , Heirs_minor , Relation_of_appointee_to_heir , Consent_signature_of_designated_person , Id_number , Types_of_account , Account_no , Micer_code , I_F_S_C , Bank_name , Mobile_number , Email , His_signature_is_to_be_insured , USER_id) VALUES(? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)");

    $statement->execute(array($Name , $Father_full_name , $Mother_full_name , $Wife_full_name , $Gender , $Merried , $Birth_date , $Age , $Proof_of_age_provided , $Birth_place , $Nationality , $Citizenship , $Correspondence_address , $House_no1 , $City , $District , $State , $Country , $Pin_code , $S_T_D , $Policy_name , $Address , $House_no2 , $City2 , $District2 , $State2 , $Country2 , $Pin_code2 , $S_T_D2 , $Name_address_of_heir , $Percentage_share , $Age2 , $Relationship_with_insured , $Heirs_minor , $Relation_of_appointee_to_heir , $Consent_signature_of_designated_person , $Id_number , $Types_of_account , $Account_no , $Micer_code , $I_F_S_C , $Bank_name , $Mobile_number , $Email , $His_signature_is_to_be_insured , $uid));

    header("Location:../success.php");




?>