function jouer() {
    const c = (Math.floor(Math.random() * 10))
    x = -1
    n = prompt("taper le nombre de tentative");
    b = false
    while ((+x != c) && (n != 0)) {
        alert("le nombre de tentative est " + n)
        x = prompt("taper ton tentative")
        n--;
        if (+x == c) {
            b = true
        }

    }
    if (b == false) {
        alert("le nombre aleatoire est " + c + "   faux");
    } else {
        alert("le nombre aleatoire est " + c + "correct")

    }
}
    res = true
    while (res == true) {
        jouer()


        res = confirm("voulez vous jouez une autre fois?")
    }
    if (res==false)
    {alert("SEE YOU NEXT TIME !")}