function validar_login() {
    var login_usuario = loginUsuario.login_usuario.value;
    var senha_usuario = loginUsuario.senha_usuario.value;
    

    if (login_usuario == "") {
        alert('Preencha o campo USUÁRIO');
        loginUsuario.login_usuario.focus();
        return false;
    }
    if (senha_usuario == "") {
        alert('Preencha o campo SENHA');
        loginUsuario.senha_usuario.focus();
        return false;
    }
}