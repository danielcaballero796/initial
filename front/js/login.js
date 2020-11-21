function login() {


    var url1 = "../back/controller/UsuarioController_Login.php";

    $.ajax({
        type: "POST",
        url: url1,
        data: $("#login").serialize(),


        success: function(data) {

            if (data == '1') {
                inicioA();
            } else if (data == '2') {
                inicioC();
            } else if (data == '4') {
                inicioP();
            } else if (data == '3') {
                inicioCom();
            } else if (data == '5') {
                clave();
            } else {
                error();
            }

        }
    });

};

function registro() {

    if ($("#correo").val().indexOf("@") < 0) {
        validaremail();
    } else {

        var url1 = "../back/controller/UsuarioController_Insert.php";
        $.ajax({
            type: "POST",
            url: url1,
            data: $("#registro").serialize(),


            success: function(data) {

                if (data == '1') {
                    exito();
                } else if (data == '2') {
                    campos();
                } else if (data == '4') {
                    claveNoMatch();
                } else {
                    error();
                }

            }
        });
    }

};


function inicioC() {
    window.location.href = "index.php";

}

function inicioA() {
    window.location.href = "administrador.php";

}

function inicioP() {
    habilitar();


}

function inicioCom() {
    window.location.href = "../tienda/";

}

function exito() {

    swal({
            title: "Registro",
            text: "Registro Exitoso!",
            type: "success",
            confirmButtonColor: "#1ab394",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                //
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function habilitar() {

    swal({
            title: "Alerta",
            text: "Debe Comunicacrse con el Administrador del Sitio!",
            type: "warning",
            confirmButtonColor: "#1ab394",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                //
                window.location.href = "login.php";
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function exitoToken() {

    swal({
            title: "Exito",
            text: "Se ha cambiado la contraseña Exitosamente!",
            type: "success",
            confirmButtonColor: "#1ab394",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                window.location.href = '../';
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function errorToken() {


    swal({
            title: "Error",
            text: "Se ha producido un error en el cambio de clave, solicite un nuevo cambio de clave!",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function error() {


    swal({
            title: "Error",
            text: "Se ha producido un error!",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};


function campos() {


    swal({
            title: "Error",
            text: "Complete todos los campos!",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function clave() {


    swal({
            title: "Error",
            text: "Credenciales erroneos o cuenta no activada!",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function claveNoMatch() {


    swal({
            title: "Error",
            text: "Las Contraseñas no son iguales",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

function emailNoMatch() {


    swal({
            title: "Error",
            text: "El email no se encuentra registrado en nuestro sistema",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};


function validaremail() {


    swal({
            title: "Error",
            text: "Debe proporcionar un formato valido de correo",
            type: "error",
            confirmButtonColor: "#dd6b55",
            confirmButtonText: "Ok",
            closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {} else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

};

//------------------------ Recuperar Clave 

function recuperarClave() {

    var url1 = "../back/controller/UsuarioController_Recover.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: $("#recover").serialize(),

        success: function(data) {
            if (data == '1') {
                exito();
            } else if (data == '2') {
                campos();
            } else if (data == '4') {
                emailNoMatch();
            } else {
                error();
            }

        }
    });
}

function NuevaClave() {

    var url1 = "../back/controller/UsuarioController_NewPassword.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: $("#newPassword").serialize(),

        success: function(data) {
            if (data == '1') {
                exitoToken();
            } else if (data == '2') {
                campos();
            } else if (data == '4') {
                claveNoMatch();
            } else {
                errorToken();
            }

        }
    });
}