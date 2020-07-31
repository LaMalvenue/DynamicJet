const updateButton = document.getElementById("update");
const detailsEquipement = document.getElementById("details");
const nameEquipement = document.getElementById("nameEquipment").innerText;
const descriptionEquipement = document.getElementById("descriptionEquipment").innerText;
const powerEquipment = document.getElementById("powerEquipment").innerText;
const priceEquipment = document.getElementById("priceEquipment").innerText;

const addEquipmentArea = document.getElementById("addEquipmentArea");
const addEquipmentButton = document.getElementById("addEquipmentButton");

updateButton.addEventListener("click", function (e) {
    e.preventDefault();
    detailsEquipement.style = "display: flex; justify-content: center;"
    detailsEquipement.innerHTML = "<form action='' class='formUpdate' method='post'>" +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' value='" + nameEquipement + "' required></label></div>" +
        "<div class='form-group'><label>Description : <input type='textarea' class=\"form-control\" name='description_category' value='" + descriptionEquipement + "' required></label></div>" +
        "<div class='form-group'><label>Puissance : <input type='number' class=\"form-control\" name='power' value='" + powerEquipment + "' required></label></div>" +
        "<div class='form-group'><label>Prix HT : <input type='number' class=\"form-control\" name='price' value='" + priceEquipment + "' required></label></div>" +
        "<div class='form-group'><input type='hidden' name='id_equipment' value=\"<?= $_GET['id_category']?>\" required></div>" +
        "<button class='btn-success btn' type='submit' name='update' id='updateEquipment'>Valider</button></div>" +
        "</form>"
})

addEquipmentButton.addEventListener("click", function (e) {
    e.preventDefault();
    addEquipmentButton.style = "display:none;";
    addEquipmentArea.innerHTML = "<form class=\"formAdd\" action=\"\" method=\"post\"><div class='form-group'><label>Quantité disponible :</label><input class='form-control' type='number' name='amount_available' value='0'></div>" +
        "                         <div class='form-group'><label>Quantité hors service :</label><input class=\"form-control\" type=\"number\" name=\"amount_out\"  value='0'/></div>" +
        "                         <div class='form-group'><label>Quantité en service :</label><input class=\"form-control\" type=\"number\" name=\"amount_inservice\"  value='0'/></div>"+
        "<div class='row'><button id=\"addEquipmentButton\" type='submit' class=\"btn btn-success \" name='add'>Valider</button>" +
        "<a href=''><button id=\"addEquipmentButton\" type='button' class=\"btn btn-primary \">Retour</button></a></div></form>";
});