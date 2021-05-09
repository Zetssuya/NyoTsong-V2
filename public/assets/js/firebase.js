$(document).ready(function() {

    const firebaseConfig = {
        apiKey: "AIzaSyDYwv2hMmeItQWmccFTNGjIvFDZvmiy4OI",
        authDomain: "otpuserreg.firebaseapp.com",
        projectId: "otpuserreg",
        storageBucket: "otpuserreg.appspot.com",
        messagingSenderId: "612175192598",
        appId: "1:612175192598:web:23b49676a8d98b95df4b37",
        measurementId: "G-4LDR7CKX1Z"
      };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
        'size': 'invisible',
        'callback': function (response) {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            console.log('recaptcha resolved');
        }
    });
    onSignInSubmit();
});



function onSignInSubmit() {
    $('#verifPhNum').on('click', function() {
        let phoneNo = '';
        var code = $('#codeToVerify').val();
        console.log(code);
        $(this).attr('disabled', 'disabled');
        $(this).text('Processing..');
        confirmationResult.confirm(code).then(function (result) {
            // $("#successOtpAuth").text("Auth is successful");
            $("#successOtpAuth").show();
            var user = result.user;
            console.log(user);
    
    
            // ...
        }.bind($(this))).catch(function (error) {
        
            // User couldn't sign in (bad verification code?)
            // ...
            $(this).removeAttr('disabled');
            $(this).text('Invalid Code');
            setTimeout(() => {
                $(this).text('Verify Phone No');
            }, 2000);
        }.bind($(this)));
    
    });
    
    
    $('#getcode').on('click', function () {
        var phoneNo = $('#number').val();
        console.log(phoneNo);
        // getCode(phoneNo);
        var appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber(phoneNo, appVerifier)
        .then(function (confirmationResult) {
    
            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
           
        }).catch(function (error) {
            console.log(error.message);
    
        });
    });
}