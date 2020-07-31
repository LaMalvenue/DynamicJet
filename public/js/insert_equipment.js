const insertCategoryButton = document.getElementById("insertCategoryButton");
const insertCategoryArea = document.getElementById("insertCategoryArea");

insertCategoryButton.addEventListener("click", function (e) {
    e.preventDefault();
    insertCategoryArea.innerHTML  = "<form action='' class='formInsert' method='post'>" +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' placeholder='Kayak' required></label></div>" +
        "<div class='form-group'><label>Description : <input type='text' class=\"form-control\" name='description_category' placeholder='Un kayak pour faire le mariole' required></label></div>" +
        "<div class='form-group'><label>Puissance (0 si non motorisé) : <input type='number' class=\"form-control\" name='power' value='0' required></label></div>" +
        "<div class='form-group'><label>Prix HT (en €) : <input type='number' class=\"form-control\" name='price' placeholder='200' required></label></div>" +
        "<div class='form-group'><label>Image : <input type='text' class=\"form-control\" name='image' placeholder='Kayak.jpg' required></label></div>" +
        "<div class='form-group'><label> Quantité </label><input class=\"form-control\" type=\"number\" name=\"amount\" /> "+
        "               <select class=\"form-control\" name='availability'>" +
        "                  <option value=\"1\"> En service </option>" +
        "                  <option value=\"2\"> Indisponible </option>" +
        "                  <option value=\"3\"> Hors service </option>" +
        "               </select></div>"+
        "<button class='btn-success btn' type='submit' name='insert' id='insertEquipment'>Ajouter</button></div>" +
        "</form>"
})
