<?php

    class Database
    {
        const DB_SERVER = DATABASE_HOST; /* Database host in config.php */
        const DB_USERNAME = DATABASE_USER; /* Database user in config.php */
        const DB_PASSWORD = DATABASE_PASSWORD; /* Database password in config.php */
        const DB_NAME = DATABASE_NAME; /* Database Name in config.php */

        private $_pdo; /* Database session */

        /**
        * Constructor of Database Class
        * @return Statement = connexion session with Database
        * @date 04-10-2018
        * @author Samuel Ethève - https://ethsam.fr
        */
        public function __construct() {
            /* Attempt to connect to MySQL database */
            try{
                $this->$_pdo = new PDO("mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
                // Set the PDO error mode to exception
                $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return true;
            } catch(PDOException $e){
                return "ERROR: Could not connect. " . $e->getMessage(); /* Error message */
            }
        }
        
        /**
        * public function getCompareLogin()
        * @param Array = [ (String) login, (String) password ];
        * @return Array = information data of the user
        * @date 04-10-2018
        * @author Samuel Ethève - https://ethsam.fr
        */
        public function getCompareLogin($array) {
            $result = $this->$_pdo->query('SELECT * FROM users WHERE email="'.$array['login'].'" AND password="'.md5($array['password']).'"');
                $result = $result->fetch();
            return $result;
        }

        /* --------------------- */
        /*        USERS CRUD     */
        /* --------------------- */

            /**
            * public function createUser()
            * @params String = Contain data for DB Insert
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function createUser($array) {
                if (!empty($array)) {
                    $sth = $this->$_pdo->prepare('INSERT INTO users (`id_user`, `name`, `email`, `password`, `role_id`) VALUES (NULL, "'.$array[0].'", "'.$array[1].'", "'.md5($array[2]).'", '.$array[3].');');
                } else {
                    return false;
                }
                $sth->execute();
                return true;
            }

            /**
            * public function readAllUser()
            * @param int = INTEGER
            * @return JSON = list or single subcategories
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllUser($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT *  FROM users');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM users WHERE `id_user` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }

            /**
            * public function updateUser()
            * @param Int = INTEGER
            * @param String = String
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function updateUser($array) {
                if ($array[0] > 0) {
                    // Avec Mot de passe 
                    if (trim($array[4]) != "") {
                        try{
                            $sth = $this->$_pdo->prepare('UPDATE `users` SET `name` = "'.$array[1].'", `email` = "'.$array[2].'", `password` = "'.md5($array[4]).'", `role_id` = "'.$array[3].'" WHERE `users`.`id_user` = '.$array[0]);
                            $sth->execute();
                            $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            return true;
                            } catch(PDOException $e){
                            return (array) [false, $e->getMessage()];
                        }
                    // Sans Mot de passe
                    } else {
                        try{
                            $sth = $this->$_pdo->prepare('UPDATE `users` SET `name` = "'.$array[1].'", `email` = "'.$array[2].'", `role_id` = "'.$array[3].'" WHERE `users`.`id_user` = '.$array[0]);
                            $sth->execute();
                            $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            return true;
                            } catch(PDOException $e){
                            return (array) [false, $e->getMessage()];
                        }
                    }

                } else {
                    return false;
                }
                //var_dump('UPDATE `users` SET `name` = "'.$array[1].', `email` = "'.$array[2].'", `password` = "'.$array[2].'", `role_id` = "'.$array[3].'" WHERE `users`.`id_user` ='.$array[0]);
                
            }

            /**
            * public function deleteUser()
            * @param int = INTEGER
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function deleteUser($int) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('DELETE FROM `users` WHERE `users`.`id_user` = '.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }


        /* --------------------- */
        /*        CITY CRUD      */
        /* --------------------- */

            /**
            * public function createCity()
            * @param String = Contain data for DB Insert
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            ! no work
            */
            public function createCity($string) {
                if (!empty($string)) {
                    try{
                        $sth = $this->$_pdo->prepare('INSERT INTO `cities` (`id_city`, `cityName`) VALUES (NULL, '.$string.');');
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return false;
                    }
                } else {
                    return false;
                }
            }

            /**
            * public function readAllCity()
            * @param int = INTEGER
            * @return JSON = list or single city
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllCity($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT *  FROM `cities`');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `cities` WHERE `id_city` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }

            /**
            * public function updateCity()
            * @param Int = INTEGER
            * @param String = String
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function updateCity($int, $string) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('UPDATE `cities` SET `cityName` = "'.$string.'" WHERE `cities`.`id_city` ='.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

            /**
            * public function deleteCity()
            * @param int = INTEGER
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            ! no work
            */
            public function deleteCity($int) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('DELETE FROM `cities` WHERE `cities`.`id_city` = '.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }


        /* --------------------- */
        /*     CATEGORY CRUD     */
        /* --------------------- */

            /**
            * public function createCategory()
            * @params String = Contain data for DB Insert
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function createCategory($string) {
                if (!empty($string)) {
                    $sth = $this->$_pdo->prepare('INSERT INTO `categories` (`id_category`, `designation_cat`) VALUES (NULL, "'.$string.'");');
                } else {
                    return false;
                }
                $sth->execute();
                return true;
            }

            /**
            * public function readAllCategory()
            * @param int = INTEGER
            * @return JSON = list or single categories
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllCategory($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `categories`');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `categories` WHERE `id_category` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }

            /**
            * public function updateCategory()
            * @param Int = INTEGER
            * @param String = String
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function updateCategory($int, $string) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('UPDATE `categories` SET `designation_cat` = "'.$string.'" WHERE `categories`.`id_category` ='.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

            /**
            * public function deleteCategory()
            * @param int = INTEGER
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function deleteCategory($int) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('DELETE FROM `categories` WHERE `categories`.`id_category` = '.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

        /* --------------------- */
        /*    SUBCATEGORY CRUD   */
        /* --------------------- */

            /**
            * public function createSubCategory()
            * @params String = Contain data for DB Insert
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function createSubCategory($string) {
                if (!empty($string)) {
                    $sth = $this->$_pdo->prepare('INSERT INTO subcategories (`id_subcategory`, `designation_subcat`) VALUES (NULL, "'.$string.'");');
                } else {
                    return false;
                }
                $sth->execute();
                return true;
            }

            /**
            * public function readAllSubCategory()
            * @param int = INTEGER
            * @return JSON = list or single subcategories
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllSubCategory($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT * FROM subcategories');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM subcategories WHERE `id_subcategory` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }

            /**
            * public function updateSubCategory()
            * @param Int = INTEGER
            * @param String = String
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function updateSubCategory($int, $string) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('UPDATE `subcategories` SET `designation_subcat` = "'.$string.'" WHERE `subcategories`.`id_subcategory` ='.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

            /**
            * public function deleteSubCategory()
            * @param int = INTEGER
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function deleteSubCategory($int) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('DELETE FROM `subcategories` WHERE `subcategories`.`id_subcategory` = '.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

        /* --------------------- */
        /*    CONTENT CRUD       */
        /* --------------------- */

            /**
            * public function createContent()
            * @param Array = Contain data for DB Insert
            * @return Boolean = True or False
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function createContent($array) {
                $img = trim($array[1]);
                $img = !empty($array[1]) ? $array[1] :'https://via.placeholder.com/1920x1080';
                if (!empty($array)) {
                    $sth = $this->$_pdo->prepare('INSERT INTO `contents` (`id_content`, `title`, `content`, `img`, `category`, `subCategory`, `city`, `adress`, `phone`, `lat`, `long`) VALUES (NULL, "'.$array[0].'", "'.$array[7].'", "'.$img.'", '.$array[2].', '.$array[3].', '.$array[4].', "'.$array[5].'", "'.$array[6].'", "NULL", "NULL");');
                } else {
                    return false;
                }
                $sth->execute();
                return true;
            }

            /**
            * public function readAllContent()
            * @param int = INTEGER
            * @return JSON = list or single content
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllContent($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT *  FROM `contents`');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `contents` WHERE `id_content` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }

            /**
            * public function updateContent()
            * @param array = ARRAY
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function updateContent($array) {
                $img = trim($array[2]);
                $img = !empty($array[2]) ? $array[2] :'https://via.placeholder.com/1920x1080';
                if ($array[0] > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('UPDATE `contents` SET `title` = "'.$array[1].'", `content` = "'.$array[8].'", `img` = "'.$img.'", `category` = '.$array[3].', `subCategory` = '.$array[4].', `city` = '.$array[5].',`adress` = "'.$array[6].'", `phone` = "'.$array[7].'"  WHERE `contents`.`id_content` ='.$array[0]);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }

            }

            /**
            * public function deleteContent()
            * @param int = INTEGER
            * @return Boolean = True or False
            * @date 09-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function deleteContent($int) {
                if ($int > 0) {
                    try{
                        $sth = $this->$_pdo->prepare('DELETE FROM `contents` WHERE `contents`.`id_content` = '.$int);
                        $sth->execute();
                        $this->$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        return true;
                        } catch(PDOException $e){
                        return (array) [false, $e->getMessage()];
                    }
                } else {
                    return false;
                }
            }

        
        
            /**
            * public function readAllUserRole()
            * @param int = INTEGER
            * @return JSON = list or single roles
            * @date 04-10-2018
            * @author Samuel Ethève - https://ethsam.fr
            */
            public function readAllUserRole($int = 0) {
                if ($int < 1) {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `users_roles`');
                } else {
                    $sth = $this->$_pdo->prepare('SELECT * FROM `users_roles` WHERE `id_role` = '.$int);
                }
                $sth->execute();
                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                $json = json_decode(json_encode($results));
                return $json;
            }


    } //EOF

?>