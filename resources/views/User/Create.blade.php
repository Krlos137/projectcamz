<x-layout title="Registro de cuenta">
    <x-header></x-header>
    <x-form 
        idpol="{{ $polpagina->id }}"
        polcond="{{ $polpagina->des_condciones }}"
        polaviso="{{ $polpagina->desc_avisoprivacidad }}" 
    ></x-form>
    <x-slot:javascript>
        <script>
            const registrar = document.getElementById('crearcuenta');
            const nameerror = document.getElementById('nameerror');
            const emailerror = document.getElementById('emailerror');
            const passworderror = document.getElementById('passworderror');
            const rpassworderror = document.getElementById('rpassworderror');
            const validaciones = document.getElementsByClassName('errorf');
            registrar.addEventListener('click', function(event){
                event.preventDefault();
                crearCuenta();
            })

            const crearCuenta = async () => {
                let dataform = {
                    name : document.getElementById('name').value,
                    email : document.getElementById('email').value,
                    contrasena: document.getElementById('password').value,
                    rpassword: document.getElementById('rpassword').value,
                    politicaspagina: document.getElementById('politicaspagina').value
                };
                const url ='usuario';
                const respuesta = await fetch(url,{
                    method: 'POST',
                    body: JSON.stringify(dataform),
                    headers: {
                        "Content-type": "application/json;charset=UTF-8",
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                if(respuesta.ok)
                {
                    const json = await respuesta.json();
                    if(json.validator){
                        limpiarvalidaciones();
                        for (let index = 0; index < validaciones.length; index++) {
                            mostrarvalidaciones(json.data, index);
                            quitarvalidaciones(json.data, index);
                        }
                    }
                    if(json.success){
                        const mensaje = document.getElementById('mensaje'); 
                        mensaje.classList.remove('none');
                        document.getElementById('mensaje').innerHTML= json.mensaje;
                        console.log(json.mensaje);
                    }
                    if(json.success && json.rpassword){
                        validaciones[2].classList.add('none');
                        validaciones[3].classList.remove('none');
                        document.getElementById('rpassworderror').innerHTML= json.mensaje;
                    }
                }
            }

            const limpiarvalidaciones = () => {
                nameerror.innerHTML = "";
                emailerror.innerHTML = "";
                passworderror.innerHTML = "";
                rpassworderror.innerHTML = "";
            }

            const mostrarvalidaciones = (data, index) => {
                    if(data.name && index == 0){
                        validaciones[index].classList.remove('none');
                        nameerror.innerHTML = data.name ? data.name : '' ;
                    }
                    if(data.email && index == 1){
                        validaciones[index].classList.remove('none');
                        emailerror.innerHTML = data.email ? data.email : '' ;
                    }
                    if(data.contrasena && index == 2){
                        validaciones[index].classList.remove('none');
                        passworderror.innerHTML = data.contrasena ? data.contrasena : '' ;
                    }
                    if(data.rpassword && index == 3){
                        validaciones[index].classList.remove('none');
                        rpassworderror.innerHTML = data.rpassword ? data.rpassword : '' ;
                    }
            }

            const quitarvalidaciones = (data, index) => {
                    if(!data.name && index == 0){
                        validaciones[index].classList.add('none');
                    }
                    if(!data.email && index == 1){
                        validaciones[index].classList.add('none');
                    }
                    if(!data.contrasena && index == 2){
                        validaciones[index].classList.add('none');
                    }
                    if(!data.rpassword && index == 3){
                        validaciones[index].classList.add('none');
                    }
            }
        </script>
    </x-slot>
</x-layout>
