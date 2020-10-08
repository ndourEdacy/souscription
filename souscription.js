
$(document).ready(function()
{    
    $("#nomSgi").hide();
    $("#numCompte").hide();
    $("#numCompteBanq").hide();

    $('#cheque').click(function(){
        
        if($(this).is(":checked")){
            $('#virement').prop("checked", false);
            $('#prelevement').prop("checked", false);

            $("#numcheque").show();
            $("#nomSgi").hide();
            $("#numCompte").hide();
            $("#numCompteBanq").hide();
        }
        else{
            $("#numcheque").hide();
            $("#nomSgi").hide();
            $("#numCompte").hide();
            $("#numCompteBanq").hide();
        }
        
    });

    $('#virement').click(function(){
        if($(this).is(":checked")){
            $('#cheque').prop("checked", false);
            $('#prelevement').prop("checked", false);

            $("#numCompteBanq").show();
            $("#numcheque").hide();
            $("#nomSgi").hide();
            $("#numCompte").hide();
        }
        else{
            $("#numcheque").hide();
            $("#nomSgi").hide();
            $("#numCompte").hide();
            $("#numCompteBanq").hide();
           
        }
        
    });

    $('#prelevement').click(function(){
        if($(this).is(":checked")){
            $('#cheque').prop("checked", false);
            $('#virement').prop("checked", false);
            $("#numcheque").hide();
            $("#nomSgi").show();
            $("#numCompte").show();
            $("#numCompteBanq").hide();
        }
        else{
            $("#numcheque").hide();
            $("#nomSgi").hide();
            $("#numCompte").hide();
            $("#numCompteBanq").hide();
        }
        
    });
    $('#check1').click(function(){
        
        if($(this).is(":checked")){
            $('#check2').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check6').prop("checked", false);
            $('#check7').prop("checked", false);
        }
    });
    $('#check2').click(function(){
        
        if($(this).is(":checked")){
            $('#check1').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check6').prop("checked", false);
            $('#check7').prop("checked", false);
        }
    });
    $('#check3').click(function(){
        
        if($(this).is(":checked")){
            $('#check1').prop("checked", false);
            $('#check2').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check6').prop("checked", false);
            $('#check7').prop("checked", false);
        }
    });
    $('#check4').click(function(){
        
        if($(this).is(":checked")){
            $('#check2').prop("checked", false);
            $('#check2').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check6').prop("checked", false);
            $('#check7').prop("checked", false);
        }
    });
    $('#check5').click(function(){
        
        if($(this).is(":checked")){
            
            $('#check1').prop("checked", false);
            $('#check2').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check6').prop("checked", false); 
            $('#check7').prop("checked", false);
        }
    });
    $('#check6').click(function(){
        
        if($(this).is(":checked")){
            
            $('#check1').prop("checked", false);
            $('#check2').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check7').prop("checked", false);
        }
    }); $('#check7').click(function(){
        
        if($(this).is(":checked")){
            
            $('#check1').prop("checked", false);
            $('#check2').prop("checked", false);
            $('#check3').prop("checked", false);
            $('#check4').prop("checked", false);
            $('#check5').prop("checked", false);
            $('#check6').prop("checked", false);
        }
    });
    
});