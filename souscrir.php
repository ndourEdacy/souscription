<?php
 require('connection.php');
 echo'avant';
     extract($_POST);
     var_dump($_POST);
     echo 'test';
     $db = $GLOBALS['Db'];


    function inertionPM($nom,$prenom,$dateNaiss,$lieuxNaiss,$nationalite,$lieuxSouscrip,
                        $sexe,$cni,$numPiece,$dateDelivre,$delivrePar,$codePostal,$localite,$telephone,$email,$fax,$ppOupm,
                        $secteur,$posteDuResponsable,$denomination,$fjuridique,$capitalSocial,$adressPm,$codePostalPm,$regionPm,$telephonePm,$emailPm,$faxPm,$nombreTitrePm,
                        $montantPm,$typePaiement,$numCheque,$nomSgi,$numeroCompteSgi,$numCompteBanq){
        $sql="INSERT into clients(`nom`,`prenom`,`date_naiss`,`lieux_naiss`,`nationalite`,`lieuxSouscrip`,
                                    `sexe`,`type_piece`,`numero_piece`,`date_delivre`,`delivre_par`,`code_postal`,`localite`,`telephone_client`,`email_client`,`fax_client`,`type_client`,
                                    `secteur`,`poste_ocupe`,`denomination`,`forme_juridique`,`capital_social`,`adress_pm`,`code_postal_pm`,`region_pm`,`tephone_pm`,`email_pm`,`fax_pm`,`nombre_titre`,
                                    `montantPm`,`type_paiement`,`numero_cheque`,`nom_sgi`,`numero_compte`,`numero_compte_bang`
                                )       
                      values ('$nom','$prenom','$dateNaiss','$lieuxNaiss','$nationalite','$lieuxSouscrip',
                             '$sexe','$cni','$numPiece','$dateDelivre','$delivrePar','$codePostal','$localite','$telephone','$email','$fax','$ppOupm',
                             '$secteur','$posteDuResponsable','$denomination','$fjuridique','$capitalSocial','$adressPm','$codePostalPm','$regionPm','$telephonePm','$emailPm','$faxPm','$nombreTitrePm',
                             '$montantPm','$typePaiement','$numCheque','$nomSgi','$numeroCompteSgi','$numCompteBanq')";
        var_dump($sql);
       $req = $GLOBALS['Db']->query($sql);
        var_dump($req);
    }
    function inertionPP($nom,$prenom,$dateNaiss,$lieuxNaiss,$nationalite,$lieuxSouscrip,
                        $sexe,$cni,$numPiece,$dateDelivre,$delivrePar,$codePostal,$localite,$telephone,$email,$fax,$ppOupm,
                        $personnephysique,$nomEmployeur,$adressEmployeur,$telephoneEmployeur,$emailEmployeur,$faxEmployeur,
                        $montantPm,$typePaiement,$numCheque,$nomSgi,$numeroCompteSgi,$numCompteBanq){
                            if(empty($fax))
                             $fax = null;
                    $sql="INSERT into clients(`nom`,`prenom`,`date_naiss`,`lieux_naiss`,`nationalite`,`lieuxSouscrip`,
                                    `sexe`,`type_piece`,`numero_piece`,`date_delivre`,`delivre_par`,`code_postal`,`localite`,`telephone_client`,`email_client`,`fax_client`,`type_client`,
                                    `fonction_pp`,`nom_employeur`,`adress_employeur`,`telephone_employeur`,`email_employeur`,`fax_employeur`,
                                    `montantPm`,`type_paiement`,`numero_cheque`,`nom_sgi`,`numero_compte`,`numero_compte_bang`
                                )       
                    values ('$nom','$prenom','$dateNaiss','$lieuxNaiss','$nationalite','$lieuxSouscrip',
                            '$sexe','$cni','$numPiece','$dateDelivre','$delivrePar','$codePostal','$localite','$telephone','$email','$fax','$ppOupm',
                             '$personnephysique','$nomEmployeur','$adressEmployeur','$telephoneEmployeur','$emailEmployeur','$faxEmployeur',
                            '$montantPm','$typePaiement','$numCheque','$nomSgi','$numeroCompteSgi','$numCompteBanq')";
                    var_dump($sql);
                    $req = $GLOBALS['Db']->query($sql);
                    var_dump($req);
    }
    if($ppOupm == "pm")
      inertionPM($nom,$prenom,$dateNaiss,$lieuxNaiss,$nationalite,$lieuxSouscrip,
                $sexe,$cni,$numPiece,$dateDelivre,$delivrePar,$codePostal,$localite,$telephone,$email,$fax,$ppOupm,
                $secteur,$posteDuResponsable,$denomination,$fjuridique,$capitalSocial,$adressPm,$codePostalPm,$regionPm,$telephonePm,$emailPm,$faxPm,$nombreTitrePm,
                $montantPm,$typePaiement,$numCheque,$nomSgi,$numeroCompteSgi,$numCompteBanq);
    else if($ppOupm == "pp")
      inertionPP($nom,$prenom,$dateNaiss,$lieuxNaiss,$nationalite,$lieuxSouscrip,
            $sexe,$cni,$numPiece,$dateDelivre,$delivrePar,$codePostal,$localite,$telephone,$email,$fax,$ppOupm,
            $personnephysique,$nomEmployeur,$adressEmployeur,$telephoneEmployeur,$emailEmployeur,$faxEmployeur,
            $montantPm,$typePaiement,$numCheque,$nomSgi,$numeroCompteSgi,$numCompteBanq);
?>