// JavaScript source code
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