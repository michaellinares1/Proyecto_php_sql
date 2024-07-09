<?php
// require_once '../../config/conexion.php';

// class usuario
// {
//     public $CodigoCliente;
//     public $NombreCliente;
//     public $NickName;
//     public $Clave;
//     public $CodigoTipoPerfil;
//     public $DescripcionTipoPerfil;

//     public $token;

//     private $conexion;

//     function __construct($CodigoCliente, $NombreCliente,$NickName, $Clave, $CodigoTipoPerfil=2, $DescripcionTipoPerfil, $iniciarBD = true)
//     {
//         $this->CodigoCliente = $CodigoCliente;
//         $this->NombreCliente = $NombreCliente;
//         $this->NickName = $NickName;
//         $this->Clave = $Clave;
//         $this->CodigoTipoPerfil = $CodigoTipoPerfil;
//         $this->DescripcionTipoPerfil = $DescripcionTipoPerfil;
//         if ($iniciarBD) {
//             $this->conexion = new conexion();
//         }
//     }

//     function Validar()
//     {
//         try {
//             $nickName = $this->NickName;
//             $clave = $this->Clave;
//             $sql = "CALL ValidarUsuario(?, ?);";
//             $stmt = $this->conexion->prepare($sql);
//             $stmt->execute([$nickName, $clave]);

//             $this->Clave = "";
//             $this->NickName = "";

//             while ($datos = $stmt->fetch(PDO::FETCH_ASSOC)) {
//                 $this->CodigoCliente = $datos["idCliente"];
//                 $this->NickName = $datos["cNickName"];
//                 $this->CodigoTipoPerfil = $datos["idTipoPerfil"];
//                 $this->DescripcionTipoPerfil = $datos["cDescripcion"];
//             }
//             return $this;
//         } catch (PDOException $e) {
//             $this->CodigoUsuario = 0;
//             return $this;
//         }
//     }
// }
