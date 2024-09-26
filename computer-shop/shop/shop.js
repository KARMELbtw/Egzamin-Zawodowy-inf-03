var categoriesList = document.getElementById('categoriesList');
var categoriesBtn = document.getElementById('categoriesBtn');

categoriesBtn.addEventListener("mouseover", (show) => {});
categoriesBtn.addEventListener("mouseout", (hide) => {});

categoriesBtn.onmouseover = (show) => {categoriesList.style.display = 'inline';};
categoriesList.onmouseover = (show) => {categoriesList.style.display = 'inline';};
onmouseout = (hide) => {categoriesList.style.display = 'none';};