const updateButton = document.getElementById("update");
const detailsEquipement = document.getElementById("details");
const nameEquipement = document.getElementById("nameEquipment").innerText;
const descriptionEquipement = document.getElementById("descriptionEquipment").innerText;
const powerEquipment = document.getElementById("powerEquipment").innerText;
const priceEquipment = document.getElementById("priceEquipment").innerText;

updateButton.addEventListener("click", function (e) {
    e.preventDefault();
    detailsEquipement.style ="display: flex; justify-content: center;"
    detailsEquipement.innerHTML = "<form action='' class='formUpdate' method='post'>" +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' value='"+nameEquipement+"'></label></div>"+
        "<div class='form-group'><label>Description : <input type='textarea' class=\"form-control\" name='description_category' value='"+descriptionEquipement+"'></label></div>"+
        "<div class='form-group'><label>Puissance : <input type='number' class=\"form-control\" name='power' value='"+powerEquipment+"'></label></div>"+
        "<div class='form-group'><label>Prix HT : <input type='number' class=\"form-control\" name='price' value='"+priceEquipment+"'></label></div>"+
        "<div class='form-group'><input type='hidden' name='id_equipment' value=\"<?= $_GET['id_category']?>\"></div>"+
        "<button class='btn-success btn' type='submit' name='update' id='updateEquipment'>Valider</button></div>"+
        "</form>"
})