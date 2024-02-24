var sortOrder = 1; // Variable pour suivre l'ordre de tri

// Fonction de tri pour le titre de l'annonce (Ad Title)
function sortAdTitle() {
    var table = document.getElementById("adminTable");
    var rows = Array.from(table.rows).slice(1); // Ignore header row

    rows.sort((a, b) => {
        var textA = a.cells[0].textContent.trim();
        var textB = b.cells[0].textContent.trim();
        return textA.localeCompare(textB) * sortOrder;
    });

    // Mettre à jour le tableau avec les lignes triées
    rows.forEach(row => table.appendChild(row));

    // Inverser l'ordre de tri pour le prochain clic
    sortOrder *= -1;
}

// Fonction de tri pour la date
function sortDate() {
    var table = document.getElementById("adminTable");
    var rows = Array.from(table.rows).slice(1); // Ignore header row

    rows.sort((a, b) => {
        var textA = new Date(a.cells[1].textContent.trim());
        var textB = new Date(b.cells[1].textContent.trim());
        return (textA - textB) * sortOrder;
    });

    // Mettre à jour le tableau avec les lignes triées
    rows.forEach(row => table.appendChild(row));

    // Inverser l'ordre de tri pour le prochain clic
    sortOrder *= -1;
}

// Fonction de tri pour l'état (State)
function sortState() {
    var table = document.getElementById("adminTable");
    var rows = Array.from(table.rows).slice(1); // Ignore header row

    rows.sort((a, b) => {
        var textA = a.cells[3].textContent.trim();
        var textB = b.cells[3].textContent.trim();
        return textA.localeCompare(textB) * sortOrder;
    });

    // Mettre à jour le tableau avec les lignes triées
    rows.forEach(row => table.appendChild(row));

    // Inverser l'ordre de tri pour le prochain clic
    sortOrder *= -1;
}



function searchFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("adminTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}

