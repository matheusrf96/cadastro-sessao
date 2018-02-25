var valorEstado = document.getElementById('estado-value').value;
var valorCidade = document.getElementById('cidade-value').value;

$(document).ready(function () {	
    $.getJSON('src/js/cidades-estados.json', function (data) {
        var items = [];
        var options = '<option value="">escolha um estado</option>';

        $.each(data, function (key, val) {
            if(valorEstado == val.nome){
                options += '<option value="' + val.nome + '" selected>' + val.nome + '</option>';
            }
            else{
                options += '<option value="' + val.nome + '">' + val.nome + '</option>';
            }
        });			

        $("#estado").html(options);				
        
        $("#estado").change(function () {       
            var options_cidades = '<option value="">selecione sua cidade</option>';
            var str = "";					
            
            $("#estado option:selected").each(function () {
                str += $(this).text();
            });
            
            $.each(data, function (key, val) {
                if(val.nome == str) {		
                    $.each(val.cidades, function (key_city, val_city) {
                        if(valorCidade == val_city){
                            options_cidades += '<option value="' + val_city + '" selected>' + val_city + '</option>';
                        }
                        else{
                            options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                        }
                    });							
                }
            });

            $("#cidade").html(options_cidades);            
        }).change();    
    });
});