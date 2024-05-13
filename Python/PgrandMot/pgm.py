def le_plus_grand_mot(mots):
    mot_max = ""

    for lettre in mots:
        if len(lettre) > len(mots):
            mot_max = mots
    return mot_max

mesure_mots = ["Bonjour","Merci","dacodacocad", "oui", "chupacabra"]
maximum = le_plus_grand_mot(mesure_mots)

print("le plus grand mot est : ",maximum)