function change(nod){
    console.log(nod.firstChild.color);
    let color = "#";

    for (let i = 0; i < 6; i++) {
      color += Hex(Math.round(Math.random() * 15)+1);
    }
    nod.firstChild.color = color;
  }
  function Hex(num) {
    return num.toString(16);
  }
    