<?php
    /* TODO: Rol 1 es de Usuario */ 
    if ($_SESSION["rol_id"]==1){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nuevo Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Ticket</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }else{
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Nueva Incidencia</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntPersona\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Persona</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Usuario</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntPrioridad\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Prioridad</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntArea\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Area</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntPermisos\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Permisos</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntCategoria\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Categoria</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntSubCategoria\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Sub Categoria</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-th"></span>
                            <span class="lbl">Consultar Incidencia</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
?>
