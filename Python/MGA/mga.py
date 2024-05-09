import random

ia_choice = random.choice(list(["Pierre", "Feuille", " Ciseaux"]))

running = True
# Point
point_joueur = int(0)
point_IA = int(0)
while running:

    point_joueur = int(0)
    point_IA = int(0)

    joueur_choice = str(input("Entrer Pierre, Feuille ou Ciseaux:  "))
    ia_choice = random.choice(list(["Pierre", "Feuille", " Ciseaux"]))

    if joueur_choice == ia_choice:
        print("Egalité !", "Joueur: ", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Pierre" and ia_choice == "Ciseaux":
        point_joueur += 1
        print("La pierre casse le ciseaux! vous avez gagner", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Feuille" and ia_choice == "Ciseaux":
        point_IA += 1
        print("Perdu! le ciseaux coupe la feuille", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Pierre" and ia_choice == "Feuille":
        point_IA += 1
        print("Perdu! La feuille couvre la pierre", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Ciseaux" and ia_choice == "Feuille":
        point_joueur += 1
        print("Le ciseaux coupe la feuille! vous avez gagner", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Ciseaux" and ia_choice == "Pierre":
        point_IA += 1
        print("Perdu! La pierre casse le ciseaux", point_joueur, "IA: ",point_IA)
    elif joueur_choice == "Feuille" and ia_choice == "Pierre":
        point_joueur += 1
        print("Gagner! La feuille couvre la pierre", point_joueur, "IA: ",point_IA)
    else:
        print("entrer Pierre Feuille ou Ciseaux")
print('voulez vous rejouer ?')

