<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "Búsqueda rápida";
	$Translation['records x to y of z'] = "Registros <FirstRecord> de <LastRecord> hasta <RecordCount>";
	$Translation['filters'] = "Filtros";
	$Translation['filter'] = "Filtro";
	$Translation['filtered field'] = "Campo Filtrado";
	$Translation['comparison operator'] = "Operadora de Comparación";
	$Translation['comparison value'] = "Valor de Comparación";
	$Translation['and'] = "Y";
	$Translation['or'] = "O";
	$Translation['equal to'] = "Igual a";
	$Translation['not equal to'] = "No igual a";
	$Translation['greater than'] = "Mayor que";
	$Translation['greater than or equal to'] = "Mayor qué o igual a";
	$Translation['less than'] = "Menos que";
	$Translation['less than or equal to'] = "Menor que o igual a";
	$Translation['like'] = "Como";
	$Translation['not like'] = "No es como";
	$Translation['is empty'] = "Está vacío";
	$Translation['is not empty'] = "No está vacío";
	$Translation['apply filters'] = "Aplica filtros";
	$Translation['save filters'] = "Guardar y aplicar filtros";
	$Translation['saved filters title'] = "Código HTML para los filtros aplicados";
	$Translation['saved filters instructions'] = "Copie el código a continuación y péguelo en un archivo HTML para guardar el filtro que acaba de definir para que pueda volver a él en cualquier momento en el futuro sin tener que redefinirlo. Puede guardar este código HTML en su computadora o en cualquier servidor y acceder a esta vista de tabla prefiltrada a través de él.";
	$Translation['hide code'] = "Ocultar este código";
	$Translation['printer friendly view'] = "Vista para imprimir";
	$Translation['save as csv'] = "Descargar como archivo csv (valores separados por comas)";
	$Translation['edit filters'] = "Editar filtros";
	$Translation['clear filters'] = "Limpiar filtros";
	$Translation['order by'] = 'Ordenar por';
	$Translation['go to page'] = 'Ir a la página:';
	$Translation['none'] = 'Ninguno';
	$Translation['Select all records'] = 'Seleccionar todos los registros';
	$Translation['With selected records'] = 'Con los registros seleccionados';
	$Translation['Print Preview Detail View'] = 'Vista previa de impresión Vista detallada';
	$Translation['Print Preview Table View'] = 'Vista de tabla de vista previa de impresión';
	$Translation['Print'] = 'Imprimir';
	$Translation['Cancel Printing'] = 'Cancelar Impresión';
	$Translation['Cancel Selection'] = 'Cancelar Selección';
	$Translation['Maximum records allowed to enable this feature is'] = 'La cantidad máxima de registros permitidos para habilitar esta función es';
	$Translation['No matches found!'] = 'Sin registros encontrados!';
	$Translation['Start typing to get suggestions'] = 'Comience a escribir para obtener sugerencias.';

	// _dml.php
	$Translation['are you sure?'] = '¿Seguro que quieres eliminar este registro?';
	$Translation['add new record'] = 'Añadir nuevo registro';
	$Translation['update record'] = 'Actualizar registro';
	$Translation['delete record'] = 'Eliminar el registro';
	$Translation['deselect record'] = 'Deseleccionar registro';
	$Translation["couldn't delete"] = 'No se pudo eliminar el registro debido a la presencia de <RelatedRecords> registros relacionados en la tabla [<TableName>]';
	$Translation['confirm delete'] = 'Este registro tiene <RelatedRecords> registros relacionados en la tabla [<TableName>]. ¿Todavía quieres eliminarlo? <Delete> &nbsp; <Cancel>';
	$Translation['yes'] = 'Si';
	$Translation['no'] = 'No';
	$Translation['pkfield empty'] = 'El campo es un campo de clave principal y no puede estar vacío.';
	$Translation['upload image'] = 'Subir nuevo archivo ';
	$Translation['select image'] = 'Seleccionar una imagen ';
	$Translation['remove image'] = 'Eliminar archivo';
	$Translation['month names'] = 'Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre';
	$Translation['field not null'] = 'No puede dejar este campo vacío.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hoy';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Mantenga presionada la tecla CTRL para seleccionar varios elementos de la lista anterior.';
	$Translation['Save New'] = 'Guardar Nuevo';
	$Translation['Save As Copy'] = 'Guardar como una copia';
	$Translation['Deselect'] = 'Cancelar';
	$Translation['Add New'] = 'Agregar Nuevo';
	$Translation['Delete'] = 'Eliminar';
	$Translation['Cancel'] = 'Cancelar';
	$Translation['Print Preview'] = 'Vista previa de impresión';
	$Translation['Save Changes'] = 'Guardar Cambios';
	$Translation['CSV'] = 'Guardar CSV';
	$Translation['Reset Filters'] = 'Mostrar todo';
	$Translation['Find It'] = 'Encuéntralo';
	$Translation['Previous'] = 'Previo';
	$Translation['Next'] = 'Próximo';
	$Translation['Back'] = 'Volver';

	// lib.php
	$Translation['select a table'] = "Ir a ...";
	$Translation['homepage'] = "Página principal";
	$Translation['error:'] = "Error:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Consulta:";
	$Translation['< back'] = "Volver";
	$Translation["if you haven't set up"] = "Si aún no ha configurado la base de datos, puede hacerlo haciendo clic <a href='setup.php'> aquí</a>.";
	$Translation['file too large']="Error: el archivo que cargó supera el tamaño máximo permitido de <MaxSize> KB";
	$Translation['invalid file type']="Error: el archivo que cargó supera el tamaño máximo permitido de <FileTypes> los archivos se pueden cargar";

	// setup.php
	$Translation['goto start page'] = "Volver a la página de inicio";
	$Translation['no db connection'] = "No se pudo establecer una conexión de base de datos.";
	$Translation['no db name'] = "No se pudo acceder a la base de datos llamada '<DBName>' en este servidor.";
	$Translation['provide connection data'] = "Proporcione los siguientes datos para conectarse a la base de datos:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL usuario";
	$Translation['mysql password'] = "MySQL contraseña";
	$Translation['mysql db'] = "Nombre de la Base de Datos";
	$Translation['connect'] = "Conectar";
	$Translation['couldnt save config'] = "No se pudieron guardar los datos de conexión en 'config.php'.<br />Asegúrate de que la carpeta:<br />'".dirname(__FILE__)."'<br />sea editable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Configuración ya realizada en";
	$Translation['delete md5'] = "Si desea forzar la instalación para que se ejecute nuevamente, primero debe eliminar el archivo 'setup.md5' de esta carpeta.";
	$Translation['table exists'] = "Tabla <b><TableName></b> existe, que contiene <NumRecords> registros.";
	$Translation['failed'] = "Fallido";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL dijo:";
	$Translation['table uptodate'] = "La tabla está actualizada.";
	$Translation['couldnt count'] = "No se pudieron contar los registros de la tabla <b><TableName></b>";
	$Translation['creating table'] = "Creando la tabla <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Por favor espera";

	// _view.php
	$Translation['tableAccessDenied']="¡Lo siento! No tienes permiso para acceder a esta tabla. Por favor, póngase en contacto con el administrador.";

	// incCommon.php
	$Translation['not signed in']="No has iniciado sesión";
	$Translation['sign in']="Ingresar";
	$Translation['signed as']="Registrado como";
	$Translation['sign out']="Cerrar sesión";
	$Translation['admin setup needed']="La configuración del administrador no se realizó. Inicia sesión en <a href=admin/>panel de control de administrador</a> para realizar la configuración.";
	$Translation['db setup needed']="La configuración del programa aún no se realizó. Inicia sesión en <a href=setup.php>página de configuración</a> primero.";
	$Translation['new record saved']="El nuevo registro se ha guardado correctamente.";
	$Translation['record updated']="Los cambios se han guardado correctamente.";

	// index.php
	$Translation['admin area']="Área de administración";
	$Translation['login failed']="Su intento de inicio de sesión anterior falló. Inténtalo de nuevo.";
	$Translation['sign in here']="Ingrese aquí";
	$Translation['remember me']="Recuérdame";
	$Translation['username']="Usuario";
	$Translation['password']="Clave";
	$Translation['go to signup']="¿No tienes un nombre de usuario? <br />&nbsp; <a href=membership_signup.php>Regístrate aquí</a>";
	$Translation['forgot password']="¿Olvidaste tu contraseña? <a href=membership_passwordReset.php>Click aquí</a>";
	$Translation['browse as guest']="<a href=index.php>Continúa navegando como invitado</a>";
	$Translation['no table access']="No tiene suficientes permisos para acceder a ninguna página aquí. Inicia sesión primero.";
	$Translation['signup']="Regístrate";

	// checkMemberID.php
	$Translation['user already exists']="Usuario '<MemberID>' actualmente existe. Intenta con otro usuario.";
	$Translation['user available']="Usuario '<MemberID>' está disponible y puedes llevarlo.";
	$Translation['empty user']="Escriba un nombre de usuario en el cuadro primero y luego haga clic en Comprobar disponibilidad.";

	// membership_thankyou.php
	$Translation['thanks']="Gracias por registrarte!";
	$Translation['sign in no approval']="Si ha elegido un grupo que no requiere aprobación del administrador, puede iniciar sesión ahora mismo <a href=index.php?signIn=1>aquí</a>.";
	$Translation['sign in wait approval']="Si ha elegido un grupo que requiere la aprobación del administrador, espere un correo electrónico que confirme su aprobación.";

	// membership_signup.php
	$Translation['username empty']="Debes proporcionar un nombre de usuario. Por favor regrese y escriba un nombre de usuario";
	$Translation['password invalid']="Debe proporcionar una contraseña de 4 caracteres o más, sin espacios. Por favor regrese y escriba una contraseña válida";
	$Translation['password no match']="La contraseña no coincide Por favor regrese y corrija la contraseña";
	$Translation['username exists']="Nombre de usuario ya existe. Por favor regrese y elija un nombre de usuario diferente.";
	$Translation['email invalid']="Dirección de correo electrónico no válida Por favor regrese y corrija su dirección de correo electrónico.";
	$Translation['group invalid']="Grupo inválido. Regrese y corrija la selección de grupo.";
	$Translation['sign up here']="¡Registrate aquí!";
	$Translation['registered? sign in']="¿Ya registrado? <a href=index.php?signIn=1>Firme aquí</a>.";
	$Translation['sign up disabled']="¡Lo siento! El registro está temporalmente deshabilitado por el administrador. Intenta nuevamente más tarde.";
	$Translation['check availability']="Comprueba si este nombre de usuario está disponible.";
	$Translation['confirm password']="Confirmar Contraseña";
	$Translation['email']="Dirección de Correo Electrónico";
	$Translation['group']="Grupo";
	$Translation['groups *']="Si elige registrarse en un grupo marcado con un asterisco (*), no podrá iniciar sesión hasta que el administrador lo apruebe. Recibirá un correo electrónico cuando sea aprobado.";
	$Translation['sign up']="Regístrate";

	// membership_passwordReset.php
	$Translation['password reset']="Página de restablecimiento de contraseña";
	$Translation['password reset details']="Ingrese su nombre de usuario o dirección de correo electrónico a continuación. Luego le enviaremos un enlace especial a su correo electrónico. Después de hacer clic en ese enlace, se le pedirá que ingrese una nueva contraseña.";
	$Translation['password reset subject']="Instrucciones de restablecimiento de contraseña";
	$Translation['password reset message']="Querido miembro, \n Si ha solicitado restablecer / cambiar su contraseña, haga clic en este enlace: \n <ResetLink> \n\n Si no solicitó un restablecimiento / cambio de contraseña, ignore este mensaje. \n\n Saludos.";
	$Translation['password reset ready']="Se ha enviado un correo electrónico con instrucciones para restablecer la contraseña a su dirección de correo electrónico registrada. Siga las instrucciones en ese mensaje de correo electrónico.<br /><br />Si no recibe este correo electrónico dentro de los 5 minutos, intente restablecer su contraseña nuevamente y asegúrese de ingresar un nombre de usuario o dirección de correo electrónico correctos.";
	$Translation['password reset invalid']="Usuario o contraseña invalido. <a href=membership_passwordReset.php>Inténtalo de nuevo</a>, o ir <a href=index.php>volver a la página de inicio</a>.";
	$Translation['password change']="Página de cambio de contraseña";
	$Translation['new password']="Nueva Contraseña";
	$Translation['password reset done']="Su contraseña fue cambiada exitosamente. Usted puede <a href=index.php?signOut=1>inicia sesión con la nueva contraseña aquí</a>.";

    $Translation['Loading ...']='Cargando ...';
    $Translation['No records found']='Sin registros encontrados';
    $Translation['You can add children records after saving the main record first']='Puede agregar registros secundarios después de guardar el registro principal primero';

    $Translation['ascending'] = 'Ascendente';
    $Translation['descending'] = 'Descendente';
    $Translation['then by'] = 'Entonces por';

	// membership_profile
	$Translation['Legend'] = 'Leyenda';
	$Translation['Table'] = 'Tabla';
	$Translation['Edit'] = 'Editar';
	$Translation['View'] = 'Ver';
	$Translation['Only your own records'] = 'Solo tus propios registros';
	$Translation['All records owned by your group'] = 'Todos los registros de su grupo.';
	$Translation['All records'] = 'Todos los Registros';
	$Translation['Not allowed'] = 'No permitido';
	$Translation['Your info'] = 'Tu información';
	$Translation['Hello user'] = 'Hola %s!';
	$Translation['Your access permissions'] = 'Tus permisos de acceso';
	$Translation['Update profile'] = 'Actualiza Perfil';
	$Translation['Update password'] = 'Actualizar contraseña';
	$Translation['Change your password'] = 'Cambia tu contraseña';
	$Translation['Old password'] = 'Contraseña anterior';
	$Translation['Password strength: weak'] = 'Password strength: débil';
	$Translation['Password strength: good'] = 'Password strength: buena';
	$Translation['Password strength: strong'] = 'Password strength: fuerte';
	$Translation['Wrong password'] = 'Contraseña errada';
	$Translation['Your profile was updated successfully'] = 'Tu perfil fue actualizado satisfactoriamente';
	$Translation['Your password was changed successfully'] = 'Tu contraseña fue actualizada satisfactoriamente';
	$Translation['Your IP address'] = 'Tu dirección IP';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Registros a mostrar';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Datos de configuración';
	$Translation['Database Information'] = 'Información de base de datos';
	$Translation['Admin Information'] = 'Información de administrador';
	$Translation['setup intro 1'] = 'No parece haber un archivo de configuración. Esto es necesario para que la aplicación funcione. <br> <br> Esta página de configuración lo ayudará a crear ese archivo. Pero en algunas configuraciones de servidor esto podría no funcionar. En ese caso, es posible que deba ajustar los permisos de la carpeta o crear el archivo de configuración manualmente.';
	$Translation['setup intro 2'] = '¡Bienvenido a tu nueva aplicación AppGini! Antes de comenzar, necesitamos información sobre su base de datos. Deberá saber lo siguiente antes de continuar: <ol> <li> Servidor de base de datos (host) </li> <li> Nombre de la base de datos </li> <li> Nombre de usuario de la base de datos </li> <li> Contraseña de la base de datos </ li> </ol> Es probable que su proveedor de alojamiento web le haya proporcionado los elementos anteriores. Si no tiene esta información, deberá contactarlos o consultar su documentación de servicio antes de continuar aquí. Si estás listo, ¡comencemos!';
	$Translation['setup finished'] = '<b>¡Éxito!</b><br><br>Su aplicación AppGini ha sido instalada. Aquí hay algunas sugerencias para comenzar a usarlo:';
	$Translation['setup next 1'] = 'Comience a usar su aplicación para agregar datos o trabaje con datos existentes, si los hay.';
	$Translation['setup next 2'] = 'Importe datos existentes a su aplicación desde un archivo CSV.';
	$Translation['setup next 3'] = 'Vaya a la página de inicio del administrador donde puede cambiar muchas otras configuraciones de la aplicación.';
	$Translation['db_name help'] = 'El nombre de la base de datos en la que desea ejecutar su aplicación AppGini.';
	$Translation['db_server help'] = '<i>localhost</i> Funciona en la mayoría de los servidores. De lo contrario, debería poder obtener esta información de su proveedor de alojamiento web.';
	$Translation['db_username help'] = 'Tu usuario de MySQL';
	$Translation['db_password help'] = 'Tu contraseña de MySQL';
	$Translation['username help'] = 'Especifique el nombre de usuario de administrador que desea usar para acceder al área de administración. Debe tener cuatro caracteres o más.';
	$Translation['password help'] = 'Especifique una contraseña segura para acceder al área de administración.';
	$Translation['email help'] = 'Ingrese la dirección de correo electrónico donde desea que se envíen las notificaciones de administrador.';
	$Translation['Continue'] = 'Continue ...';
	$Translation['Lets go'] = '¡Vamonos!';
	$Translation['Submit'] = 'Enviar';
	$Translation['Hide'] = 'Ocultar ayuda';
	$Translation['Database info is correct'] = '&#10003; ¡La información de la base de datos es correcta!';
	$Translation['Database connection error'] = '&#10007; Error de conexión a la base de datos!';
	$Translation['The following errors occured'] = 'los siguientes errores ocurrieron';
	$Translation['failed to create config instructions'] = 'Esto probablemente se deba a los permisos de carpeta configurados para evitar que su servidor web cree archivos. No te preocupes! Todavía puede crear el archivo de configuración manualmente. <br> <br> Simplemente pegue el siguiente código en un editor de texto y guarde el archivo como "config.php", luego cárguelo usando FTP o cualquier otro método en la carpeta% s en su servidor';
	$Translation['Only show records having filterer'] = 'Mostrar solo registros donde %s es %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'No tiene suficientes permisos para eliminar este registro';
	$Translation['Couldn\'t delete this record'] = 'No se pudo eliminar este registro';
	$Translation['The record has been deleted successfully'] = 'El registro ha sido eliminado exitosamente';
	$Translation['Couldn\'t save changes to the record'] = 'No se pudieron guardar los cambios en el registro';
	$Translation['Couldn\'t save the new record'] = 'No se pudo guardar el nuevo registro';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Más';
	$Translation['Confirm deleting multiple records'] = 'Confirmar la eliminación de múltiples registros';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> los registros serán eliminados. ¿Seguro que quieres hacer esto?';
	$Translation['Yes, delete them!'] = '¡Sí, bórralos!';
	$Translation['No, keep them.'] = 'No, quédatelos.';
	$Translation['Deleting record <i> of <n>'] = 'Deleting record <i> of <n>';
	$Translation['Delete progress'] = 'Eliminar progreso';
	$Translation['Show/hide details'] = 'Mostrar / ocultar detalles';
	$Translation['Connection error'] = 'Error de conexión';
	$Translation['Add more actions'] = 'Agregar más acciones';
	$Translation['Update progress'] = 'Actualiza progreso';
	$Translation['Change owner'] = 'Cambiar dueño';
	$Translation['Updating record <i> of <n>'] = 'Actualizar registro <i> of <n>';
	$Translation['Change owner of <n> selected records to'] = 'Cambiar dueño de <n> seleccionar registros a';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Usuario <MemberID> Ya existe o no es válido. Asegúrese de proporcionar un nombre de usuario que contenga de 4 a 20 caracteres válidos.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Proveedor inválido!';
	$Translation['invalid url'] = 'URL invalida!';
	$Translation['cant retrieve coordinates from url'] = '¡No se pueden recuperar coordenadas de la URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = '¡El modo de mantenimiento está habilitado! Puede deshabilitarlo desde la página de inicio del administrador.';
	$Translation['unique field error'] = 'Este valor ya existe o no es válido. Asegúrese de especificar un valor válido único.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Mostrar todos los registros de este usuario de "<tablename>" tabla';
	$Translation['show all group records from table'] = 'Mostrar todos los registros de este grupo de "<tablename>" tabla';
	$Translation['email this user'] = 'Enviar un correo electrónico a este usuario';
	$Translation['email this group'] = 'Enviar este grupo por correo electrónico';
	$Translation['owner'] = 'Dueño';
	$Translation['created'] = 'Creado';
	$Translation['last modified'] = 'Última modificación';
	$Translation['record has no owner'] = 'Este registro no tiene un propietario asignado. Puede asignar un propietario desde el área de administración.';
	$Translation['admin-only info'] = 'La información anterior se muestra porque actualmente ha iniciado sesión como super administrador. Otros usuarios no verán esto.';
	$Translation['discard changes confirm'] = '¿Descartar cambios en este registro?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Ocultar / Mostrar columnas';
	$Translation['next column'] = 'Columna siguiente';
	$Translation['previous column'] = 'Columna anterior';