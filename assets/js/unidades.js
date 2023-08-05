// Asignación de categorías a sus respectivas unidades
const opcionUnidades = {
    longitud: ['Metro (m)', 'Centimetro (cm)', 'Milimetro (mm)', 'Kilometro (km)'],
    masa: ['Gramo (g)', 'kilogramo (kg)', 'Libra (lb)'],
    volumen: ['Galon (gal)', 'Litro (l)', 'Mililitro (ml)', 'Metro Cubico (m3)'],
    datos: ['bit', 'byte', 'Kilobytes (KB)', 'Megabytes (MB)', 'Gigabytes (GB)', 'Terabytes (TB)'],
    moneda: ['Dolar (USD)', 'Euro (EUR)', 'Libra (GBP)', 'Yen (JPY)'],
    tiempo: ['Segundo', 'Minuto', 'Hora', 'Día', 'Semana'],     
  };

  function unidadesConversion() {
    // Obteniendo los valores del form
    const categoriaSelect = document.getElementById('categoria');
    const uniSelect = document.getElementById('uni');
    const unfSelect = document.getElementById('unf');
  
    // Obteniendo la categoria seleccionada
    const seleccionarCategoria = categoriaSelect.value;
  
  
    // Rellenando el select "Unidad Inicial" con unidades basadas en la categoría seleccionada
    if (seleccionarCategoria === 'longitud') {
        addOption(uniSelect, 'Metro (m)');
        addOption(uniSelect, 'Centimetro (cm)');
        addOption(uniSelect, 'Milimetro (mm)');
        addOption(uniSelect, 'Kilometro (km)');
    } else if (seleccionarCategoria === 'masa') {
        addOption(uniSelect, 'Gramo (g)');
        addOption(uniSelect, 'Kilogramo (kg)');       
        addOption(uniSelect, 'Libra (lb)');
    } else if (seleccionarCategoria === 'volumen') {
        addOption(uniSelect, 'Galon (gal)');
        addOption(uniSelect, 'Litro (l)');       
        addOption(uniSelect, 'Mililitro (ml)'); 
        addOption(uniSelect, 'Metro Cubico (m3)'); 
    } else if (seleccionarCategoria === 'datos') {
        addOption(uniSelect, 'bit');
        addOption(uniSelect, 'byte');
        addOption(uniSelect, 'Kilobytes (KB)');
        addOption(uniSelect, 'Megabytes (MB)');
        addOption(uniSelect, 'Gigabytes (GB)');
        addOption(uniSelect, 'Terabytes (TB)');    
    } else if (seleccionarCategoria === 'moneda') {
        addOption(uniSelect, 'Dolar (USD)');
        addOption(uniSelect, 'Euro (EUR)');
        addOption(uniSelect, 'Libra (GBP)');
        addOption(uniSelect, 'Ten (JPY)');
    } else if (seleccionarCategoria === 'tiempo') {
        addOption(uniSelect, 'Segundo');
        addOption(uniSelect, 'Minuto');
        addOption(uniSelect, 'Hora');
        addOption(uniSelect, 'Dia');
        addOption(uniSelect, 'Semana');
  }   
  
  // Rellenando el select "Unidad final" con unidades basadas en la categoría seleccionada
  const options = uniSelect.innerHTML;
  unfSelect.innerHTML = options;
}

// Añadiendo las unidades seleccionadas
function addOption(selectElement, optionValue) {
    const option = document.createElement('option');
    option.value = optionValue;
    option.textContent = optionValue;
    selectElement.appendChild(option);
}

 
  // Añadiendo un receptor de eventos a la selección 'categoria' para llamar a la función en caso de cambio.
  document.getElementById('categoria').addEventListener('change', unidadesConversion);
  
  // Llamando a la función inicialmente para rellenar las unidades basadas en la categoría por defecto
  unidadesConversion();
  