def get_vowels_numbers():
    """compte et affiche le nombre de voyelles dans un mot donnée"""
    compteur = 0  # Initialise le compteur à zéro
    voyelles = ("a", "e", "i", "o", "u")  # Définit un tuple de voyelles
    mot = input("entrer un mot: ")

    for lettre in mot:  # Parcours chaque lettre dans le mot donné
        if lettre in voyelles:  # Vérifie si la lettre est une voyelle
            compteur += 1  # Incrémente le compteur si la lettre est une voyelle
            print("Voyelle trouvée : {}".format(lettre))

    print("Il y a {} voyelles dans ce mot;".format(compteur))  # Affiche le nombre total de voyelles


get_vowels_numbers()