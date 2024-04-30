def compte_lettre(mot:str, lettre:str) -> str:
    """compte le nombre de lettre choisi dans un mot"""
    nombre_de_lettre = 0
    for i in range(len(mot)):
        if mot[i] == lettre:
            nombre_de_lettre += 1
    return nombre_de_lettre


print(compte_lettre("blablaklsdfgjmll","l"))