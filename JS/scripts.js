     // CHECKBOXES
const checkboxes = document.querySelectorAll('.checkbox-item input');
const tagsContainer = document.getElementById('tagsContainer');

// ARRAY DE FILTROS
let selectedFilters = [];

// EVENTO CHECKBOX
checkboxes.forEach((checkbox) => {

  checkbox.addEventListener('change', () => {
    const value = checkbox.value;
    if (!checkbox.checked) {
      const checkedBoxes = document.querySelectorAll('.checkbox-item input:checked');
      if (checkedBoxes.length === 0) {
        const allItems = document.querySelectorAll('.product-item');
        allItems.forEach(item => {
          item.classList.remove('hidden');
        });

        return;
      }
    }
    activeFilter(value);
  })
})

function activeFilter(filterName) {
  const activeItems = document.getElementsByClassName(filterName);
  const allItems = document.getElementsByClassName('product-item');

  for (let index = 0; index < allItems.length; index++) {
    const element = allItems[index];
     element.classList.add('hidden');
  }

  for (let index = 0; index < activeItems.length; index++) {
    const element = activeItems[index];
    element.classList.remove('hidden');
  }
}

const cartCount = document.getElementById('cartCount');
const cartButtons = document.querySelectorAll('.btn-cart');

  let count = localStorage.getItem('cartCount') || 0;
  cartCount.textContent = count;

  cartButtons.forEach(button => {
    button.addEventListener('click', () => {
      count++;
      cartCount.textContent = count;

      localStorage.setItem('cartCount', count);
  
  });
});

// Código del carrito
const addToCartBtn = document.getElementById("addToCartBtn");

//elimar producto
const deleteButtons = document.querySelectorAll('.delete');
  deleteButtons.forEach(button => {
    button.addEventListener('click', () => {
      const product = button.closest('.cart-item');
      product.remove()
    });
});

  deleteButtons.forEach(button => {
    button.addEventListener('click', () => {
      const product = button.closest('.cart-item');
      let count = parseInt(cartCount.textContent);
      count--;

      cartCount.textContent = count;
      localStorage.setItem('cartCount, count')

    });
  });