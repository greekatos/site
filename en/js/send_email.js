//const { Swal } = require("./sweetalert.js");

function submit_email(){

    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,1024}$/;
    var empty = false;

    let name_input = document.getElementsByClassName('name-input')[0];
    let email_input = document.getElementsByClassName('email-input')[0];
    let subject_input = document.getElementsByClassName('subject-input')[0];
    let message_input = document.getElementsByClassName('message-input')[0];

    let div_below_name = document.getElementsByClassName('alert-name');
    let div_below_email = document.getElementsByClassName('alert-email');
    let div_below_message = document.getElementsByClassName('alert-message');

    console.log( validateEmail(email_input.value));
    //empty inputs if error occurs after submit
    $('.alert-name').empty();
    $('.alert-email').empty();
    $('.alert-message').empty();

    //If empty then it will pop message
    if(name_input.value === "" && div_below_name[0].children.length === 0){
        var user_fault_name = document.createElement("div");
        var node_name = document.createTextNode("This field is required");
        user_fault_name.className = "a_alert_content";
        user_fault_name.appendChild(node_name);
        div_below_name[0].appendChild(user_fault_name);
    }

    if (email_input.value === "" && div_below_email[0].children.length === 0){
        var user_fault_email = document.createElement("div");
        var node_email = document.createTextNode("This field is required");
        user_fault_email.className = "a_alert_content";
        user_fault_email.appendChild(node_email);
        div_below_email[0].appendChild(user_fault_email);
        empty = true
    }

    if(message_input.value === "" && div_below_message[0].children.length === 0){
        var user_fault_message = document.createElement("div");
        var node_message = document.createTextNode("This field is required");
        user_fault_message.className = "a_alert_content";
        user_fault_message.appendChild(node_message);
        div_below_message[0].appendChild(user_fault_message);
    }else if(validateEmail(email_input.value) === null && empty === false){
        var user_fault_email = document.createElement("div");
        var node_email = document.createTextNode("Email is at wrong form");
        user_fault_email.className = "a_alert_content";
        user_fault_email.appendChild(node_email);
        div_below_email[0].appendChild(user_fault_email);
    }
    else if(subject_input.value === "" && name_input.value !== "" && email_input.value !== "" && validateEmail(email_input.value)){

        Swal.fire({
            title: 'Are sure you want to send email without a subject?',
            showDenyButton: true,
            confirmButtonText: 'Send',
            denyButtonText: `Don't send`,
          }).then((result) => {
            if (result.isConfirmed) {
              //Here we sent the email and i will build function to send email 
            send_email(email_input.value, name_input.value, message_input.value);
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Your email has been sent',
                showConfirmButton: true,
                timer:3000,          
            });
            } else if (result.isDenied) {
                Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Your email has not been sent',
                    showConfirmButton: true,
                    timer:3000,          
                });
            }
          });        


    }
    else if(subject_input.value !== "" && name_input.value !== "" && email_input.value !== ""){
        //Function that sents the email
        send_email(email_input.value, name_input.value, message_input.value, subject_input.value);
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'Your email has been sent',
            showConfirmButton: true,
            timer:3000,          
        });
    }


    name_input.addEventListener('input', function(e){
        if(e.target.value !== "" && div_below_name[0].children.length>0){
            $('.alert-name').empty();
        }
    });

    email_input.addEventListener('input', function(e){
        if(e.target.value !== "" && div_below_email[0].children.length>0){
            $('.alert-email').empty();
        }
    });

    message_input.addEventListener('input', function(e){
        if(e.target.value !== "" && div_below_message[0].children.length>0){
            $('.alert-message').empty();
        }
    });
}

function send_email(email, name, message, subject = "Unknown"){

    var sendButton = document.getElementsByClassName('submit-btn')[0];

    console.log(sendButton);

    var data = {
        "access_token": "clhfsbn96kke4ugt9u5no0xe"
    };

    var message1 = 'Name: '+ name + '\n' + 'Email: ' + email + '\nSubject: '+ subject + '\nMessage: ' + message

    console.log(message1);

    data['subject'] = subject;
    data['text'] = message1;

    console.log(data);
    $.post('https://postmail.invotes.com/send',
        data
    )

    return false;

}


function validateEmail(email){
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
}