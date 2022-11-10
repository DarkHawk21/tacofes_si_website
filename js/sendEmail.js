let sendEmail = e => {
    e.preventDefault();

    const formButton = document.querySelector("#formButtonSend");
    formButton.disabled = true;

    const formName = document.querySelector("#formName").value;
    const formLastname = document.querySelector("#formLastname").value;
    const formEmail = document.querySelector("#formEmail").value;
    const formPhone = document.querySelector("#formPhone").value;
    const formCompany = document.querySelector("#formCompany").value;
    const formComments = document.querySelector("#formComments").value;

    fetch(
        './php/email/recruitment.php',
        {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: formEmail,
                firstName: formName,
                lastName: formLastname,
                phone: formPhone,
                company: formCompany,
                msg: formComments
            })
        }
    )
    .then(res => res.json())
    .then(data => {
        const formAlertMessage = document.querySelector('#formAlertMessage');

        if (data.status === 200) {
            clearFormInterface();
            formAlertMessage.classList.add('success');
        } else {
            formAlertMessage.classList.add('danger');
        }

        formAlertMessage.innerHTML = data.msg;

        setTimeout(() => {
            formAlertMessage.innerHTML = '';
            formAlertMessage.classList.remove('success');
            formAlertMessage.classList.remove('danger');
        }, 5000);

        formButton.disabled = false;
    })
    .catch(error => console.log(error));
};

let clearFormInterface = () => {
    document.querySelector("#formName").value = '';
    document.querySelector("#formLastname").value = '';
    document.querySelector("#formEmail").value = '';
    document.querySelector("#formPhone").value = '';
    document.querySelector("#formCompany").value = '';
    document.querySelector("#formComments").value = '';
};