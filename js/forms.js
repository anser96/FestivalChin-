$('#sendFile').click((e) => {
   // $('#modalCliente').modal('close');
   e.preventDefault();
   console.log('click');

   let filePath = $('#filePath').val();
   console.log(filePath);

   if (filePath.length == "") {
     $('#filePath').addClass('invalid');
     $('#helper-text').html('Debes elegir el archivo de tu inscripción');
   } else {
     $('#filePath').removeClass('invalid');
     $('#helper-text').html('Enviando...');
     $(".progress").show();

     let xhttp;

     xhttp = new XMLHttpRequest();

     xhttp.open("POST", "enviarInscripcion.php", true);

     xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         // $('#filePath').val("");
         // $(".progress").hide();
         $('#helper-text').html(this.responseText);
       }
     };

     xhttp.send('&filePath='+filePath);
   }
 });

// $('#fileForm').submit(function() {
//   let filePath = $('#filePath').val();
//
//   if (filePath.length == "") {
//     filePath.addClass('invalid');
//   }
//
//   $(mensaje).append("<strong>¡Error!</strong> Por favor, coloca la duracion del plan")
//   $("#loaderTxt").hide()
//   $("#error").show()
// });
