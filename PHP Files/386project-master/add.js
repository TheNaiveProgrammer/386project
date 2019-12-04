// JavaScript source code
function allLetter(inputtxt) {
    var letters = /^[A-Za-z]+$/;
    

    if (inputtxt.value.match(letters)) {

        return true;
    }
    else {

        return false;
    }
}

function select(num) {
    var pokemon = document.getElementById("pokemon");
    var pokdiv = document.getElementById("pokediv");

    var region = document.getElementById("region");
    var regiondiv = document.getElementById("regiondiv");

    var type = document.getElementById("type");
    var typediv = document.getElementById("typediv");

    var move = document.getElementById("move");
    var movediv = document.getElementById("movediv");

    var ability = document.getElementById("ability");
    var abilitydiv = document.getElementById("abilitydiv");


    if (num == 0) {
        pokemon.className = "selected";
        pokdiv.className = "divselect";

        region.className = "unselected";
        regiondiv.className = "divunselect";

        type.className = "unselected";
        typediv.className = "divunselect";

        move.className = "unselected";
        movediv.className = "divunselect";

        ability.className = "unselected";
        abilitydiv.className = "divunselect";

    } else if (num == 1) {
        pokemon.className = "unselected";
        pokdiv.className = "divunselect"

        region.className = "selected";
        regiondiv.className = "divselect";

        type.className = "unselected";
        typediv.className = "divunselect";

        move.className = "unselected";
        movediv.className = "divunselect";

        ability.className = "unselected";
        abilitydiv.className = "divunselect";
    } else if (num == 2) {
        type.className = "selected";
        typediv.className = "divselect";

        region.className = "unselected";
        regiondiv.className = "divunselect";

        pokemon.className = "unselected";
        pokdiv.className = "divunselect";

        move.className = "unselected";
        movediv.className = "divunselect";

        ability.className = "unselected";
        abilitydiv.className = "divunselect";

    } else if (num == 3) {
        type.className = "unselected";
        typediv.className = "divunselect";

        region.className = "unselected";
        regiondiv.className = "divunselect";

        pokemon.className = "unselected";
        pokdiv.className = "divunselect";

        move.className = "selected";
        movediv.className = "divselect";

        ability.className = "unselected";
        abilitydiv.className = "divunselect";
    } else if (num == 4) {

        type.className = "unselected";
        typediv.className = "divunselect";

        region.className = "unselected";
        regiondiv.className = "divunselect";

        pokemon.className = "unselected";
        pokdiv.className = "divunselect";

        move.className = "unselected";
        movediv.className = "divunselect";

        ability.className = "selected";
        abilitydiv.className = "divselect";
    }

}


function check(num) {
    var name;
    if (num == 0) {
        name = document.forms["form0"]["name"].value;
        var nat_num = document.forms["form0"]["nat_num"].value;
       

        if ((name == "")  || (nat_num == "")) {
            alert("Each criteria must be filled");
            return false;
        }

   

        if (!/^[1-9]+$/.test(nat_num)) {
            alert("National Number must be non-negative");
            return false;
        }

    } else if (num == 1) {
        name = document.forms["form1"]["name"].value;
        var gen = document.forms["form1"]["gen"].value;
        if ((name == "") || (gen == "")) {
            alert("Each criteria must be filled");
            return false;
        }

        if (name != "") {
            if (!/^[a-zA-Z]+$/.test(name)) {
                alert("Name of Region must only be characters");
                return false;
            }
        }

        if (!/^[1-9]+$/.test(gen)) {
            alert("Generation must be non-negative");
            return false;
        }
    } else if (num == 2) {
        var type = document.forms["form2"]["type"].value;
        if ((type == "")) {
            alert("Each criteria must be filled");
            return false;
        }

        if (!/^[a-zA-Z]+$/.test(type)) {
            alert("Name of Type must only be characters");
            return false;
        }

    } else if (num == 3) {
        name = document.forms["form3"]["name"].value;
        if (name == "") {
            alert("Each Criteria must be filled");
            return false;
        }


    } else if (num == 4) {
        name = document.forms["form4"]["name"].value;
        if (name == "") {
            alert("Name of Ability must be filled");
            return false;
        }
    }

    return true;
}

