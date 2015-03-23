<?php
    class User extends Model
    {
        public function insert_into_users($post)
        {
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
        
        public function select_all()
        {
            $query = "SELECT *
                      FROM `users`";
            return $this->query($query);
        }        
    }
?>