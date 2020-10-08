<?php
 require('connection.php');

 if(isset($_POST['nom']))
    $nom = $_POST['nom'];
 if(isset($_POST['prenom']))
    $prenom = $_POST['prenom'];
if(isset($_POST['dateNaiss']))
 $date_naiss = $_POST['dateNaiss'];
 if(isset($_POST['lieuxNaiss']))
 $lieux_naiss = $_POST['lieuxNaiss'];
 if(isset($_POST['nationalite']))
 $nationalite = $_POST['nationalite'];
 if(isset($_POST['lieuxSouscrip']))
 $lieuxSouscrip = $_POST['lieuxSouscrip'];


 $sexe = $_POST['sexe'];
 $type_piece = $_POST['cni'];
 $numero_piece = $_POST['numPiece'];
 $date_delivre = $_POST['dateDelivre'];
 $code_postal = $_POST['codePostal'];
 $localite = $_POST['localite'];
 $telephone_client = (int) $_POST['telephone'];
 $email_client = $_POST['email'];
 $fax_client = (int)$_POST['fax'];
 $type_client = $_POST['ppOupm'];
 

 $fonction_pp = $_POST['personnephysique'];
 $nom_employeur = $_POST['nomEmployeur'];
 $adress_employeur = $_POST['adressEmployeur'];
 $telephone_employeur = (int)$_POST['telephoneEmployeur'];
 $email_employeur = $_POST['emailEmployeur'];
 $fax_employeur =(int) $_POST['faxEmployeur'];

 $secteur = $_POST['secteur'];
 $poste_ocupe = $_POST['posteDuResponsable'];
 $denomination = $_POST['denomination'];
 $forme_juridique = $_POST['fjuridique'];
 $capital_social = (double)$_POST['capitalSocial'];
 $adress_pm = $_POST['adressPm'];
 $code_postal_pm =$_POST['codePostalPm'];
 $region_pm = $_POST['regionPm'];
 $tephone_pm = (int) $_POST['telephonePm'];
 $email_pm = $_POST['emailPm'];
 $nombre_titre = (int)$_POST['nombreTitrePm'];

 $type_paiement = $_POST['typePaiement'];
 $numero_cheque = (int)$_POST['numCheque'];
 $nom_sgi = $_POST['nomSgi'];
 $numero_compte = $_POST['numeroCompteSgi'];
 $numero_compte_bang = $_POST['numCompteBanq'];
 echo $numero_cheque;
// ,
//                             secteur,poste_ocupe,denomination,forme_juridique,capital_social,adress_pm,code_postal_pm,region_pm,tephone_pm,email_pm,nom_titre,
//                             type_paiement,numero_cheque,nom_sgi,numero_compte,numero_compte_bang,date_souscription

// ,
//                                     :sexe,:type_piece,:numero_piece,:date_delivre,:code_postal,:localite,:telephone_client,:email_client,:fax_client,:type_client,
//                                     :fonction_pp,:nom_employeur,:adress_employeur,:telephone_employeur,:email_employeur,:fax_employeur,
//                                     :secteur,:poste_ocupe,:denomination,:forme_juridique,:capital_social,:adress_pm,:code_postal_pm,:region_pm,:tephone_pm,:email_pm,:nom_titre,
//                                     :type_paiement,:numero_cheque,:nom_sgi,:numero_compte,:numero_compte_bang,:date_souscription
         if($type_client == "pm"){
                         $sqls="INSERT INTO clients(id,nom,prenom,date_naiss,lieux_naiss,nationalite,lieuxSouscrip,
                                    sexe,type_piece,numero_piece,date_delivre,code_postal,localite,telephone_client,email_client,fax_client,type_client,
                                    secteur,poste_ocupe,denomination,forme_juridique,capital_social,adress_pm,code_postal_pm,region_pm,tephone_pm,email_pm,nombre_titre,
                                    type_paiement,numero_cheque,nom_sgi,numero_compte,numero_compte_bang
                                )                   
                          VALUES(null,:nom,:prenom,:date_naiss,:lieux_naiss,:nationalite,:lieuxSouscrip,
                                    :sexe,:type_piece,:numero_piece,:date_delivre,:code_postal,:localite,:telephone_client,:email_client,:fax_client,:type_client,
                                    :secteur,:poste_ocupe,:denomination,:forme_juridique,:capital_social,:adress_pm,:code_postal_pm,:region_pm,:tephone_pm,:email_pm,:nombre_titre,
                                    :type_paiement,:numero_cheque,:nom_sgi,numero_compte,:numero_compte_bang
                                        )";
         }
         else if ($type_client == "pp") {
                        $sqls="INSERT INTO clients(id,nom,prenom,date_naiss,lieux_naiss,nationalite,lieuxSouscrip,
                                        sexe,type_piece,numero_piece,date_delivre,code_postal,localite,telephone_client,email_client,fax_client,type_client,
                                        fonction_pp,nom_employeur,adress_employeur,telephone_employeur,email_employeur,fax_employeur,
                                        type_paiement,numero_cheque,nom_sgi,numero_compte,numero_compte_bang
                                )                   
                                VALUES(null,:nom,:prenom,:date_naiss,:lieux_naiss,:nationalite,:lieuxSouscrip,
                            :sexe,:type_piece,:numero_piece,:date_delivre,:code_postal,:localite,:telephone_client,:email_client,:fax_client,:type_client,
                            :fonction_pp,:nom_employeur,:adress_employeur,:telephone_employeur,:email_employeur,:fax_employeur,
                            :type_paiement,:numero_cheque,:nom_sgi,:numero_compte,:numero_compte_bang
                               )";
         }
   try{   
                $my_Insert_Statement = $my_Db_Connection->prepare($sqls);   
                $my_Insert_Statement->bindParam(':nom', $nom,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':prenom', $prenom,PDO::PARAM_STR);
                $rawdate = htmlentities($_POST['dateNaiss']);
                $date = date('Y-m-d', strtotime($rawdate));
                $my_Insert_Statement->bindParam(':date_naiss', $date);
                $my_Insert_Statement->bindParam(':lieux_naiss', $lieux_naiss,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':nationalite', $nationalite,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':lieuxSouscrip', $lieuxSouscrip,PDO::PARAM_STR);

                $my_Insert_Statement->bindParam(':sexe', $sexe,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':type_piece', $type_piece,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':numero_piece', $numero_piece,PDO::PARAM_STR);
                $rawdate = htmlentities($_POST['dateDelivre']);
                $date = date('Y-m-d', strtotime($rawdate));
                $my_Insert_Statement->bindParam(':date_delivre', $date,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':code_postal', $code_postal,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':localite', $localite,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':telephone_client', $telephone_client,PDO::PARAM_INT);
                $my_Insert_Statement->bindParam(':email_client', $email_client,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':fax_client', $fax_client,PDO::PARAM_INT);
                $my_Insert_Statement->bindParam(':type_client', $type_client,PDO::PARAM_STR);
            //  if($type_client == "pm")  {
            //     $my_Insert_Statement->bindParam(':secteur', $secteur,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':poste_ocupe', $poste_ocupe,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':denomination', $denomination,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':forme_juridique', $forme_juridique,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':capital_social', $capital_social,PDO::PARAM_INT);
            //     $my_Insert_Statement->bindParam(':adress_pm', $adress_pm,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':code_postal_pm', $code_postal_pm,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':region_pm', $region_pm,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':tephone_pm', $tephone_pm,PDO::PARAM_INT);
            //     $my_Insert_Statement->bindParam(':email_pm', $email_pm,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':nombre_titre', $nombre_titre,PDO::PARAM_INT);
            //  }
            //  else if ($type_client == "pp") {
               
            //     $my_Insert_Statement->bindParam(':fonction_pp', $fonction_pp,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':nom_employeur', $nom_employeur,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':adress_employeur', $adress_employeur,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':telephone_employeur', $telephone_employeur,PDO::PARAM_INT);
            //     $my_Insert_Statement->bindParam(':email_employeur', $email_employeur,PDO::PARAM_STR);
            //     $my_Insert_Statement->bindParam(':fax_employeur', $fax_employeur,PDO::PARAM_INT);
            //  }

                /*$my_Insert_Statement->bindParam(':type_paiement', $type_paiement,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':numero_cheque', $numero_cheque,PDO::PARAM_INT);
                $my_Insert_Statement->bindParam(':nom_sgi', $nom_sgi,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':numero_compte', $numero_compte,PDO::PARAM_STR);
                $my_Insert_Statement->bindParam(':numero_compte_bang', $numero_compte_bang,PDO::PARAM_STR);*/
                
                $my_Insert_Statement->execute();
   }
   catch(Exception $e){
    trigger_error($e->getMessage(), E_USER_ERROR);
   }    



?>