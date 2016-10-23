<?php
        include_once '../Data/DataCargarListas.php';
        
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
        
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    
    <body>
        
        <div id="header"></div>
          <br><br><br><br>
    <center><h1 class="tituloRegistros"> Registrar Categorias de Productos</h1></center>
        <?php
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
          ?>
          
        <div class="registrar">
            <form class="form" method="post" action="../Business/producto/RegistrarCategoria.php" accept-charset="UTF-8" >
            
		<label for="nombre">Categoria:</label>
                <input title="Nueva Categoria" type="text" id="categoria" name="categoria" required/>
		
                <button class="submit3" type="submit"  onclick="return notificarInsertado()">Guardar</button>
		
	    </form>
        </div>   
        
        <div id="header"></div>
        <div id="contenedor" class="container">
          
          
      <br><br> 
      <div class="busqueda">
      <label align="right" for="kwd_search">Busqueda de CategorÃ­as:</label> <input type="text" id="kwd_search" value=""/>  
      </div>
      
       <br>
        <table id="my-table" class ="table">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Marca</th>
                        
                        <th class="text-primary">Modificar</th>
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                
                for($i = 0; $i<count($categoria); $i++){
                    ?> 
                        <tr onclick="document.location = '#'">
                    <?php
                    echo '<td class="text-success">'. $categoria[$i]->getCategoria() .'</td>'; 
                    
                    echo '<td><a href="ModificarCategoria.php?categoria='. $categoria[$i]->getCategoria() .'&id='.$categoria[$i]->getId().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?> 
                    </tr>;
            <?php   
                }                
                ?>
                </tbody>
            </table> 
        </div>
        
        <script>
    //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Categoría insertada");
        }
    </script>
    <script>
        function alerta() {  
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {      
            });
        }
    </script>   
    </body>
    
</html>