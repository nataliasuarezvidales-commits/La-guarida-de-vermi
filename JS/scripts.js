     // CHECKBOXES
const checkboxes = document.querySelectorAll('.checkbox-item input');
const tagsContainer = document.getElementById('tagsContainer');

// ARRAY DE FILTROS
let selectedFilters = [];

// EVENTO CHECKBOX
checkboxes.forEach((checkbox) => {

  checkbox.addEventListener('change', () => {

    const value = checkbox.value;

    if(checkbox.checked){

      selectedFilters.push(value);

    } else {

      selectedFilters = selectedFilters.filter(item => item !== value);

    }
    activeFilter(value);
  });

});

function activeFilter(filterName) {
  console.log(filterName)
  const activeItems = document.getElementsByClassName(filterName);
  console.log(activeItems)
  const allItems = document.getElementsByClassName('product-item');
  
  if()

  for (let index = 0; index < allItems.length; index++) {
    const element = allItems[index];
     element.classList.add('hidden');
  }

  for (let index = 0; index < activeItems.length; index++) {
    const element = activeItems[index];
    element.classList.remove('hidden');
  }
}