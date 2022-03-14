<?php

namespace Controllers;

class PostalcodeController
{
    public function display()
    {
        $model = new \Models\Postalcode();



        $errorsForm = [];
        $msgValid = [];
        if($_POST):
        if (!empty($_POST['postalcode'])) {
            $postalCode = $_POST['postalcode'];
            $postalcodelenght = strlen($postalCode);
            if($postalcodelenght >=5 && $postalcodelenght <=5) {
                $postalCode2 = substr($postalCode, 0, 2);
                if ($postalCode2 == 31) {
                    $msgValid[] = 'TOULOUSE';
                } 
                if ($postalCode2 == 33) {
                    $msgValid[] = 'BORDEAUX';
                }
                if ($postalCode2 >=1 && $postalCode2 <=30) {
                    $msgValid[] = 'Code postal inconnu';
                }
                if ($postalCode2 ==32) {
                    $msgValid[] = 'Code postal inconnu';
                }
                if ($postalCode2 >=34 && $postalCode2 <=99) {
                    $msgValid[] = 'Code postal inconnu';
                }
                //? => Verif si ça foncitonne 
                //? => var_dump($postalCode2); 
            }
            else {
                $errorsForm[] = 'Votre code postal doit contenir 5 caractères';
            }
        } else {
            $errorsForm[] = 'veuillez remplir le champ';
        }

    endif;




        $template = "postalcode.phtml";
        include_once 'view/layout.phtml';
    }
}
