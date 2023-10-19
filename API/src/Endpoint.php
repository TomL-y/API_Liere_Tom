<?php

namespace API {

    require_once("..\src\Stdlib.php");

    class Endpoint {
        static function Routing() {
            if (isset($_GET['tri']) && isset($_GET['tab'])) {
                $tri = $_GET['tri'];
                $tab = json_decode($_GET['tab'], true);

                if (!is_array($tab) || !self::isNumericArray($tab)) {
                    echo json_encode(['error' => 'Le tableau doit contenir uniquement des chiffres.']);
                    return;
                }

                if (empty($tab)) {
                    echo json_encode(['error' => 'Le tableau est vide.']);
                    return;
                }

                if ($tri === 'BubbleSort') {
                    $sortedArray = \Stdlib::BubbleSort($tab);
                } elseif ($tri === 'InsertionSort') {
                    $sortedArray = \Stdlib::InsertionSort($tab);
                } elseif ($tri === 'QuickSort') {
                    $sortedArray = \Stdlib::QuickSort($tab);
                } else {
                    $sortedArray = ['error' => 'Tri non pris en charge'];
                }

                echo json_encode($sortedArray);
            } else {
                echo json_encode(['error' => 'Paramètres manquants']);
            }
        }

        static function isNumericArray($array) {
            foreach ($array as $value) {
                if (!is_numeric($value)) {
                    return false;
                }
            }
            return true;
        }
    }
}

