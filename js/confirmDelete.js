$(document).ready(function () {
    $("a.delete").click(function (e) {
        if (!confirm('Dette sletter oppdraget fra databasen! Er du sikker på at du vil dette?')) {
            e.preventDefault();
            return false;
        }
        return true;
    });
});

$(document).ready(function () {
    $("a.userDelete").click(function (e) {
        if (!confirm('Dette sletter brukeren fra systemet! Er du sikker på at du vil dette?')) {
            e.preventDefault();
            return false;
        }
        return true;
    });
});

$(document).ready(function () {
    $("a.mainEmpDelete").click(function (e) {
        if (!confirm('Dette sletter hovedvakten fra systemet! Er du sikker på at du vil dette?')) {
            e.preventDefault();
            return false;
        }
        return true;
    });
});

$(document).ready(function () {
    $("a.locationDelete").click(function (e) {
        if (!confirm('Dette sletter lokasjonen fra systemet! Er du sikker på at du vil dette?')) {
            e.preventDefault();
            return false;
        }
        return true;
    });
});
