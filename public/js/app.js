const updateButton = document.getElementById("update");
const detailsEquipement = document.getElementById("details");
const nameEquipement = document.getElementById("nameEquipment").innerText;
const descriptionEquipement = document.getElementById("descriptionEquipment").innerText;
const powerEquipment = document.getElementById("powerEquipment").innerText;
const priceEquipment = document.getElementById("priceEquipment").innerText;
const insertCategoryButton = document.getElementById("insertCategoryButton");
const insertCategoryArea = document.getElementById("insertCategoryArea");

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

insertCategoryButton.addEventListener("click", function (e) {
    e.preventDefault();
    insertCategoryArea.innerHTML  = "<form action='' class='formInsert' method='post'>" +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' placeholder=\"Nom de l'équipement\" required></label></div>" +
        "<div class='form-group'><label>Description : <textarea class=\"form-control\" name='description_category'  required></textarea></label></div>" +
        "<div class='form-group'><label>Puissance : <input type='number' class=\"form-control\" name='power'  required></label></div>" +
        "<div class='form-group'><label>Prix HT : <input type='number' class=\"form-control\" name='price'  required></label></div>" +
        "<div class='form-group'><label>Image : <input type='number' class=\"form-control\" name='image'  required></label></div>" +
        "<p> <label> Quantité </label> <input type=\"number\" name=\"amount\" /> </p>\n" +
        "            <p> \n" +
        "               <select name='availability'>\n" +
        "                  <!-- <option value=\"disponible\"> Disponible </option> -->   \n" +
        "                  <option value=\"en_service\"> En service </option>\n" +
        "                  <option value=\"indisponible\"> Indisponible </option>\n" +
        "                  <option value=\"hors_service\"> Hors service </option>                                 \n" +
        "               </select>\n" +
        "            </p>"+
        "<button class='btn-success btn' type='submit' name='insert' id='insertEquipment'>Ajouter</button></div>" +
        "</form>"

})

