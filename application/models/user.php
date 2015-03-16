<?php
    class User extends Model
    {
        public function insert_into_users($post)
        {
           // echo "Ik zit in de User Model";
            $query = "INSERT INTO `users` (`id`,
                                           `voornaam`,
                                           `tussenvoegsel`,
                                           `achternaam`)
                      VALUES              (Null,
                                           '".$post['voornaam']."',
                                           '".$post['tussenvoegsel']."',
                                           '".$post['achternaam']."')";
            $this->query($query);
        }
        
    }

?>