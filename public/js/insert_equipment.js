const insertCategoryButton = document.getElementById("insertCategoryButton");
const insertCategoryArea = document.getElementById("insertCategoryArea");

insertCategoryButton.addEventListener("click", function (e) {
    e.preventDefault();
    insertCategoryArea.innerHTML  = "<form action='' class='formInsert' method='post'>" +
        "<div class='form-group'><label>Nom : <input type='text' class=\"form-control\" name='name_category' placeholder=\"Nom de l'équipement\" required></label></div>" +
        "<div class='form-group'><label>Description : <textarea class=\"form-control\" name='description_category'  required></textarea></label></div>" +
        "<div class='form-group'><label>Puissance : <input type='number' class=\"form-control\" name='power'  required></label></div>" +
        "<div class='form-group'><label>Prix HT : <input type='number' class=\"form-control\" name='price'  required></label></div>" +
        "<div class='form-group'><label>Image : <input type='text' class=\"form-control\" name='image'  required></label></div>" +
        "<p> <label> Quantité </label> <input type=\"number\" name=\"amount\" /> </p>\n" +
        "            <p> \n" +
        "               <select name='availability'>\n" +
        "                  <!-- <option value=\"disponible\"> Disponible </option> -->   \n" +
        "                  <option value=\"1\"> En service </option>\n" +
        "                  <option value=\"2\"> Indisponible </option>\n" +
        "                  <option value=\"3\"> Hors service </option>                                 \n" +
        "               </select>\n" +
        "            </p>"+
        "<button class='btn-success btn' type='submit' name='insert' id='insertEquipment'>Ajouter</button></div>" +
        "</form>"
})