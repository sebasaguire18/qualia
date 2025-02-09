


// función que cambia el contenido principal de todas las pantallas recibiendo un string para saber que contendido llamar
function contenido(ventana,$index=false) {
    if ($index == 1) {
        loading('contentIndex');
        if (ventana == 'inicio') {
            ventana = 'index';
            $.ajax({
                type: "POST",
                url: "pages/index.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('inicio');
                    $('#contentIndex').html(r);
                }
            });
        } else if (ventana == 'contenido') {
            $.ajax({
                type: "POST",
                url: "pages/contenido.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('contenido');
                    $('#contentIndex').html(r);
                }
            });
        } else if (ventana == 'recursos') {
            $.ajax({
                type: "POST",
                url: "pages/recursos.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('recursos');
                    $('#contentIndex').html(r);
                }
            });
        } else if (ventana == 'login') {
            $.ajax({
                type: "POST",
                url: "pages/login.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('login');
                    $('#contentIndex').html(r);
                }
            });
        }
    }else if ($index == 2) {
        loading('contentIndexCurso');
        if (ventana == 'inicio') {
            ventana = 'index';
            $.ajax({
                type: "POST",
                url: "pages/index.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('inicio');
                    $('#contentIndexCurso').html(r);
                }
            });
        } else if (ventana == 'realizarCurso') {
            $.ajax({
                type: "POST",
                url: "pages/realizarCurso.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('realizarCurso');
                    $('#contentIndexCurso').html(r);
                }
            });
        } else if (ventana == 'recursos') {
            $.ajax({
                type: "POST",
                url: "pages/recursos.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('recursos1');
                    $('#contentIndexCurso').html(r);
                }
            });
        } else if (ventana == 'misCursos') {
            $.ajax({
                type: "POST",
                url: "pages/misCursos.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('misCursos');
                    $('#contentIndexCurso').html(r);
                }
            });          
        } else if (ventana == 'perfil') {
            $.ajax({
                type: "POST",
                url: "pages/perfil.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('perfil');
                    $('#contentIndexCurso').html(r);
                }
            });
        }
    }else if ($index == 3) {
        loading('contentIndexCurso');
        if (ventana == 'inicio') {
            ventana = 'index';
            $.ajax({
                type: "POST",
                url: "../pages/index.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('inicio');
                    $('#contentIndexCurso').html(r);
                }
            });
        } else if (ventana == 'realizarCurso') {
            $.ajax({
                type: "POST",
                url: "../pages/realizarCurso.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    window.location.href = '../curso.php';
                    $('#contentIndexCurso').html(``);
                    configPage('contenido');
                    $('#contentIndexCurso').html(r);
                }
            });
        } else if (ventana == 'login') {
            $.ajax({
                type: "POST",
                url: "pages/login.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndexCurso').html(``);
                    configPage('login');
                    $('#contentIndexCurso').html(r);
                }
            });
        }
    }else{

        loading('contentIndex');
        if (ventana == 'inicio') {
            $.ajax({
                type: "POST",
                url: "pages/inicio.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('inicio');
                    $('#contentIndex').html(r);
                }
            });
        } else if (ventana == 'listReportes') {
            $.ajax({
                type: "POST",
                url: "pages/listReportes.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentIndex').html(``);
                    configPage('listReportes');
                    optionSelects('optionsCedulas','optionsCedulas01');
                    $('#contentPrincipal').html(r);
                }
            });
        } else if (ventana == 'listUsuarios') {
            $.ajax({
                type: "POST",
                url: "pages/listUsuarios.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    configPage('listUsuarios');
                    $('#contentPrincipal').html(r);
                }
            });        
        } else if (ventana == 'services') {
            $.ajax({
                type: "POST",
                url: "pages/services.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentPrincipal').html(r);
                }
            });        
        } else if (ventana == 'contacts') {
            $.ajax({
                type: "POST",
                url: "pages/contacts.php",
                data: "ventana=" + ventana,
                success: function(r) {
                    $('#contentPrincipal').html(r);
                }
            });
          
        }
    }
}

// Función que da configuraciones extra al cargar el contenido de la vista
function configPage(page,subpage=false) {
    
    $('.nav-link').removeClass('active');

    if (page == 'inicio') {
        $('#titlePage').html(`Inicio`);
        $('.nav-link').removeClass('active');
        $('.nav-linkInicio').addClass('active');
        // tablas('tblListaProductos');
    }
    if (page == 'contenido') {
        $('#titlePage').html(`Contenido`);
        $('.nav-link').removeClass('active');
        $('.nav-linkContenido').addClass('active');
        // tablas('tblListaProductos');
    }
    if (page == 'Perfil') {
        $('#titlePage').html(`Perfil`);
        $('.nav-link').removeClass('active');
        $('.nav-linkPerfil').addClass('active');
        // tablas('tblListaProductos');
    }
    if (page == 'recursos') {
        $('#titlePage').html(`Recursos`);
        $('.nav-link').removeClass('active');
        $('.nav-linkRecursos').addClass('active');
        // tablas('tblListaProductos');
    }
    if (page == 'recursos1') {
        $('#titlePageCurso').html(`Recursos`);
        $('.nav-link').removeClass('active');
        $('.nav-linkRecursos').addClass('active');
        // tablas('tblListaProductos');
    }
    if (page == 'realizarCurso') {
        $('#titlePageCurso').html(`Contenido Curso`);
        $('.nav-link').removeClass('active');
        $('.nav-linkRealizarCurso').addClass('active');
        // tablas('tblListaGastos');
    }
    if (page == 'login') {
        $('#titlePage').html(`Login`);
        $('.nav-link').removeClass('active');
        $('.nav-linkLogin').addClass('active');
        // tablas('tblListaLogin');
    }
    if (page == 'listReportes') {
        $('#titlePageS').html(`Lista Reportes`);
        $('.nav-link').removeClass('active');
        $('.nav-linkLogin').addClass('active');
        tablas('tblLisCertificados');
    }
    if (page == 'listUsuarios') {
        $('#titlePageS').html(`Lista de usuarios`);
        $('.nav-link').removeClass('active');
        $('.nav-linkVentas').addClass('active');
        tablas('tblLisUsuarios');
    }
    if (page == 'misCursos') {
        $('#titlePageCurso').html(`Mis Cursos`);
        $('.nav-link').removeClass('active');
        $('.nav-linkMisCursos').addClass('active');
        // tablas('tblLisUsuarios');
    }
}

function loading(page) {
    $('#'+page).html(`
    <div class="row text-center">
        <div class="col-12">
            <img src="images/carga.gif" width="15%" class="">
        </div>
    </div>`);
}

function curso(page) {

    let titulo;

    $('#bodyContenidoCurso').html(``);
    $('#tituloContenidoCurso').html(``);
    loading('bodyContenidoCurso');

    cerrarModal('modalContentCurso');

    $.ajax({
        type: "POST",
        url: "pages/extrapages/contentCurso.php",
        data: "page=" + page,
        success: function(r) {
            titulo = setearContVar(page);
            $('#tituloContenidoCurso').html(titulo);
            $('#bodyContenidoCurso').html(r);
        }
    });
}

// seteo contenido variado como el titulo, botones de navegacion y active de la lista del contenido del curso
function setearContVar(page) {
    
    let titulo;

    let atras = $('.btn-atras');
    let siguiente = $('.btn-siguiente');
    
    $('.indiceList').removeClass('active');
    atras.removeClass('disabled');
    siguiente.removeClass('disabled');

    if (page == 1) {
        titulo = '1. Marco legal';

        // setear botones
        atras.attr("onclick","");
        atras.addClass('disabled');
        siguiente.attr("onclick","curso(2)");

    }else if (page == 2) {
        titulo = '2. Conceptos';

        // setear botones
        atras.attr("onclick","curso(1)");
        siguiente.attr("onclick","curso(3)");

    }else if (page == 3) {
        titulo = '3. ETAs, contaminación y peligros';

        // setear botones
        atras.attr("onclick","curso(2)");
        siguiente.attr("onclick","curso(4)");

    }else if (page == 4) {
        titulo = '4. Personal manipulador de alimentos';

        // setear botones
        atras.attr("onclick","curso(3)");
        siguiente.attr("onclick","curso(5)");

    }else if (page == 5) {
        titulo = '5. Requisitos higiénicos de fabricación';

        // setear botones
        atras.attr("onclick","curso(4)");
        siguiente.attr("onclick","curso(6)");

    }else if (page == 6) {
        titulo = '6. Locativos';

        // setear botones
        atras.attr("onclick","curso(5)");
        siguiente.attr("onclick","curso(7)");

    }else if (page == 7) {
        titulo = '7. Equipos y utensilios';

        // setear botones
        atras.attr("onclick","curso(6)");
        siguiente.attr("onclick","curso(8)");

    }else if (page == 8) {
        titulo = '8. Programa de limpieza y desinfección';

        // setear botones
        atras.attr("onclick","curso(7)");
        siguiente.attr("onclick","curso(9)");

    }else if (page == 9) {
        titulo = '9. Manejo de residuos sólidos y plagas';

        // setear botones
        atras.attr("onclick","curso(8)");
        siguiente.attr("onclick","curso(10)");

    }else if (page == 10) {
        titulo = '10. Agua potable';

        // setear botones
        atras.attr("onclick","curso(9)");
        siguiente.attr("onclick","");
        siguiente.addClass('disabled');

    }else {
        titulo = 'No hay datos de este tema';
        // setear botones
    }

    $('#indice-'+page).addClass('active');

    return titulo;
}

function consultarRespuesta(pregunta) {
    let respuesta ='';
    if (document.getElementsByClassName('respuesta_'+pregunta).checked) {   
        respuesta  = 'respuesta'+pregunta;
    }else{
        respuesta  ='vacio';
    }
}

function redir(page) {
    window.location.href = page;
}

function setearContentValidar() {
    $('#contenidoValidar').html(``);
}

// función que optiene el contenido de tablas dependiendo de su id
function tablas(tabla) {
    if (tabla == 'tblLisCertificados') {
        $.ajax({
            type: "POST",
            url: "pages/tablas.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#tblLisCertificados').html(r);
                tblInit(tabla);
            }
        });
    } else if (tabla == 'tblLisCertificadosCancel') {
        $.ajax({
            type: "POST",
            url: "pages/tablas.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#tblLisCertificadosCancel').html(r);
            }
        });        
    } else if (tabla == 'tblLisUsuarios') {
        $.ajax({
            type: "POST",
            url: "pages/tablas.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#tblLisUsuarios').html(r);
                tblInit(tabla);
            }
        });
    } else if (tabla == 'tblLisFirmas') {
        $.ajax({
            type: "POST",
            url: "pages/tablas.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#tblLisFirmas').html(r);
            }
        });        
    } else if (tabla == 'services') {
        $.ajax({
            type: "POST",
            url: "pages/services.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#contentPrincipal').html(r);
            }
        });        
    } else if (tabla == 'contacts') {
        $.ajax({
            type: "POST",
            url: "pages/contacts.php",
            data: "tabla=" + tabla,
            success: function(r) {
                $('#contentPrincipal').html(r);
            }
        });
      
    }
}

// datatables
function tblInit(tabla) {
    $(function(){
        if (tabla == 'tblLisCertificados') {
            // datatable de tabla lista de certificados
            $('#tblLisCertifi').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfrtip'
            });
        }
        if (tabla == 'tblLisUsuarios') {
            // datatable de tabla contactos
            $('#tblLisUsu').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfrtip'
            });
        }
        if (tabla == 'tblListaVenta') {
            // datatable de tabla contactos
            $('#tblListaVenta').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfrtip'
            });
        }
        if (tabla == 'tblListaGastos') {
            // datatable de tabla contactos
            $('#tblListaGastos').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
				"order": [ 0, 'desc' ],
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfBrtip',
                buttons: [
                    {
                        extend:     'excelHtml5',
                        text:       '<span class="txt-white icon-file-excel"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-success'
                    },
                    {
                        extend:     'pdfHtml5',
                        text:       '<span class="txt-white icon-file-pdf"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-danger'
                    },
                    {
                        extend:     'print',
                        text:       '<span class="txt-white icon-printer"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-info'
                    },
                ]
            });
        }
        if (tabla == 'tblListaRoles') {
            // datatable de tabla roles
            $('#tblListaRoles').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfBrtip',
                buttons: [
                    {
                        extend:     'excelHtml5',
                        text:       '<span class="txt-white icon-file-excel"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-success'
                    },
                    {
                        extend:     'pdfHtml5',
                        text:       '<span class="txt-white icon-file-pdf"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-danger'
                    },
                    {
                        extend:     'print',
                        text:       '<span class="txt-white icon-printer"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-info'
                    },
                ]
            });
        }
        if (tabla == 'tblListaUsuarios') {
            // datatable de tabla roles
            $('#tblListaUsuarios').DataTable({
                "language": {
                    "url": "extensions/datatables/Spanish.json"
                },
                responsive: "true",
				"order": [ 0, 'desc' ],
                scrollCollapse: true,
                scrollX: true,
                dom: 'lfBrtip',
                buttons: [
                    {
                        extend:     'excelHtml5',
                        text:       '<span class="txt-white icon-file-excel"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-success'
                    },
                    {
                        extend:     'pdfHtml5',
                        text:       '<span class="txt-white icon-file-pdf"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-danger'
                    },
                    {
                        extend:     'print',
                        text:       '<span class="txt-white icon-printer"></span>',
                        titleattr:  'Exportar a Excel',
                        className:  'ruler-button_child bg-info'
                    },
                ]
            });
        }
    });
}

// función que inserta un nuevo certificado
function insertarNuevoCertificado() {

    let tipo = "nuevoCertificado";
    let btnDismiss = document.getElementById('btnDismissNuevoCertificado');
    let inputNombreCertificado = $('#inputNombreCertificado').val();
    let inputIntHoraria = $('#inputIntHoraria').val();
    let inputTipoCertificado = $('#inputTipoCertificado').val();

    $.ajax({
        type: "POST",
        url: "php/controler.php",
        data: "tipo=" + tipo + "&inputNombreCertificado=" + inputNombreCertificado + "&inputIntHoraria=" + inputIntHoraria + "&inputTipoCertificado=" + inputTipoCertificado,
        success: function(r) {
            $('#alertNuevoCertificado').html(r);
            limpiarFormulario('formNuevoCertificado');
            setTimeout(() => {
                $('#alertNuevoCertificado').html(``);
            }, 1900);
            setTimeout(() => {
                btnDismiss.click();
            }, 2000);
        }
    });
}

// función que inserta un nuevo certificado
function insertarNuevaFirma() {

    let tipo = "nuevaFirma";
    let btnDismiss = document.getElementById('btnDismissNuevaFiorma');
    let btnCollapse = document.getElementById('collapseNuevaFirma');
    let inputNombreFirma = $('#inputNombreFirma').val();
    let customFile = $('#customFile').val();
    let datosForm = new FormData();
    datosForm.append('customFile',customFile);

    $.ajax({
        type: "POST",
        url: "php/controler.php",
        data: datosForm + "&tipo=" + tipo + "&inputNombreFirma=" + inputNombreFirma,
        success: function(r) {
            $('#alertNuevaFirma').html(r);
            limpiarFormulario('formNuevaFirma');
            setTimeout(() => {
                $('#alertNuevaFirma').html(``);
            }, 1900);
            setTimeout(() => {
                btnCollapse.click();
                btnDismiss.click();
            }, 2000);
        }
    });
}

// funcion para llamar options para llenar Selects
function optionSelects(tipo,campo) {
    
    if (tipo == 'optionsCedulas') {
        $.ajax({
            type: "POST",
            url: "pages/selectsOptions.php",
            data: "tipo=" + tipo,
            success: function(r) {
                $('#'+campo).html(r);
                
                let choices = document.querySelectorAll('#'+campo);
                let initChoice;
                for(let i=0; i<choices.length;i++) {
                    if (choices[i].classList.contains("multiple-remove")) {
                        initChoice = new Choices(choices[i],
                        {
                            delimiter: ',',
                            editItems: true,
                            maxItemCount: -1,
                            removeItemButton: true,
                        });
                    }else{
                        initChoice = new Choices(choices[i]);
                    }
                }
            }
        });
    }
}

// función para generar el certificado
function generarCertificado(){
    let cc = $('#optionsCedulas01').val();
    let ruta = 'extensions/pdf/index.php?paramPDF=certificado&dni=';
    console.log(cc);
    // window.location.href = ruta;
    window.open(ruta + cc, '_blank');

}

// función para generar el certificacion
function generarCertificacion(){
    
    let tipo = "generarCertificacion";
    let cc = $('#optionsCedulas01').val();

    // let ruta = 'extensions/pdf/index.php?paramPDF=certificado&dni=';
    console.log(cc);
    // window.location.href = ruta;
    // window.open(ruta + cc, '_blank');
    $.ajax({
        type: "POST",
        url: "php/controler.php",
        data: "tipo=" + tipo + "&dni=" + cc,
        success: function(r) {
            if (r == 'success') {
                sweetAlertType('success','listReportes');
                cerrarModal('generarCertificado');
            }else if(r == 'error'){
                sweetAlertType('error','listReportes');
            }else if(r == 'info'){
                sweetAlertType('info','listReportes');
            }
        }
    });

}

// función que limpia formularios por id
function limpiarFormulario(nombre) {
    document.getElementById(nombre).reset();
}

// Añade el nombre al input del archivo de imagen
$(function(){
    // Añade el nombre al input del archivo de imagen
    $(".fileInput").on("change", function() {
        let fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
});

// Función para iniciar sesión
function iniciarSesion() {

    let usernameLoging = $('#usernameLoging').val();
    let passLoging = $('#passLoging').val();

	
    let exprEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-z0-9\-\.]+$/;


    $('#spanUserLoging','#spanPassLoging').addClass('d-none');
    $('#usernameLoging','#passLoging').removeClass('border-danger');

    if(usernameLoging == '' || !exprEmail.test(usernameLoging)){
        $('#usernameLoging').addClass('border-danger');
        $('#spanUserLoging').removeClass('d-none');
        return false;
    }else{
        $('#usernameLoging').removeClass('border-danger');
        $('#spanUserLoging').addClass('d-none');

        if(passLoging == ''){
            $('#passLoging').addClass('border-danger');
            $('#spanPassLoging').removeClass('d-none');
            return false;
        }else{
            $('#passLoging').removeClass('border-danger');
            $('#spanPassLoging').addClass('d-none');
        }

        
        $('#btnIniciarSesion').text('Validando datos...');
        $('#usernameLoging','#passLoging').removeClass('border-danger');
        $('#spanUserLogingError').addClass('d-none');
        $('#spanPassLogingError').addClass('d-none');
    
        $.ajax({
            type: "POST",
            url: "php/iniciosesion.php",
            data: "usernameLoging=" + usernameLoging + "&passLoging=" + passLoging,
            success: function(r) {
                setTimeout(function(){
                    if(r == 'errorUsername'){
                        $('#usernameLoging').addClass('border-danger');
                        $('#spanUserLogingError').removeClass('d-none');
                        $('#btnIniciarSesion').text('Validar');
                    }
                    if (r == 'errorPassword') {
                        $('#passLoging').addClass('border-danger');
                        $('#spanPassLogingError').removeClass('d-none');
                        $('#btnIniciarSesion').text('Validar');
                    }
    
                    if (r != 'errorUsername' && r != 'errorPassword') {
                        if (r == '64645990cb1d4') {
                            window.location.href = 'welcome.php';
                        }else{
                            window.location.href = 'curso.php';
                        }
                    }
                }, 500);
            }
        });
    }

}

// Función para iniciar sesión
function registrarUsuario() {

    let tipo = 'registrarUsuario';

    let nameUsuario = $('#nameUsuario').val();
    let dniUsuario = $('#dniUsuario').val();
    let ciudadUsuario = $('#ciudadUsuario').val();
    let emailUsuario = $('#emailUsuario').val();
    let passUsuario = $('#passUsuario').val();

    let exprNumber = /^[0-9.]+$/;
    let exprEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-z0-9\-\.]+$/;


    $('#spanNameUsuario','#spanDniUsuario','#spanCiudadUsuario','#spanEmailUsuario','#spanEmailUsuarioError','#spanPassUsuario').addClass('d-none');
    $('#nameUsuario','#dniUsuario','#ciudadUsuario','#emailUsuario','#passUsuario').removeClass('border-danger');

    if(nameUsuario == ''){
        $('#nameUsuario').addClass('border-danger');
        $('#spanNameUsuario').removeClass('d-none');
        return false;
    }else{
        $('#nameUsuario').removeClass('border-danger');
        $('#spanNameUsuario').addClass('d-none');
        if(dniUsuario == '' || !exprNumber.test(dniUsuario)){
            $('#dniUsuario').addClass('border-danger');
            $('#spanDniUsuario').removeClass('d-none');
            return false;
        }else{
            $('#dniUsuario').removeClass('border-danger');
            $('#spanDniUsuario').addClass('d-none');
            if(ciudadUsuario == ''){
                $('#ciudadUsuario').addClass('border-danger');
                $('#spanCiudadUsuario').removeClass('d-none');
                return false;
            }else{
                $('#ciudadUsuario').removeClass('border-danger');
                $('#spanCiudadUsuario').addClass('d-none');
                if(emailUsuario == '' || !exprEmail.test(emailUsuario)){
                    $('#emailUsuario').addClass('border-danger');
                    $('#spanEmailUsuario').removeClass('d-none');
                    return false;
                }else{
                    $('#emailUsuario').removeClass('border-danger');
                    $('#spanEmailUsuario').addClass('d-none');
                    if(passUsuario == ''){
                        $('#passUsuario').addClass('border-danger');
                        $('#spanPassUsuario').removeClass('d-none');
                        return false;
                    }else{
                        $('#passUsuario').removeClass('border-danger');
                        $('#spanPassUsuario').addClass('d-none');

                    }
                    
                    $('#btnRegistrarUsuario').text('Validando datos...');
                    $('#spanNameUsuario','#spanDniUsuario','#spanCiudadUsuario','#spanEmailUsuario','#spanEmailUsuarioError','#spanPassUsuario').removeClass('border-danger');
                    $('#nameUsuario','#dniUsuario','#ciudadUsuario','#emailUsuario','#passUsuario').addClass('d-none');
                
                    $.ajax({
                        type: "POST",
                        url: "php/controler.php",
                        data: "tipo=" + tipo + "&nameUsuario=" + nameUsuario + "&dniUsuario=" + dniUsuario + "&ciudadUsuario=" + ciudadUsuario + "&emailUsuario=" + emailUsuario + "&passUsuario=" + passUsuario,
                        success: function(r) {
                            setTimeout(function(){
                                if (r == 'success') {
                                    sweetAlertType('success','login',1);
                                }else if(r == 'error'){
                                    sweetAlertType('error','login');
                                }else if(r == 'info'){
                                    sweetAlertType('info','login');
                                }else if(r == 'emailExist'){
                                    $('#emailUsuario').addClass('border-danger');
                                    $('#spanEmailUsuarioError').removeClass('d-none');
                                    $('#btnRegistrarUsuario').text('Validar');
                                }else if(r == 'dniExist'){
                                    $('#dniUsuario').addClass('border-danger');
                                    $('#spanDniUsuarioError').removeClass('d-none');
                                    $('#btnRegistrarUsuario').text('Validar');
                                }
                            }, 500);
                        }
                    });
                }
            }
        }
    }

}

// Función para iniciar sesión
function insertarNuevoUsuario() {

    let tipo = 'registrarUsuarioAdmin';

    let nameUsuarioAdmin = $('#nameUsuarioAdmin').val();
    let dniUsuarioAdmin = $('#dniUsuarioAdmin').val();
    let ciudadUsuarioAdmin = $('#ciudadUsuarioAdmin').val();
    let emailUsuarioAdmin = $('#emailUsuarioAdmin').val();
    let passUsuarioAdmin = $('#passUsuarioAdmin').val();
    let btnDismiss = document.getElementById('btnDismissNuevoUsuario');

    let exprNumber = /^[0-9.]+$/;
    let exprEmail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-z0-9\-\.]+$/;


    $('#spanNameUsuarioAdmin','#spanDniUsuarioAdmin','#spanCiudadUsuarioAdmin','#spanEmailUsuarioAdmin','#spanEmailUsuarioAdminError','#spanPassUsuarioAdmin').addClass('d-none');
    $('#nameUsuarioAdmin','#dniUsuarioAdmin','#ciudadUsuarioAdmin','#emailUsuarioAdmin','#passUsuarioAdmin').removeClass('border-danger');

    if(nameUsuarioAdmin == ''){
        $('#nameUsuarioAdmin').addClass('border-danger');
        $('#spanNameUsuarioAdmin').removeClass('d-none');
        return false;
    }else{
        $('#nameUsuarioAdmin').removeClass('border-danger');
        $('#spanNameUsuarioAdmin').addClass('d-none');
        if(dniUsuarioAdmin == '' || !exprNumber.test(dniUsuarioAdmin)){
            $('#dniUsuarioAdmin').addClass('border-danger');
            $('#spanDniUsuarioAdmin').removeClass('d-none');
            return false;
        }else{
            $('#dniUsuarioAdmin').removeClass('border-danger');
            $('#spanDniUsuarioAdmin').addClass('d-none');
            if(ciudadUsuarioAdmin == ''){
                $('#ciudadUsuarioAdmin').addClass('border-danger');
                $('#spanCiudadUsuarioAdmin').removeClass('d-none');
                return false;
            }else{
                $('#ciudadUsuarioAdmin').removeClass('border-danger');
                $('#spanCiudadUsuarioAdmin').addClass('d-none');
                if(emailUsuarioAdmin == ''){
                    $('#emailUsuarioAdmin').removeClass('border-danger');
                    $('#spanEmailUsuarioAdmin').addClass('d-none');
                    emailUsuarioAdmin = 'N/A';
                    if(passUsuarioAdmin == ''){
                        $('#passUsuarioAdmin').removeClass('border-danger');
                        $('#spanPassUsuarioAdmin').addClass('d-none');
                        passUsuarioAdmin = 'N/A';
                    }
                    
                    $('#btnRegistrarUsuarioAdmin').text('Validando datos...');
                    $('#spanNameUsuarioAdmin','#spanDniUsuarioAdmin','#spanCiudadUsuarioAdmin','#spanEmailUsuarioAdmin','#spanEmailUsuarioAdminError','#spanPassUsuarioAdmin').removeClass('border-danger');
                    $('#nameUsuarioAdmin','#dniUsuarioAdmin','#ciudadUsuarioAdmin','#emailUsuarioAdmin','#passUsuarioAdmin').addClass('d-none');
                
                    $.ajax({
                        type: "POST",
                        url: "php/controler.php",
                        data: "tipo=" + tipo + "&nameUsuario=" + nameUsuarioAdmin + "&dniUsuario=" + dniUsuarioAdmin + "&ciudadUsuario=" + ciudadUsuarioAdmin + "&emailUsuario=" + emailUsuarioAdmin + "&passUsuario=" + passUsuarioAdmin,
                        success: function(r) {
                            setTimeout(function(){
                                if (r == 'success') {
                                    btnDismiss.click();
                                    sweetAlertType('success','listUsuarios',1);
                                }else if(r == 'error'){
                                    sweetAlertType('error','listUsuarios');
                                }else if(r == 'info'){
                                    sweetAlertType('info','listUsuarios');
                                }else if(r == 'emailExist'){
                                    $('#emailUsuario').addClass('border-danger');
                                    $('#spanEmailUsuarioError').removeClass('d-none');
                                    $('#btnRegistrarUsuario').text('Validar');
                                }else if(r == 'dniExist'){
                                    $('#dniUsuario').addClass('border-danger');
                                    $('#spanDniUsuarioError').removeClass('d-none');
                                    $('#btnRegistrarUsuario').text('Validar');
                                }
                            }, 500);
                        }
                    });
                }
            }
        }
    }

}

// Función para iniciar sesión
function guardarDatosPerfil() {

    let tipo = 'guardarDatosPerfil';

    let perfilNombre = $('#perfilNombre').val();
    let perfilDni = $('#perfilDni').val();
    let perfilCiudad = $('#perfilCiudad').val();

    $('#btnPerfil').text('Validando datos...');

    $.ajax({
        type: "POST",
        url: "php/controler.php",
        data: "tipo=" + tipo + "&perfilNombre=" + perfilNombre + "&perfilDni=" + perfilDni + "&perfilCiudad=" + perfilCiudad,
        success: function(r) {
            $('#btnPerfil').text('Validado');
            setTimeout(function(){
                if (r == 'success') {
                    sweetAlertType('success','perfil',2);
                }else if(r == 'error'){
                    sweetAlertType('error','perfil');
                }else if(r == 'info'){
                    sweetAlertType('info','perfil');
                }
            }, 500);
        }
    });       

}

// función que cambia de formularios para iniciar sesion, registrarse o recuperar contraseña
function changeForm(form) {
    if (form == 'regis') {
        $('#box-sesion').addClass('d-none');
        $('#box-regis').removeClass('d-none');
    }else if (form == 'ini'){
        $('#box-regis').addClass('d-none');
        $('#box-sesion').removeClass('d-none');
    }
    // else if (form == 'olv'){
    //     $('#').addClass('d-');
    //     $('#').removeClass('d-');
    // }
}

// sweetAlert
function sweetAlertType(type,page, id = false) {
    $(function(){
        if (type == 'success') {
            if (id=='imprFac') {
                Swal.fire({
                    icon: "success",
                    title: "Factura contabilizada correctamente"
                });
            }else{
                Swal.fire({
                    icon: "success",
                    title: "Registrado correctamente"
                }).then(() => {
                    if (id===false) {
                        contenido(page);
                    }else{
                        contenido(page,id);
                    }
                });
            }
        }
        if (type == 'error') {
            Swal.fire({
                icon: "error",
                title: "El registro no se pudo realizar"
            });
        }
        if (type == 'info') {
            Swal.fire({
                icon: "info",
                title: "Algunos campos obligatorios deben contener valores"
            });
        }
        if (type == 'emailExist') {
            Swal.fire({
                icon: "info",
                title: "El email ya existe, por favor modifiquelo"
            });
        }
        if (type == 'refExist') {
            Swal.fire({
                icon: "info",
                title: "la referencia de producto ya existe, por favor modifiquelo"
            });
        }
        if (type == 'stockFalse') {
            Swal.fire({
                icon: "info",
                title: "maneja stock con error, por favor modifiquelo"
            });
        }
        if (type == 'stock') {
            Swal.fire({
                icon: "info",
                title: "La cantidad supera nuestras unidades disponibles en stock"
            });
        }
        if (type == 'eliminado') {
            Swal.fire({
                icon: "success",
                title: "Eliminado correctamente"
            }).then(() => {
                contenido(page);
            });
        }
        if (type == 'eliminar') {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Quieres eliminar el registro seleccionado?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#198754',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    ConfirmEliminar(id,page);
                }
            });
        }
    });
}

// evitar que el dormulario de ingreso de pedido haga submit
$(function () {
    $('#formNuevaFirma').submit(function (e) {
        e.preventDefault();
    });
});


// Necesario para cerrar cualquier modal
function cerrarModal(idBtn) {
    $('.'+idBtn).click();
}