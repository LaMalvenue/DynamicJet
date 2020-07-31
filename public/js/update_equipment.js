const updateButton = document.getElementById("update");

const detailsEquipement = document.getElementById("details");
const detailsEquipmentContent = detailsEquipement.cloneNode(true);

const nameEquipement = document.getElementById("nameEquipment").innerText;
const descriptionEquipement = document.getElementById("descriptionEquipment").innerText;
let powerEquipment = null;
if (document.getElementById("powerEquipment") != null) {
    powerEquipment = document.getElementById("powerEquipment").innerText;
}
const priceEquipment = document.getElementById("priceEquipment").innerText;
const addEquipmentArea = document.getElementById("addEquipmentArea");
const addEquipmentButton = document.getElementById("addEquipmentButton");

updateButton.addEventListener("click", function (e) {
    e.preventDefault();
    detailsEquipement.style = "display: flex; justify-content: center;"
    detailsEquipement.innerHTML = "<form action='' method='post' class='formAdd'> " +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' value='" + nameEquipement + "' required></label></div>" +
        "<div class='form-group'><label>Description : <input type='textarea' class=\"form-control\" name='description_category' value='" + descriptionEquipement + "' required></label></div>" +
        "<div class='form-group'><label>Puissance : <input type='number' class=\"form-control\" name='power' value='" + powerEquipment + "' required></label></div>" +
        "<div class='form-group'><label>Prix HT : <input type='number' class=\"form-control\" name='price' value='" + priceEquipment + "' required></label></div>" +
        "<div class='form-group'><input type='hidden' name='id_equipment' value=\"<?= $_GET['id_category']?>\" required></div>" +
        "<div class='row'><button class='btn-success btn' type='submit' name='update' id='updateEquipment'>Valider</button><button id=\"return\" type='button' class=\"btn btn-primary \">Retour</button></div></div>" +
        "</form>";

    const returnButton = document.getElementById("return");
    returnButton.addEventListener("click", function (e) {
        e.preventDefault();
        detailsEquipement.style = "";
        detailsEquipement.innerHTML = "";
        detailsEquipement.appendChild(detailsEquipmentContent);
    })
})

addEquipmentButton.addEventListener("click", function (e) {
    e.preventDefault();
    addEquipmentButton.style = "display:none;";
    addEquipmentArea.innerHTML = "<form class=\"formAdd\" action=\"\" method=\"post\"><div class='form-group'><div class='form-group'><label> Quantité </label><input class=\"form-control\" type=\"number\" name=\"amount\" /> " +
        "               <select class=\"form-control\" name='availability'>" +
        "                  <option value=\"1\"> En service </option>" +
        "                  <option value=\"2\"> Indisponible </option>" +
        "                  <option value=\"3\"> Hors service </option>" +
        "               </select></div>" +
        "<div class='row'><button id=\"addEquipmentButton\" type='submit' class=\"btn btn-success \" name='add'>Valider</button>" +
        "<button id=\"return\" type='button' class=\"btn btn-primary \">Retour</button></div></form>";

    const returnButton = document.getElementById("return");
    returnButton.addEventListener("click", function (e) {
        e.preventDefault();
        addEquipmentButton.style = "display : block;"
        addEquipmentArea.innerHTML = "";
    })
});