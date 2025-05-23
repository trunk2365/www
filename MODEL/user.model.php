<?php
// model/user.model.php

include '/laragon/www/MODEL/connexion_sql.php';

            // Récupérer tous les utilisateurs (id et nom uniquement)
            function getAllUsers() {
                $pdo = getConnexion();
                $sql = "SELECT ID_USER, FIRSTNAME FROM klftcclft_users";
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch(PDOException $e) {
                    echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
                    return false;
                }
            }

            // Récupérer un utilisateur par son ID
            function getUserById($id) {
                $pdo = getConnexion();
                $sql = "SELECT * FROM klftcclft_users WHERE ID_USER = :ID_USER";
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':ID_USER', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    return $stmt->fetch(PDO::FETCH_ASSOC);
                } catch(PDOException $e) {
                    echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
                    return false;
                }
            }

            // Créer un nouvel utilisateur
            function createUser($pseudo, $prenom, $nom, $email, $password) {
                $pdo = getConnexion();
                $sql = "INSERT INTO klftcclft_users (PSEUDO_USER, FIRSTNAME, LASTNAME, EMAIL, PASSWORD) VALUES (:PSEUDO_USER, :FIRSTNAME, :LASTNAME, :EMAIL, :PASSWORD)";
                try {
                    $stmt = $pdo->prepare($sql);
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->bindParam(':PSEUDO_USER', $pseudo, PDO::PARAM_STR);
                    $stmt->bindParam(':FIRSTNAME', $prenom, PDO::PARAM_STR);
                    $stmt->bindParam(':LASTNAME', $nom, PDO::PARAM_STR);
                    $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
                    $stmt->bindParam(':PASSWORD', $hashedPassword, PDO::PARAM_STR);
                    $stmt->execute();
                    $lastInsertId = $pdo->lastInsertId(); // Récupérer l'ID ici
                    return $lastInsertId; // Retourner l'ID
                } catch(PDOException $e) {
                    echo "Erreur lors de la création de l'utilisateur : " . $e->getMessage();
                    return false;
                }
            }

            // function updateUser($pseudo, $prenom, $email, $password) {
            //     $pdo = getConnexion();
            //     $sql = "UPDATE klftcclft_users SET FIRSTNAME = :FIRSTNAME, EMAIL = :EMAIL, PASSWORD = :PASSWORD WHERE PSEUDO_USER = :PSEUDO_USER";

            //     try {
            //         $stmt = $pdo->prepare($sql);
            //         $stmt->bindParam(':PSEUDO_USER', $pseudo, PDO::PARAM_STR);
            //         $stmt->bindParam(':FIRSTNAME', $prenom, PDO::PARAM_STR);
            //         $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
            //         // Hachage du mot de passe avant de le lier à la requête
            //         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //         $stmt->bindParam(':PASSWORD', $hashedPassword, PDO::PARAM_STR);

            //         return $stmt->execute();
            //     } catch(PDOException $e) {
            //         echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
            //         return false;
            //     }
            // }
            
            
            function updateUser($id, $firstname, $lastname, $email, $password = null) {
                $pdo = getConnexion();
                $sql = "UPDATE klftcclft_users SET FIRSTNAME = :firstname, LASTNAME = :lastname, EMAIL = :email";
            
                if ($password !== null && $password !== '') {
                    $sql .= ", PASSWORD = :password";
                }
            
                $sql .= " WHERE ID_USER = :id";
            
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
                    $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
                    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            
                    if ($password !== null && $password !== '') {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
                    }
            
                    return $stmt->execute();
            
                } catch(PDOException $e) {
                    echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
                    return false;
                }
            }




            // Supprimer un utilisateur
            function deleteUser($id) {
                $pdo = getConnexion();
                $sql = "DELETE FROM klftcclft_users WHERE ID_USER = :ID_USER";
                try {
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':ID_USER', $id, PDO::PARAM_INT);
                    return $stmt->execute();
                } catch(PDOException $e) {
                    echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
                    return false;
                }
            }

            function connectUser($pseudo, $password) {
                $pdo = getConnexion();
                $sql = "SELECT * FROM klftcclft_users WHERE PSEUDO_USER = :PSEUDO_USER";
                try {
                    $stmt = $pdo->prepare($sql);

                    $stmt->bindParam(':PSEUDO_USER', $pseudo, PDO::PARAM_STR);
                    $stmt->execute();
                    $stmt->debugDumpParams();
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    $log = ['user' => $user];
                

                    if (isset($user) && !empty($user)) {
                        if (password_verify($password, $user['PASSWORD'])) {
                            $_SESSION["ID_USER"] = $user["ID_USER"];
                            $_SESSION["PSEUDO_USER"] = $user["PSEUDO_USER"];
                            $_SESSION["LASTNAME"] = $user["LASTNAME"];
                            $_SESSION["FIRSTNAME"] = $user["FIRSTNAME"];
                            $_SESSION["EMAIL"] = $user["EMAIL"];
                            $_SESSION["IS_ADMIN"] = $user["IS_ADMIN"];
                            return true;
                        }
                    }

            return false;





        } catch(PDOException $e) {
            var_dump($e);
            die;
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }


?>