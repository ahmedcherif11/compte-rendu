function aff(){
    let nom=document.getElementById("nom").value;
    let text=document.getElementById("text").value;
    let r=document.getElementById("l1");
    var res="";

    if (nom=="" || text==""){
        alert("Please fill all fields.");
    }
    else {
        var node = document.createElement('li');
        res=nom+" | "+text;

        let btn=document.createElement("button");
        btn.innerHTML = "Supprimer";
        
        node.appendChild(document.createTextNode(res));
        node.style.backgroundColor="white";
        node.appendChild(btn);
        node.setAttribute("id",nom);
        btn.setAttribute("onclick","btnn('"+nom+"')");

        r.appendChild(node);
    }
}

function btnn(m) {
    let r=document.getElementById("l1");
    let x=document.getElementById(m);
    r.removeChild(x);
}