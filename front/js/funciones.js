//metodo carga una imagen cargando
function loading(rta) {
    $(rta).html("<span class='fa fa-refresh fa-refresh-animate fa-2x'></span> Validando...");
}

//metodo para creacion de objecto ajax
function ajax(url, datos, rta) {
    var ajax = $.get(url, datos, function(respuesta) {
        $(rta).html(respuesta);
    });
    return ajax;
}

function Cambiar_ClaveUsuarios() {
    var url = "Datos_Administrador_cambiclave.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}
//function ValidarNit(nit) {
//    var url = "./php/validarnit.php?nit=" + nit;
//    var datos = {};
//    var rta = "#validanit";
//    ajax(url, datos, rta);
//}
//
//function Persona_Registrar() {  /**  mostrar formularios  */
//    var url = "PersonaInsert.php";
//    var datos = {};
//    var rta = "#mostrarcontenido";
//    ajax(url, datos, rta);
//
//}
// 
//
// 
//function Persona_Listar() {  /**  tabla de datos  */
//    var url = "Persona_list.php";
//    var datos = {};
//    var rta = "#mostrarcontenido";
//    ajax(url, datos, rta);
//
//
//}
//
//
//function Buscar_cc_2(empresa) {  /**  formulario con envio de datos  */
//
//    var url = "resportes_list_cc_tabla.php";
//    var datos = {};
//    var rta = "#mostrarcontenido2";
//    ajax(url, datos, rta);
//   
//enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 
// 
//}

function Producto_Registrar() {
    var url = "envioimagenes.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function ActualizarProductoUsuario_fotos() { /**  mostrar formularios  */
    var url = "ActualizarProductoUsuario_fotos.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function ActualizarProductoUsuario_fotosA() { /**  mostrar formularios  */
    var url = "ActualizarProductoUsuario_fotos_Adm.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function ActualizarProductoUsuario_datos() { /**  mostrar formularios  */
    var url = "ActualizarProductoUsuario_datos.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function ActualizarProductoUsuario_datosA() { /**  mostrar formularios  */
    var url = "ActualizarProductoUsuario_datos_Adm.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function Producto_RegistrarAdmin() { /**  mostrar formularios  */
    var url = "ProductoInsertarAdmin.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function Producto_Listar(empresa) { /**  mostrar formularios  */
    var url = "ProductoList.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_ById.php?empresa=' + empresa, postProductoList);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarComprador(empresa) { /**  mostrar formularios  */
    var url = "ProductoListComprador.php";
    var datos = {};
    var rta = "#mostrarcontenidoUsuarios";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_ById_Comprador.php?empresa=' + empresa, postProductoList);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarReporteCampesionO(empresa) { /**  mostrar formularios  */
    var url = "ProductolistReporteOferta.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_idUsuario_O.php?empresa=' + empresa, postProductoListReporteCamp);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarReporteCampesionV(empresa) { /**  mostrar formularios  */
    var url = "ProductolistReporteVenta.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_idUsuario_V.php?empresa=' + empresa, postProductoListReporteCamp);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarAdminOfertados() { /**  mostrar formularios  */

    var url = "ProductoListAdmin.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);

    enviar("", '../back/controller/ProductoController_List_AdminTabla.php', postProductoListAdmin);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarTodo(id) {
    var empresa = id;

    switch (empresa) {
        case 1:
            url = "ProductoListTodo.php";
            var datos = {};
            rta = "#mostrarcontenido";
            ajax(url, datos, rta);
            enviar("", '../back/controller/ProductoController_List_All.php', postProductoListAdminTodo);
            break;
        case 2:
            var url = "ProductoListAdmin.php";
            var rta = "#mostrarcontenido";
            ajax(url, datos, rta);
            enviar("", '../back/controller/ProductoController_List.php?empresa=' + empresa, postProductoListAdmin);
            break;
        case 3:
            var url = "ProductoListAdmin_Vendidos.php";
            var rta = "#mostrarcontenido";
            ajax(url, datos, rta);
            enviar("", '../back/controller/ProductoController_List.php?empresa=' + empresa, postProductoListAdminTodo);
            break;
        case 4:
            var url = "ProductoListAdmin_Vendidos_Usuario.php";
            var rta = "#mostrarcontenido";
            ajax(url, datos, rta);

            break;
        case 5:
            var url = "ProductoListAdmin_Vendidos_Cliente.php";
            var rta = "#mostrarcontenido";
            ajax(url, datos, rta);

            break;
    }

}

function Producto_Listar_All() { /**  mostrar formularios  */
    var url = "ProductoListTodo.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_All.php', postProductoListAdminTodo);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_Listar_Pendientes() { /**  mostrar formularios  */
    var url = "ProductoListAdmin_Pendientes.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_Pendientes.php', postProductoListAdmin);

}

function Producto_Listar_Ofertados() { /**  mostrar formularios  */
    var url = "ProductoListAdmin_ofertados.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_Ofertados.php', postProductoListAdminTodoTienda);

}

function Producto_ListarUsuarioOfertados(empresa) { /**  mostrar formularios  */
    var url = "ProductoListAdmin_Vendidos_Usuario.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_ById_Campesino.php?empresa=' + empresa, postProductoListO);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

function Producto_ListarClienteOfertados(empresa) { /**  mostrar formularios  */
    var url = "ProductoListAdmin_Vendidos_Cliente.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    enviar("", '../back/controller/ProductoController_List_ById_Comprador.php?empresa=' + empresa, postProductoListO);
    //    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 

}

//    alert(empresa);

//    enviar("",'../back/controller/reporte_Cedula.php?empresa='+ empresa,postPersonaList); 



function Usuario_Listar() { /**  mostrar formularios  */
    var url = "UsuarioList.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    //   enviar("", '../back/controller/UsuarioController_List.php', postUsuarioList);
}

function Usuario_Listar_Tabla() { /**  mostrar formularios  */
    var url = "UsuarioList_Tabla.php";
    var datos = {};
    var rta = "#mostrarcontenido2";
    ajax(url, datos, rta);
    enviar("", '../back/controller/UsuarioController_List.php', postUsuarioList);
}

function Datos_Actualizar() { /**  mostrar formularios  */
    var url = "Datos_Campesino.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    //enviar("",'../back/controller/UsuarioController_List.php',postUsuarioList); 
}


function Datos_ActualizarAdministrador() { /**  mostrar formularios  */
    var url = "Datos_Administrador.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    //enviar("",'../back/controller/UsuarioController_List.php',postUsuarioList); 
}

//asignarRoles
function Roles_List() { /**  tabla de datos  */
    var url = "Roles_List.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function Roles_Tabla() { /**  tabla de datos  */
    var url = "Roles_Tabla.php";
    var datos = {};
    var rta = "#mostrarcontenidoT";
    ajax(url, datos, rta);

    enviar("", '../back/controller/UsuarioController_ListAlta.php', postRolesList);
}

//asignarRolesBaja
function RolesBaja_List() { /**  tabla de datos  */
    var url = "RolesBaja_List.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function RolesBaja_Tabla() { /**  tabla de datos  */
    var url = "RolesBaja_Tabla.php";
    var datos = {};
    var rta = "#mostrarcontenidoTB";
    ajax(url, datos, rta);

    enviar("", '../back/controller/UsuarioController_ListBaja.php', postRolesList);
}

//metodo para mostrar las 3 notificaciones del menu
function Notificaciones(idUser) {

    $.get('../back/controller/NotificacionController_ListById.php?id=' + idUser, function(datos) {

        var totalDts = datos.split("|"); //se parsea la respuesta para volverla array
        var cuerpo = totalDts[0].split("*");
        var fechas = totalDts[1].split(",");
        var tipoN = totalDts[2].split("-");
        var rpta = "";
        var tam = ((totalDts[0].split("*").length - 1) <= 3) ? totalDts[0].split("*").length - 1 : 3;

        for (var i = 0; i < tam; i++) {
            if (tipoN[i] == 2) {
                rpta += "<li>" +
                    "<a href='#' class='dropdown-item'>" +
                    "<div>" +
                    "<i class='fa fa-cart-arrow-down fa-fw'></i> " + cuerpo[i] +
                    "<span class='float-right text-muted small'>" + fechas[i] + "</span>" +
                    "</div>" +
                    "</a>" +
                    "</li>" +
                    "<li class='dropdown-divider'></li>";
            } else if (tipoN[i] == 1) {
                rpta += "<li>" +
                    "<a href='#' class='dropdown-item'>" +
                    "<div>" +
                    "<i class='fa fa-exclamation-triangle fa-fw'></i> " + cuerpo[i] +
                    "<span class='float-right text-muted small'>" + fechas[i] + "</span>" +
                    "</div>" +
                    "</a>" +
                    "</li>" +
                    "<li class='dropdown-divider'></li>";
            }
        }

        $.get('../back/controller/NotificacionController_isView.php?id=' + idUser, function(numero) {
            if (numero > 0) {
                document.getElementById("numNoti").style.visibility = 'visible';
                document.getElementById("numNoti").innerHTML = (numero);
                document.getElementById("temblor").classList.add('shake', 'shake-constant');
            }
        });

        document.getElementById("mostrarnotificaciones").innerHTML = rpta;

    });

}


function NotificacionesTodas() { /**  tabla de datos  */
    var url = "notificaciones.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);

}

function NotificacionesT(idUser) {

    $.get('../back/controller/NotificacionController_ListById.php?id=' + idUser, function(datos) {

        var totalDts = datos.split("|"); //se parsea la respuesta para volverla array
        var cuerpo = totalDts[0].split("*");
        var fechas = totalDts[1].split(",");
        var tipoN = totalDts[2].split("-");
        var rptaT = "";
        for (var i = 0; i < totalDts[0].split("*").length - 1; i++) {

            if (tipoN[i] == 2) { //compra
                rptaT +=
                    "<a href='#' class='dropdown-item'>" +
                    "<div class='alert alert-success'>" +
                    "<i class='fa fa-cart-arrow-down fa-fw'></i> " + cuerpo[i] +
                    "<span class='float-right text-muted small'>" + fechas[i] + "</span>" +
                    "</div>" +
                    "</a>";
            } else if (tipoN[i] == 1) { //alerta
                rptaT +=
                    "<a href='#' class='dropdown-item'>" +
                    "<div class='alert alert-danger'>" +
                    "<i class='fa fa-exclamation-triangle fa-fw'></i> " + cuerpo[i] +
                    "<span class='float-right text-muted small'>" + fechas[i] + "</span>" +
                    "</div>" +
                    "</a>";
            }

        }

        document.getElementById("notiTotal").innerHTML = rptaT;

    });

}

function Producto_Listar_Vendidos() { /**  mostrar formularios  */
    var url = "compras_list_Vendido.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
    // enviar("", '../back/controller/CarritoController_ListVendidosCompras.php', postProductoListAdminTodo);

}

function Producto_Listar_VendidosTabla() { /**  mostrar formularios  */
    var url = "compras_tabla_Vendido.php";
    var datos = {};
    var rta = "#mostrarcontenidoT";
    ajax(url, datos, rta);
    enviar("", '../back/controller/CarritoController_ListVendidosCompras.php', postComprasList);

}

//reporteEstadoCompras
function Compras_List() { /**  tabla de datos  */
    var url = "compras_list.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function Compras_Tabla() { /**  tabla de datos  */
    var url = "compras_tabla.php";
    var datos = {};
    var rta = "#mostrarcontenidoT";
    ajax(url, datos, rta);

    enviar("", '../back/controller/CarritoController_ListEstadoCompras.php', postComprasList);
}

function Compras_Flete(idFac) { /**  tabla de datos  */
    var url = "carro_flete.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);

    enviar("", '../back/controller/CarritoController_ListProductoCompras.php?idFactura=' + idFac, postComprasDetalleList);
}

function Compras_FleteImp(idFac) { /**  tabla de datos  */
    var url = "carro_flete_imprimir.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);

    enviar("", '../back/controller/CarritoController_ListProductoCompras.php?idFactura=' + idFac, postComprasDetalleList);
}

function Usuario_Registrar() { /**  mostrar formularios  */
    var url = "UsuarioInsert.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function grid_Producto() { /**  mostrar formularios  */
    var url = "gridProducto.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}

function Detalle_Producto() { /**  mostrar formularios  */
    var url = "detalleProducto.php";
    var datos = {};
    var rta = "#mostrarcontenido";
    ajax(url, datos, rta);
}