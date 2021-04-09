let inicioSesion = document.querySelector('#sign-in');
let usuario = document.querySelector('#user');
let password = document.querySelector('#pass');
let respuestaForm = document.querySelector('#answer');
let alertaForm = document.querySelector('#alertForm');


inicioSesion.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('funcoina');
    if (usuario.value === '' || password.value === '') {
        setTimeout(() => {
            respuestaForm.classList.remove('none');
            respuestaForm.classList.remove('invisible');
            alertaForm.textContent = 'Llena todos los campos';
            setTimeout(() => {
                respuestaForm.classList.add('none');
                respuestaForm.classList.add('invisible');
            }, 2000);
        }, 100);
    } else {
        let datos = new FormData();
        datos.append("user", usuario.value);
        datos.append("pass", password.value);
        fetch('includes/validarDatos.php', {
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
            .then(({ data }) => {
                console.log(data);
                if (data === 1) {
                    console.log(data);
                    location.href = 'homeAdmin.php';
                } else if (data === 2) {
                    location.href = 'homeClient.php';
                    console.log(data);
                } else {
                    setTimeout(() => {
                        respuestaForm.classList.remove('none');
                        respuestaForm.classList.remove('invisible');
                        console.log(data);
                        alertaForm.textContent = 'Datos Incorrectos';
                        setTimeout(() => {
                            respuestaForm.classList.add('none');
                            respuestaForm.classList.add('invisible');
                        }, 2000);
                    }, 100);
                }
            });
    }

});