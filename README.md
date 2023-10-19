# API de Tri
Ceci est une API simple pour trier un tableau de données en utilisant différents algorithmes de tri. Vous pouvez trier un tableau en utilisant les algorithmes Bubble Sort, Insertion Sort, ou Quick Sort en passant les paramètres appropriés dans l'URL.

Utilisation
Pour utiliser cette API, vous devez envoyer une requête HTTP GET avec les paramètres suivants dans l'URL :

## tri (Tri): 
Le nom de l'algorithme de tri que vous souhaitez utiliser. Les options disponibles sont :

BubbleSort : Tri à bulles
InsertionSort : Tri par insertion
QuickSort : Tri rapide
## tab (Tableau) : 
Un tableau de données que vous souhaitez trier. Le tableau doit être au format JSON.

# Liere Tom

Exemple d'URL : http://localhost/API/public/index.php/?tri=BubbleSort&tab=[4,5,8,7,15,1,23]
