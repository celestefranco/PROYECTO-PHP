function clean() {
    // Obteniendo referencias de los elementos del formulario
    const valuInput = document.getElementById('value');
    const categorySelect = document.getElementById('categoria');
    const uniSelect = document.getElementById('uni');
    const unfSelect = document.getElementById('unf');
    
    // Restableciendo los valores de los elementos del formulario
    valuInput.value = '';
    categorySelect.selectedIndex = 0;
    uniSelect.innerHTML = '';
    unfSelect.innerHTML = '';
    document.getElementById('result').innerHTML = ''; 
}
 
 

