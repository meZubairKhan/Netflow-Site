const form = document.querySelector('form');

function sendEmail() {
    Email.send({
        Host : "smtp.gmail.com",
        Username : "intelligencearificial@gmail.com",
        Password : "dqwelsndtfxevbpm",
        To : 'intelligencearificial@gmail.com',
        From : "intelligencearificial@gmail.com",
        Subject : "Congrats! Emails Magically Started Working",
        Body : "This is the information you entered in the body!"
    }).then(
      message => alert(message)
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();

    sendEmail();
});