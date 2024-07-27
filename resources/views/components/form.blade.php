<div class="d-flex justify-content-center">
    <div class="border border-1 rounded-3 p-3">
        <h1>Crear cuenta</h1>
        <form id="registrar">
            <div class="mb-3">
                <label for="name">Tu nombre</label>
                <input type="text" class="form-contro" id="name" name="name">
                <div class="errorf none">
                    <i class="a-icon a-icon-alert"></i>
                    <div id="nameerror" class="form-text inlineblock">El nombre es obligatorio.</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Correo electrónico</label>
                <input type="text" class="form-contro" id="email" name="email">
                <div class="errorf none">
                    <i class="a-icon a-icon-alert"></i>
                    <div id="emailerror" class="form-text inlineblock">El correo electrónico es obligatorio.</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-contro" id="password" name="password" placeholder="Debe tener al menos 6 caracteres">
                <div class="errorf none">
                    <i class="a-icon a-icon-alert"></i>
                    <div id="passworderror" class="form-text inlineblock">La contraseña debe contener al menos 6 caracteres.</div>
                </div>
            </div>
            <div class="mb-3">
                <label for="rpassword">Vuelva a escribir la contraseña</label>
                <input type="password" class="form-contro" id="rpassword" name="rpassword">
                <div class="errorf none">
                    <i class="a-icon a-icon-alert"></i>
                    <div id="rpassworderror" class="form-text inlineblock">La contraseña no coincide.</div>
                </div>
            </div>
            <div class="d-grid gap-2 mb-4">   
                <button type="submit" class="btn btn-register" id="crearcuenta">Crear tu cuenta de amazon</button>
            </div>    
            <p class="p2">
                Al crear una cuenta, aceptas las <a href="https://{{$polcond}}" target="_blank">Condiciones de uso</a> y el <a href="https://{{$polaviso}}" target="_blank">Aviso de privacidad</a> de Amazon. 
            </p>
            <input type="hidden" name ="politicaspagina" id="politicaspagina" value="{{ $idpol }}">
        </form>
        <div class="d-flex justify-content-center">  
            <hr>
        </div>
        <div id="mensaje" class="alert alert-warning text-center none"></div>
        <p class="p1">¿Ya tienes una cuenta? <a href="https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2F%3F_encoding%3DUTF8%26ref_%3Dnav_newcust&prevRID=HRZKCB4BX4E6WFCM49PY&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&language=es&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&pageId=usflex&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0" class="a-link-emphasis">Iniciar sesión</a></p>
        <div id="msj none"></div>
    </div>
    
</div>