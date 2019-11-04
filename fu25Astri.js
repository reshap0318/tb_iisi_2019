// f2
var se_angkot_f2_a = $('#se_angkot_f2_a');

function cari_f2a() {
  var inp_angkot = se_angkot_f2_a.children("option:selected").val();

  var link = 'fu25Astri.php?kode=f2&angkot='+inp_angkot;
  console.log(link);
  $.ajax({ url: link, data: "", dataType: 'json', success: function (rows){
      data(rows);
      aktiv_rad_k3 = false;
  }})
}
