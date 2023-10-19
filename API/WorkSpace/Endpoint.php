<?php

namespace API {
    require_once("Stdlib.php");
    class Endpoint {
        static function Routing() {
            if (isset($_GET['tri']) && isset($_GET['tab'])) {
                $tri = $_GET['tri'];
                $tab = json_decode($_GET['tab'], true);

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
    }
}
