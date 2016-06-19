$(document).ready(function(){
var jasa = "pos";

var resi = $('#resi').val();
    var url = "http://ibacor.com/api/cek-resi?pengirim="+jasa+"&resi="+resi;
  
                      //  $result = json_decode($ambil_content, true);
    //display modal form for task editing
    $('.open-modal').click(function(){
alert(url);
        $.get(url , function (data) {
            //success data
            alert("tes");
        alert(data);

        }) 
    });

    
});