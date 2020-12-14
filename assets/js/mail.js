const sendd = document.querySelector('button');
$(sendd).on('click', function(e){
    e.preventDefault();
    var nam = document.querySelector('#name').value;
    var eml = document.querySelector('#email').value; 
    $.ajax({
        type: 'POST',
        url: 'phpmailer/mail.php',
        cache: false,
        data: {name: nam,email: eml},
        beforeSend: function () {
            console.log('asasa')
        },
        success: function (data) {
           console.log(data)
        }
    }) 

})
 