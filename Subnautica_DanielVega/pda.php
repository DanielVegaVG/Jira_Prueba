<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="https://laravel.com/img/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;600&display=swap" rel="stylesheet">
    <title>PDA - Subnautica 2</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-div">
                <p id="color-sub">SUB</p><p id="color-nautica">NAUTICA </p><p id="color-sub">2</p>
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="index.html#intro">Introducción</a></li>
                <li><a href="https://subnautica2.gg">WIKI</a></li>
                <li><a href="pda.php">PDA</a></li>
            </ul>
        </nav>
    </header>

    <div class="layout">
        <?php
        // Cargar datos del JSON
        $json_data = file_get_contents('datos.json');
        $catalogo = json_decode($json_data, true);
        
        // Recopilar todos los items con su ruta de categoría
        $todos_items = [];
        
        if ($catalogo) {
            // Fauna - Depredadores
            if (isset($catalogo['fauna']['depredadores'])) {
                foreach ($catalogo['fauna']['depredadores'] as $item) {
                    $item['categoria_principal'] = 'fauna';
                    $item['subcategoria'] = 'depredadores';
                    $item['categoria_nombre'] = '🐟 Fauna - Depredadores';
                    $todos_items[] = $item;
                }
            }
            // Fauna - Herbívoros
            if (isset($catalogo['fauna']['herbivoros_pasivos'])) {
                foreach ($catalogo['fauna']['herbivoros_pasivos'] as $item) {
                    $item['categoria_principal'] = 'fauna';
                    $item['subcategoria'] = 'herbivoros_pasivos';
                    $item['categoria_nombre'] = '🐟 Fauna - Animales';
                    $todos_items[] = $item;
                }
            }
            // Fauna - Leviatanes
            if (isset($catalogo['fauna']['leviatanes'])) {
                foreach ($catalogo['fauna']['leviatanes'] as $item) {
                    $item['categoria_principal'] = 'fauna';
                    $item['subcategoria'] = 'leviatanes';
                    $item['categoria_nombre'] = '🐉 Fauna - Leviatanes';
                    $todos_items[] = $item;
                }
            }
            // Minerales
            if (isset($catalogo['minerales'])) {
                foreach ($catalogo['minerales'] as $item) {
                    $item['categoria_principal'] = 'minerales';
                    $item['categoria_nombre'] = '💎 Minerales';
                    $todos_items[] = $item;
                }
            }
            // Plantas
            if (isset($catalogo['plantas'])) {
                foreach ($catalogo['plantas'] as $item) {
                    $item['categoria_principal'] = 'plantas';
                    $item['categoria_nombre'] = '🌿 Plantas';
                    $todos_items[] = $item;
                }
            }
            // Vehículos
            if (isset($catalogo['vehiculos'])) {
                foreach ($catalogo['vehiculos'] as $item) {
                    $item['categoria_principal'] = 'vehiculos';
                    $item['categoria_nombre'] = '🚗 Vehículos';
                    $todos_items[] = $item;
                }
            }
        }
        ?>

        <!-- MENÚ LATERAL -->
        <div class="sidebar">
            <div class="sidebar-categoria">
                <div class="sidebar-titulo" onclick="toggleCategoria(this)">
                    🐟 FAUNA <span class="flecha">▶</span>
                </div>
                <div class="sidebar-items">
                    <?php foreach ($todos_items as $index => $item): ?>
                        <?php if ($item['categoria_principal'] == 'fauna'): ?>
                            <div class="sidebar-item" data-id="<?= $index ?>" onclick="seleccionarItem(<?= $index ?>)">
                                <?= htmlspecialchars($item['nombre']) ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="sidebar-categoria">
                <div class="sidebar-titulo" onclick="toggleCategoria(this)">
                    💎 MINERALES <span class="flecha">▶</span>
                </div>
                <div class="sidebar-items">
                    <?php foreach ($todos_items as $index => $item): ?>
                        <?php if ($item['categoria_principal'] == 'minerales'): ?>
                            <div class="sidebar-item" data-id="<?= $index ?>" onclick="seleccionarItem(<?= $index ?>)">
                                <?= htmlspecialchars($item['nombre']) ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="sidebar-categoria">
                <div class="sidebar-titulo" onclick="toggleCategoria(this)">
                    🌿 PLANTAS <span class="flecha">▶</span>
                </div>
                <div class="sidebar-items">
                    <?php foreach ($todos_items as $index => $item): ?>
                        <?php if ($item['categoria_principal'] == 'plantas'): ?>
                            <div class="sidebar-item" data-id="<?= $index ?>" onclick="seleccionarItem(<?= $index ?>)">
                                <?= htmlspecialchars($item['nombre']) ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="sidebar-categoria">
                <div class="sidebar-titulo" onclick="toggleCategoria(this)">
                    🚗 VEHÍCULOS <span class="flecha">▶</span>
                </div>
                <div class="sidebar-items">
                    <?php foreach ($todos_items as $index => $item): ?>
                        <?php if ($item['categoria_principal'] == 'vehiculos'): ?>
                            <div class="sidebar-item" data-id="<?= $index ?>" onclick="seleccionarItem(<?= $index ?>)">
                                <?= htmlspecialchars($item['nombre']) ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="contenido-principal" id="contenido-principal">
            <div class="mensaje-bienvenida">
                <h2>PDA, Base de Datos personal</h2>
                <p>Selecciona una criatura, mineral, planta o vehículo del menú lateral para ver su información detallada.</p>
            </div>
        </div>
    </div>

    <footer></footer>

    <script>
        // Datos de todos los items (pasados desde PHP a JavaScript)
        const todosItems = <?php echo json_encode($todos_items); ?>;
        
        function toggleCategoria(elemento) {
            elemento.classList.toggle('abierto');
            const itemsDiv = elemento.nextElementSibling;
            itemsDiv.classList.toggle('abierto');
        }
        
        function seleccionarItem(index) {
            document.querySelectorAll('.sidebar-item').forEach(item => {
                item.classList.remove('activo');
            });
            
            const items = document.querySelectorAll('.sidebar-item');
            if (items[index]) {
                items[index].classList.add('activo');
            }
            
            const item = todosItems[index];
            if (!item) return;
            
            const contenido = document.getElementById('contenido-principal');
            contenido.innerHTML = generarDetalleHTML(item);
        }
        
        function generarDetalleHTML(item) {
            // RUTA CORRECTA - las imágenes están en la carpeta img/
            const rutaImagen = `img/${item.imagen || 'placeholder.png'}`;
            
            let html = `
                <div class="detalle-card">
                    <div class="detalle-header">
                        <div class="detalle-imagen">
                            <img src="${rutaImagen}" alt="${item.nombre}" onerror="this.src='img/placeholder.png'">
                            <p>🔍 Escaneo completado</p>
                        </div>
                        <div class="detalle-info">
                            <span class="detalle-categoria">${escapeHTML(item.categoria_nombre)}</span>
                            <h1>${escapeHTML(item.nombre)}</h1>
                            <div class="detalle-descripcion">
                                ${escapeHTML(item.descripcion)}
                            </div>
                            <div class="detalle-atributos">
            `;
            
            if (item.peligrosidad) {
                html += `<div class="atributo"><div class="atributo-label">⚠️ PELIGROSIDAD</div><div class="atributo-valor">${escapeHTML(item.peligrosidad)}</div></div>`;
            }
            if (item.tamaño) {
                html += `<div class="atributo"><div class="atributo-label">📏 TAMAÑO</div><div class="atributo-valor">${escapeHTML(item.tamaño)}</div></div>`;
            }
            if (item.bioma || item.ubicacion) {
                html += `<div class="atributo"><div class="atributo-label">🌍 BIOMA / UBICACIÓN</div><div class="atributo-valor">${escapeHTML(item.bioma || item.ubicacion)}</div></div>`;
            }
            if (item.comportamiento) {
                html += `<div class="atributo"><div class="atributo-label">🐟 COMPORTAMIENTO</div><div class="atributo-valor">${escapeHTML(item.comportamiento)}</div></div>`;
            }
            if (item.dieta) {
                html += `<div class="atributo"><div class="atributo-label">🍖 DIETA</div><div class="atributo-valor">${escapeHTML(item.dieta)}</div></div>`;
            }
            if (item.rareza) {
                html += `<div class="atributo"><div class="atributo-label">✨ RAREZA</div><div class="atributo-valor">${escapeHTML(item.rareza)}</div></div>`;
            }
            if (item.uso) {
                html += `<div class="atributo"><div class="atributo-label">🔧 USO</div><div class="atributo-valor">${escapeHTML(item.uso)}</div></div>`;
            }
            if (item.tipo) {
                html += `<div class="atributo"><div class="atributo-label">🚗 TIPO</div><div class="atributo-valor">${escapeHTML(item.tipo)}</div></div>`;
            }
            if (item.capacidad) {
                html += `<div class="atributo"><div class="atributo-label">👥 CAPACIDAD</div><div class="atributo-valor">${escapeHTML(item.capacidad)}</div></div>`;
            }
            if (item.mejoras) {
                html += `<div class="atributo"><div class="atributo-label">⚡ MEJORAS</div><div class="atributo-valor">${escapeHTML(item.mejoras)}</div></div>`;
            }
            if (item.profundidad_max) {
                html += `<div class="atributo"><div class="atributo-label">⬇️ PROFUNDIDAD MÁXIMA</div><div class="atributo-valor">${escapeHTML(item.profundidad_max)}</div></div>`;
            }
            if (item.recompensa_escaneo) {
                html += `<div class="atributo"><div class="atributo-label">🔬 RECOMPENSA ESCANEO</div><div class="atributo-valor">${escapeHTML(item.recompensa_escaneo)}</div></div>`;
            }
            if (item.regeneracion) {
                html += `<div class="atributo"><div class="atributo-label">🔄 REGENERACIÓN</div><div class="atributo-valor">${escapeHTML(item.regeneracion)}</div></div>`;
            }
            
            html += `
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            return html;
        }
        
        function escapeHTML(str) {
            if (!str) return '';
            return str.replace(/[&<>]/g, function(m) {
                if (m === '&') return '&amp;';
                if (m === '<') return '&lt;';
                if (m === '>') return '&gt;';
                return m;
            });
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const primerosTitulos = document.querySelectorAll('.sidebar-titulo');
            if (primerosTitulos.length > 0) {
                toggleCategoria(primerosTitulos[0]);
            }
        });
    </script>
</body>
</html>