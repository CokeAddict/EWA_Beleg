function logIn() {
    let username = $('#logInFormUser').val();
    let password = $('#logInFormPassword').val();

    let passHash = md5(password);
    let resultDiv = $('#logInFormResult');
    resultDiv.append(passHash);
    $.ajax({
        url:'php/logIn.php',
        type: 'POST',
        data: {user: username, password: passHash},
        success: function (data) {

            //resultDiv.empty();
            //resultDiv.append(data);
        }
    })
}