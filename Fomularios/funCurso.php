<?php 
    include_once '../Entidades/Categoria.php';
    include_once '../ReglasNegocio/RNCurso.php';

    Registrar();
    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Curso;
            $entidad->setNombre($_POST['nombre']);
            $entidad->setDescripcion($_POST['descripcion']);
            $entidad->setPrecio($_POST['precio']);
            $entidad->setIdioma($_POST['idioma']);
            $entidad->setCategoria($_POST['categoria']);
            if (isset($_POST['estado'])) {
                $entidad->setEstado(1);
            }else{
                $entidad->setEstado(0);
            }

            $rn = new RNCurso;
            $rn->Registrar($entidad);
            header("refresh:10;url=frmCurso.php");
        }
    }
?>