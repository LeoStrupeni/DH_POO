<?php

class Usuario {
    private $nombre;
    private $mail;
    private $contrasena;
    private $celular;
    private $habilidad=[];
    private $id;

    public function __construct($pNombre,$pMail,$pContrasena,$pCelular,$pHabilidad){
        $this->nombre=$pNombre;
        $this->mail=$pMail;
        $this->setPass($pContrasena);// password_hash($pContrasena,PASSWORD_DEFAULT);
        $this->celular=$pCelular;
        $this->habilidad=$pHabilidad;
    }

    public function getNombre(){
        return $this->nombre ;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail=$mail;
    }

    public function getPass(){
        return $this->contrasena;
    }
    
    public function setPass($contrasena){
        $this->contrasena=$this->encriptarPass($contrasena);
    }
 
    public function getCelular(){
        return $this->celular;
    }
       
    public function setCelular($celular){
        $this->celular=$celular;
    }

    public function getHabilidad(){
        return $this->habilidad;
    }

    public function setHabilidad($habilidad){
        $this->habilidad.=$habilidad;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }


    public function Saludar(){
        echo "Hola ".$this->nombre;
    }

    private function encriptarPass($string){
        $string=password_hash($string,PASSWORD_DEFAULT);
        return $string; 
    }

    public function mostrarTelefono(){
        $iphone = $this->celular->getMarca()=='Apple' ? ' y es fan de los iphones.':'.';

        echo $this->getNombre()." tiene el telefono ".$this->celular->getModelo()." que es de marca ".$this->celular->getMarca().$iphone;
    }

    public function llamar($user,$time){
        if($this->celular->getProveedor() == $user->celular->getProveedor()){
            echo "El costo de la llamada es de $0." ;
        } else {
            echo "El costo de la llamada es de $".$time/60*10;
        }
    }

    public function saberHacer($string,$puntaje){
        $habil="No Sabe ".$string."<br><br>";
        foreach($this->habilidad as $habilidad){
            if($habilidad->getNombre() == $string && $habilidad->getExpertise() > $puntaje){
                $habil = "Sabe ".$string."<br><br>";
            }
        }
        echo $habil;
    }

    public function insertarUser($nombre,$mail,$contrasena){
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, mail, contrasena) 
                                VALUES (:nombre, :mail, :contrasena)');
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);
        $stmt->execute();
        $this->setId((int) $pdo->lastInsertId());
        Echo 'Usuario Insertado';
    }

    public function actualizarUser($nombre,$mail,$contrasena,$id,$celular,$habilidad){
        global $pdo;
        $stmt = $pdo->prepare('UPDATE usuarios 
                                SET nombre=:nombre, 
                                    mail=:mail, 
                                    contrasena=:contrasena,
                                    celular=:celular,
                                    habilidad=:habilidad
                                WHERE id=:id');
        $stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':celular', $celular);
        $stmt->bindValue(':habilidad', $habilidad);
        $stmt->execute();
        Echo 'Usuario Actualizado';
    }

    public function guardar(){
        is_null($this->getId()) ? $this->insertarUser($this->nombre, $this->mail, $this->contrasena) : $this->actualizarUser($this->nombre, $this->mail, $this->contrasena, $this->id, $this->celular, $this->habilidad);
    }

    public function eliminarUsuario(){
        global $pdo;
        $stmt=$pdo->prepare('DELETE FROM usuarios WHERE id=:id');
        $stmt->bindValue(':id',$this->getid());
        $stmt->execute();
        echo 'Usuario eliminado';
    }

    public function listadoUsuarios(){
        global $pdo;
        $stmt=$pdo->query('SELECT * FROM usuarios');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            var_dump($row);
        }
    }
}

?>
