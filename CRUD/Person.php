<?php

    class Person{
        private $id;
        private $name;
        private $age;

        public function setId($id){
            $this->$id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setAge($age){
            $this->age = $age;
        }
        public function getAge(){
            return $this->age;
        }
        private function connection():\PDO{
            return new \PDO('mysql:host=localhost;dbname=db_crud', 'root', '');
        }
        public function create():array{
            $con = $this->connection();
            $stmt = $con->prepare("INSERT INTO person VALUES (NULL, :_name, :_age)");
            $stmt->bindValue(":_name", $this->getName(), \PDO::PARAM_STR);
            $stmt->bindValue(":_age", $this->getAge(), \PDO::PARAM_INT);
            if ($stmt->execute()){
                $this->setId($con->lastInsertId());
                return $this->read();
            }
            return [];

        }
        public function read():array{
            $con = $this->connection();
            if($this->getId() === 0){
                $stmt = $con->prepare("SELECT * FROM person");
                if($stmt->execute()){
                    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
            }else if ($this->getId() > 0){
                $stmt = $con->prepare("SELECT * FROM person WHERE id = :__id");
                $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
                if($stmt->execute()){
                    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
            }
            return [];
        }
        public function update():array{
            $con = $this->connection();
            $stmt = $con->prepare("UPDATE erson SET name = :_name, age = :_age WHERE id = :_id");
            $stmt->bindValue(":_name", $this->getName(), \PDO::PARAM_STR);
            $stmt->bindValue(":_age", $this->getAge(), \PDO::PARAM_INT);
            $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);

            if ($stmt->execute()){
                $this->setId($con->lastInsertId());
                return $this->read();
            }
            return [];

        }
        public function delete():array{
            $person = $this->read();

            $con = $this->connection();
            $stmt = $con->prepare("DELETE FROM person WHERE id  :_id");
            $stmt->bindValue(":_id", $this->getId(), \PDO::PARAM_INT);
            if($stmt->execute()){
                return $person;
            }
        }
    }